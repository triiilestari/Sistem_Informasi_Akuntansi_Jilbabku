@extends('layouts.main')
@section('title','SIA JILBAB KU | Dashboard')
@section('container')
<div class="x_panel">
    <div class="x_content">
        <br>
        <br>
        <div style="text-align: center; font-family: Bookman Old Style; font-size:50px">TOKO JILBAB KU</div>
        <br>
        <br>
        <br>
    </div>
</div>
<div class="row" style="display: inline;">
            <div class="top_tiles">
            @if (Auth::user()->hasAnyRole('Owner'))
            <a href="{{ url('Pemasukkan.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6" >
                <div class="tile-stats">
                    <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa fa-table"></i></div>
                  <div class="count">Data Pemasukkan</div>
                  <h3>Data keuangan hasil penjualan</h3>
                  <br>
                    <br>
                    <br>
                </div>
                </div>
            </a>
            <a href="{{ url('Pengeluaran.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa fa-credit-card"></i></div>
                  <div class="count">Data Pengeluaran</div>
                  <h3>Data pengeluaran toko</h3>
                  <br>
                    <br>
                    <br>
                </div>
              </div>
            </a>
            <a href="{{ url('Produk.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa fa-edit"></i></div>
                  <div class="count">Data Produk</div>
                  <h3>Data produk toko</h3>
                  
                  <br>
                    <br>
                    <br>
                </div>
              </div>
            </a>
            <a href="{{ url('Keuangan.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa  fa-bar-chart"></i></div>
                  <div class="count">Grafik</div>
                  <h3>Grafik data produk dan penjualan</h3>
                 
                  <br>
                    <br>
                    <br>
                </div>
              </div>
            </a>
            </div>
            @endif
            @if (Auth::user()->hasAnyRole('Pegawai'))
            <a href="{{ url('Pemasukkan.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6" >
                <div class="tile-stats">
                    <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa fa-table"></i></div>
                  <div class="count">Data Pemasukkan</div>
                  <h3>Data keuangan hasil penjualan</h3>
                  <br>
                    <br>
                    <br>
                </div>
                </div>
            </a>
            <a href="{{ url('Produk.index')}}">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                <br>
                    <br>
                    <br>
                  <div class="icon"><i class="fa fa-edit"></i></div>
                  <div class="count">Data Produk</div>
                  <h3>Data produk toko</h3>
                  
                  <br>
                    <br>
                    <br>
                </div>
              </div>
            </a>
            </div>
            @endif


    </div>
</div>
@endsection

