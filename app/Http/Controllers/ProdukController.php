<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;
use Auth;
use Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();

        //chart
        $categories = [];
        $data = [];

        foreach($produk as $p){
            $categories[] = $p->NamaBarang;
            $data[] = $p->Jumlah;
        }

        //dd($categories);

        return view('Produk.index', ['produk' => $produk, 'categories' => $categories, 'data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Produk.create');
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
        $validator=Validator::make($request->all(),[
            'KodeBarang' => 'required|unique:produks,KodeBarang',

        ]);
        
            if ($validator->fails()){
                return redirect()->route('Produk.create')->with('error','Kode Barang telah digunakan');
            }
        Produk::create([
            'id_users' => Auth::user()->id,
            'Nama' => Auth::user()->name,
            'KodeBarang' => $request->KodeBarang,
            'NamaBarang' => $request->NamaBarang,
            'JenisBarang' => $request->JenisBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('Produk.index')->with('status','Data Produk Berhasil di Tambahkan');

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
    public function edit(Produk $produk)
    {
        //
        return view('Produk.edit', ['produk'=> $produk]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Produk $produk)
    {
        //
        Produk::where('id',$produk->id)
                ->update([
                    'Jumlah' => $request->Jumlah
                    ]);
        return redirect('Produk.index')->with('status','Data Produk Berhasil di Ubah');
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
