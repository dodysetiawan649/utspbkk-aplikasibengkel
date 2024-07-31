<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\barang;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class barangController extends Controller
{
    public function index()
    {
        $databarang = barang::all();
        return view('barang.index', compact('databarang'));
    }

    public function create(): View
    {
        $supplier = supplier::all();
        return view('barang.create', compact('supplier'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'supplier' => 'required',
            'nama_barang'  => 'required',
            'merek'        => 'required',
            'harga'       => 'required',
            'stok'        => 'required',
            'satuan'        => 'required',
        ]);
        barang::create([
            'supplier_id' => $request->supplier,
            'nama_barang'  => $request->nama_barang,
            'merek'        => $request->merek,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'satuan'        => $request->satuan,
        ]);
        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $databarang = barang::findOrFail($id);
        $supplier = supplier::all();
        return view('barang.edit', compact('databarang', 'supplier'));
    }

    public function show(string $id): View
    {
        $barang = barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'supplier' => 'required',
            'nama_barang'  => 'required',
            'merek'        => 'required',
            'harga'       => 'required',
            'stok'        => 'required',
            'satuan'        => 'required',
        ]);

        $databarang = barang::findOrFail($id);
        $databarang->update([
            'supplier_id' => $request->supplier,
            'nama_barang'  => $request->nama_barang,
            'merek'        => $request->merek,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'satuan'        => $request->satuan,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
