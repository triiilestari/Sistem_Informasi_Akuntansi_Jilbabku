@extends('layouts.main')

    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Penjualan</div>
        <br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_content">
                <div id="produk"></div>
            </div>
        </div>
        <br>
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Stok Produk</div>
        <br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="x_panel">
            <div class="x_content">
                <div id="data"></div>
            </div>
        </div>
    @endsection

    @section('footer')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            Highcharts.chart('produk', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ' '
                },
                xAxis: {
                    categories: [''],
                    // categories: {!!json_encode([$data])!!},
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total item'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} item </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [
                //     {
                //     name: 'Instan',
                //     data: {!!json_encode($data)!!}
                // }, 
                @foreach($data as $item)
                {
                    name: '{{$item->jenisbarang}}',
                    data: [{{$item->jumlah}}]

                },
                @endforeach
             
                ]
            });
        </script>
        
        <script>
            Highcharts.chart('data', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ' '
                },
                xAxis: {
                    categories: [''],
                    // categories: {!!json_encode([$categories2])!!},
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total item'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} item </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [
                    @foreach ($produk as $item)
                    {
                    name: '{{$item->NamaBarang}}',
                    data: [{{$item->Jumlah}}]
                    },
                    @endforeach
                ]
            });
        </script>

        
@endsection