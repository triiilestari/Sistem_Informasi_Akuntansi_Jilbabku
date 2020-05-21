@extends('layouts.main')
    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Tambah Data Produk</div>
        <br>
        <br>
        <br>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="Produk.index">
                    @csrf
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="KodeBarang">Kode Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="KodeBarang" name="KodeBarang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NamaBarang">Nama Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NamaBarang" name="NamaBarang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="JenisBarang">Jenis Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green checked" style="position: relative;">
                              <input type="radio" value="Instan" class="flat" checked="" name="JenisBarang" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Instan</label>
                          </div>
                          <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green checked" style="position: relative;">
                              <input type="radio" value="Pashmina" class="flat" checked="" name="JenisBarang" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Pashmina </label>
                          </div>
                        <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green checked" style="position: relative;">
                              <input type="radio" value="Selobokan" class="flat" checked="" name="JenisBarang" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Selobokan</label>
                          </div>
                        <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green checked" style="position: relative;">
                              <input type="radio" value="Segi Empat" class="flat" checked="" name="JenisBarang" style="position: absolute; opacity: 0;">
                              <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Segi Empat</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Jumlah">Jumlah<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" min="1" name ="Jumlah" id="Jumlah" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Harga">Harga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Harga" class="date-picker form-control col-md-7 col-xs-12" required="required" type="integer" name="Harga">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="/Produk.index" class="btn btn-primary">Cancel</a>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button href="/Produk.index" type="submit" class="btn btn-success">Submit</button>
                        </div></div>
        </div>
        
    @endsection