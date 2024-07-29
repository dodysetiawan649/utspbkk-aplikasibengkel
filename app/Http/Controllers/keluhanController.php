<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\keluhan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\pegawai;
use App\Models\customers;

class keluhanController extends Controller
{
    public function index()
    {
        $datakeluhan = keluhan::all();
        return view('keluhan.index', compact('datakeluhan'));
    }

    public function create(): View
    {
        $pegawai = pegawai::all();
        $customer = customers::all();
        return view('keluhan.create', compact('pegawai', 'customer'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_keluhan'  => 'required',
            'ongkos'        => 'required',
            'no_pol'       => 'required',
            'customer_id'        => 'required',
            'id_pegawai'        => 'required',
        ]);
        keluhan::create([
            'nama_keluhan'  => $request->nama_keluhan,
            'ongkos'        => $request->ongkos,
            'no_pol'       => $request->no_pol,
            'customer_id'        => $request->customer_id,
            'pegawai_id'        => $request->id_pegawai,
        ]);
        //redirect to index
        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $datakeluhan = keluhan::findOrFail($id);
        $pegawai = pegawai::all();
        $customer = customers::all();
        return view('keluhan.edit', compact('datakeluhan', 'pegawai', 'customer'));
    }

    public function show(string $id): View
    {
        $keluhan = keluhan::findOrFail($id);
        return view('keluhan.show', compact('keluhan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_keluhan'  => 'required',
            'ongkos'        => 'required',
            'no_pol'       => 'required',
            'customer_id'        => 'required',
            'id_pegawai'        => 'required',
        ]);

        $datakeluhan = keluhan::findOrFail($id);
        $datakeluhan->update([
            'nama_keluhan'  => $request->nama_keluhan,
            'ongkos'        => $request->ongkos,
            'no_pol'       => $request->no_pol,
            'customer_id'        => $request->customer_id,
            'id_pegawai'        => $request->id_pegawai,
        ]);

        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $keluhan = keluhan::findOrFail($id);
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
