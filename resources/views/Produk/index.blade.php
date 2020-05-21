@extends('layouts.main')

    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Produk</div>
        <br>
        <a href="Produk.create" class="btn btn-sm btn-danger">TAMBAH DATA +</a>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_content">
                <table id="datatable" class="table table-striped jambo_table bulk-action">
                    <thead >
                    <tr class="headings">
                        <th scope="row">No.</th>
                        <th>Tanggal</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Update Data Stock</th>
                        <th>Penginput</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $produk as $produk )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk->created_at }}</td>
                        <td>{{ $produk->KodeBarang }}</td>
                        <td>{{ $produk->NamaBarang }}</td>
                        <td>{{ $produk->JenisBarang }}</td>
                        <td>{{ $produk->Jumlah }}</td>
                        <td>{{ $produk->Harga }}</td>
                        <td>
                        <a href="{{$produk->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        </td>
                        <td>{{ $produk->Nama }}</td>
                        
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div id="data"></div>
            </div>
        </div>
    @endsection

