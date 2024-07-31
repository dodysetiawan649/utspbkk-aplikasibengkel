<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\kendaraan;
use App\Models\keluhan;
use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class kendaraanController extends Controller
{
    public function index()
    {
        $datakendaraan = kendaraan::all();
        return view('kendaraan.index', compact('datakendaraan'));
    }

    public function create(): View
    {
        $keluhan = customers::select('no_pol')->get();
        return view('kendaraan.create', compact('keluhan'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_pol'  => 'required',
            'no_mesin'        => 'required',
            'merek'       => 'required',
            'warna'        => 'required',
        ]);
        kendaraan::create([
            'no_pol'  => $request->no_pol,
            'no_mesin'        => $request->no_mesin,
            'merek'       => $request->merek,
            'warna'        => $request->warna,
        ]);
        //redirect to index
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $datakendaraan = kendaraan::findOrFail($id);
        $keluhan = keluhan::select('no_pol')->get();
        return view('kendaraan.edit', compact('datakendaraan', 'keluhan'));
    }

    public function show(string $id): View
    {
        $kendaraan = kendaraan::findOrFail($id);
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_pol'  => 'required',
            'no_mesin'        => 'required',
            'merek'       => 'required',
            'warna'        => 'required',
        ]);

        $datakendaraan = kendaraan::findOrFail($id);
        $datakendaraan->update([
            'no_pol'  => $request->no_pol,
            'no_mesin'        => $request->no_mesin,
            'merek'       => $request->merek,
            'warna'        => $request->warna,
        ]);

        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kendaraan = kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
