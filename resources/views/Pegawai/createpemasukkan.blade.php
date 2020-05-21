@extends('layouts.main')
@section('title','SISI HIJAB_KU')

@section('container')
    <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Tambah Data Pemasukkan</div>
    <br>
    <br>
    <br>
    <div class="x_panel">
        <div class="x_title">
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="Pegawai/indexpemasukkan">
                @csrf
                 <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="KodeBarang">Kode Barang <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="KodeBarang" id="KodeBarang" class="form-control col-md-7 col-xs-12">
                        @foreach ($produk as $item)
                      <option value="{{ $item->KodeBarang }}" data-max="{{ $item->Jumlah }}" harga="{{ $item->Harga}}">{{ $item->KodeBarang }}</option>
                        @endforeach
                      </select>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Total">Total<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="Total" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" name="Total">
                    </div>
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <a href="/Produk.index" class="btn btn-primary">Cancel</a>
                      <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div></div>
    </div>
    
@endsection

@push('js')
    <script>
      $(document).ready(function () {
        $('#KodeBarang').change(function (){
          let maxValue = $(this).find('option:selected').data('max')
          $('#Jumlah').prop('max', maxValue)
        });
        $('#Jumlah').change(function (){
          let Value = $(this).val()
          let Harga = $("#KodeBarang option:selected").attr('harga')
          // console.log(Harga)

          $('#Total').val(Value*Harga)
        });


      });
    </script>
@endpush


{{-- @section('js')

  <script>
    function itung(){
      int x;
      x = (document.getElementById("KodeBarang").harga * document.getElementById("Jumlah").value);
      document.getElementById("Total").value = x;
    }
  </script>

@endsection --}}
