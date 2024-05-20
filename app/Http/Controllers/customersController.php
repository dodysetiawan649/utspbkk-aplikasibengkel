<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class customersController extends Controller
{
    public function index(): View
    {
       $datacustomers= customers::latest()->paginate(10);
       return view('customers.index',compact('datacustomers'));
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse
    {
       // validate form
        $request->validate([
            'no_pol'              => 'required',
            'nama_customers'      => 'required',
            'alamat'              => 'required',
            'jenis_kelamin'       => 'required'
         ]);

        customers::create([
            'no_pol'                => $request->no_pol,
            'nama_customer'        => $request->nama_customers,
            'alamat'                => $request->alamat,
            'jenis_kelamin'         => $request->jenis_kelamin
        ]);
        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $datacustomers = customers::findOrFail($id);
        return view('customers.edit', compact('datacustomers'));
    }

    public function show(string $id): View
    {
        $customers = customers::findOrFail($id);

        return view('customers.show', compact('customers'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // dd($request->all());
        //validate form
        $request->validate([
        'no_pol'              => 'required',
        'nama_customers'      => 'required',
        'alamat'              => 'required',
        'jenis_kelamin'       => 'required'
    
        ]);

        $datacustomers = customers::findOrFail($id);
        $datacustomers->update([
            'no_pol'                => $request->no_pol,
            'nama_customer'        => $request->nama_customers,
            'alamat'                => $request->alamat,
            'jenis_kelamin'         => $request->jenis_kelamin
            ]);

        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $customers = customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
