<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pemasukkan;
use Auth;


class PemasukkanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemasukkan = Pemasukkan::all();
        return view('Pemasukkan/index', ['pemasukkan' => $pemasukkan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $produk = \App\Produk::all();
        return view('Pemasukkan/create',['produk' => $produk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Pemasukkan::create([
            'Nama' => Auth::user()->name,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Total' => $request->Total
        ]);
        $produk = \App\Produk::where('KodeBarang','=',$request->KodeBarang)->first();
        $hasilKurang = $produk->Jumlah - $request->Jumlah;
        \App\Produk::where('KodeBarang','=',$request->KodeBarang)
            ->update([
                'Jumlah' => $hasilKurang,
            ]);
        return redirect('Pemasukkan.index')->with('status','Data Produk Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
