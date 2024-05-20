<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class supplierController extends Controller
{
    public function index(): View
    {
       $datasupplier= supplier::latest()->paginate(10);
       return view('supplier.index',compact('datasupplier'));
    }

    public function create(): View
    {
        return view('supplier.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_supplier'      => 'required',
            'alamat'             => 'required',
            'no_hp'              => 'numeric'
        ]);

        supplier::create([
            'nama_supplier'        => $request->nama_supplier,
            'alamat'               => $request->alamat,
            'no_hp'                => $request->no_hp
        ]);
        //redirect to index
        return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $datasupplier = supplier::findOrFail($id);
        return view('supplier.edit', compact('datasupplier'));
    }

    public function show(string $id): View
    {
        $supplier = supplier::findOrFail($id);

        return view('supplier.show', compact('supplier'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_supplier'      => 'required',
            'alamat'             => 'required',
            'no_hp'              => 'numeric'
        ]);

        $datasupplier = supplier::findOrFail($id);
        $datasupplier->update([
             'nama_supplier'  => $request->nama_supplier,
             'alamat'  => $request->alamat,
             'no_hp'  => $request->no_hp
            ]);

        return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $supplier = supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
