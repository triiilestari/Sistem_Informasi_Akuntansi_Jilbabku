@extends('layouts.main')

    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Pemasukkan</div>
        <br>
        <a href="Pegawai/createpemasukkan" class="btn btn-sm btn-danger">TAMBAH DATA +</a>
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
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Nama</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $pemasukkan as $pemasukkan )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pemasukkan->created_at}}</td>
                        <td>{{ $pemasukkan->KodeBarang }}</td>
                        <td>{{ $pemasukkan->Jumlah }}</td>
                        <td>{{ $pemasukkan->Total }}</td>
                        <td>{{ $pemasukkan->Nama }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection