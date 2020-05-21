<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Produk;
use App\Pengeluaran;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //chart
                $data = DB::table('produks')
                ->join('pemasukkans', function($join){
                    $join->on('pemasukkans.KodeBarang','=','produks.KodeBarang');
                })
                ->select(DB::raw('SUM(pemasukkans.jumlah) as jumlah'),'produks.jenisbarang')
                ->groupBy('produks.JenisBarang')
                ->get();
                // ->select('produks.jenisbarang','pemasukkans.jumlah')
                // return $data;
                // return $data;
                // return $data;
                // $pengeluaran = Pengeluaran::all();
                // $categories = [];
                // $data = [];
        
                // foreach($join){
                    // $categories[] = $join->produks.JenisBarang;
                    // $data[] = $join->pemasukkans.Jumlah;

                // }
        
                //dd($categories);
                $produk = Produk::all();

        //chart
        $categories = [];
        $data2 = [];

        foreach($produk as $p){
            $categories2[] = $p->NamaBarang;
            $data2[] = $p->Jumlah;
        }

        //dd($categories);

        // return view('Produk.index', ['produk' => $produk, 'categories' => $categories, 'data' => $data]);
        
                return view('Keuangan.index', compact('data','data2','categories2','produk'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
