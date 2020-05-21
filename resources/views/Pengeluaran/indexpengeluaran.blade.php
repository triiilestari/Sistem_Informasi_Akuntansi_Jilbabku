@extends('layouts.main')

    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Pemasukkan</div>
        <br>
        <a href="Pengeluaran.create" class="btn btn-sm btn-danger">TAMBAH DATA +</a>
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
                        <th>Pengeluaran</th>
                        <th>Instansi</th>
                        <th>Nominal</th>
                        <th>Nama</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $pengeluaran as $pengeluaran )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pengeluaran->created_at}}</td>
                        <td>{{ $pengeluaran->Pengeluaran }}</td>
                        <td>{{ $pengeluaran->Instansi }}</td>
                        <td>{{ $pengeluaran->Nominal }}</td>
                        <td>{{ $pengeluaran->Nama }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection