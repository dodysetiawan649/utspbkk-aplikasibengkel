<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\keluhan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\pegawai;
use App\Models\customers;
use App\Models\barang;

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
        $barang = barang::all();
        $no_pol = customers::select('no_pol')->get();
        return view('keluhan.create', compact('pegawai', 'customer', 'barang', 'no_pol'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'keluhan'  => 'required',
            'no_pol'       => 'required',
            'customer_id'        => 'required',
            'id_pegawai'        => 'required',
        ]);
        $nama_barang = explode('_', $request->keluhan);
        $barang = barang::find($nama_barang[0]);
        keluhan::create([
            'barang_id' => $nama_barang[0],
            'nama_keluhan'  => $nama_barang[1],
            'ongkos'        => $barang->harga,
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
        $barang = barang::all();
        $no_pol = customers::select('no_pol')->get();
        return view('keluhan.edit', compact('datakeluhan', 'pegawai', 'customer', 'barang', 'no_pol'));
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
            'keluhan'  => 'required',
            'no_pol'       => 'required',
            'customer_id'        => 'required',
            'id_pegawai'        => 'required',
        ]);

        $nama_barang = explode('_', $request->keluhan);
        $datakeluhan = keluhan::findOrFail($id);
        $barang = barang::find($nama_barang[0]);
        $datakeluhan->update([
            'barang_id' => $nama_barang[0],
            'nama_keluhan'  => $nama_barang[1],
            'ongkos'        => $barang->harga,
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
