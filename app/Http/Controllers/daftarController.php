<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;

class daftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = daftar::latest()->paginate(5);

        return view('pdaftar.index', compact('daftar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Universitas' => 'required',
            'TTL' => 'required',
            'Alamat' => 'required',
            'Email' => 'required'
        ]);

        daftar::create($request->all());

        return redirect()->route('daftar.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(daftar $daftar)
    {
        return view('daftar.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(daftar $daftar)
    {
        return view('daftar.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daftar $daftar)
    {
        $request->validate([
            'Nama' => 'required',
            'Universitas' => 'required',
            'TTL' => 'required',
            'Alamat' => 'required',
            'Email' => 'required'
        ]);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftar $daftar)
    {
        $product->delete();

        return redirect()->route('daftar.index')
            ->with('success', 'Form deleted successfully');
    }
}
