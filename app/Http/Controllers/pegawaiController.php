<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class pegawaiController extends Controller
{
    public function index(): View
    {
       $datapegawai= pegawai::latest()->paginate(10);
       return view('pegawai.index',compact('datapegawai'));
    }

    public function create(): View
    {
        return view('pegawai.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_pegawai'  => 'required',
            'alamat'        => 'required',
            'jabatan'       => 'required',
            'status'        => 'required',
        ]);

        pegawai::create([
            'nama_pegawai'        => $request->nama_pegawai,
            'alamat'              => $request->alamat,
            'jabatan'             => $request->jabatan,
            'status'              => $request->status,
        ]);
        //redirect to index
        return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $datapegawai = pegawai::findOrFail($id);
        return view('pegawai.edit', compact('datapegawai'));
    }

    public function show(string $id): View
    {
        $pegawai = pegawai::findOrFail($id);

        return view('pegawai.show', compact('pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_pegawai'      => 'required',
            'alamat'            => 'required',
            'jabatan'           => 'required',
            'status'            => 'required',
        ]);

        $datapegawai = pegawai::findOrFail($id);
        $datapegawai->update([
             'nama_pegawai'     => $request->nama_pegawai,
             'alamat'           => $request->alamat,
             'jabatan'          => $request->jabatan,
             'status'           => $request->status,
            ]);

        return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
