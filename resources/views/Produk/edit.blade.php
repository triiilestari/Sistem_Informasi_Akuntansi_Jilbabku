@extends('layouts.main')

    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Edit Data Produk</div>
        <br>
        <br>
        <br>
        <div class="x_panel">
          <div class="">
          <h1>Produk {{$produk->NamaBarang}}</h1>
          <div class="x_content">
            <table class="table table-hover">
              <tbody>
                  <tr>
                    <th>Kode produk</th>
                    <td>: {{$produk->KodeBarang}}</td>
                    <td> </td>
                    <td> </td>
                  <tr>
                <tr>
                  <th>Nama produk</th>
                  <td>: {{$produk->NamaBarang}}</td>
                  <td> </td>
                  <td> </td>
                <tr>
                  <th scope="row">Jenis Produk</th>
                  <td>: {{$produk->JenisBarang}}</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">Harga</th>
                  <td>: {{$produk->Harga}}</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th>Jumlah Barang </th>
                  <td>: {{$produk->Jumlah}}</td>
                  <td> </td>
                  <td> </td>
                </tr>
              </tbody>
            </table>
            <br>
            <h2>Ubah Data Jumlah Barang {{$produk->NamaProduk}}</h2>
          <form method="post" action="/Produk.index/{{$produk->id}}" enctype="multipart/form-data">
              @method('patch')
              @csrf
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Harga">Jumlah<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="{{$produk->Jumlah}}" min="{{$produk->Jumlah}}" id="Jumlah" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" name="Jumlah">
                  </div>
                </div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <br>
                  <a href="/Produk.index" class="btn btn-sm btn-primary">Cancel</a></button>
                  <button type="submit" class="btn btn-success">Ubah Data</button>
                </div>
              </div>
            </form>
          </div>
          </div>
          </div>
    @endsection