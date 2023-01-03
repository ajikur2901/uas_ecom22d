@extends('admin_layouts.template')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    <p class="text-subtitle text-muted">{{$deskripsi}}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="penjualan"></div>
                        </div>
                        <div class="col-lg-6">
                            <div id="stok"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    

@endsection

@section('custom_js')
    <script src="{{asset('extensions/dayjs/dayjs.min.js')}}"></script>
    <script src="{{asset('extensions/apexcharts/apexcharts.min.js')}}"></script>
    {{-- <script src="{{asset('js/pages/ui-apexchart.js')}}"></script> --}}
    <script>
            var penjualanOptions = {
                chart: {
                    type: "line",
                },
                series: [
                    {
                    name: "Penjualan",
                    data: [30, 40, 35, 50, 49, 60, 70, 91, 125],
                    },
                ],
                xaxis: {
                    categories: [
                        "Jan 2022", "Feb 2022", "Mar 2022", "Apr 2022", "Mei 2022", "Jun 2022", 
                        "Jul 2022", "Ags 2022", "Sep 2022", "Okt 2022", "Nov 2022", "Des 2022"
                    ],
                    tooltip: {
                        enabled: false,
                    }
                },
                title: {
                    text: 'Penjualan 12 Bulan Terakhir',
                    floating: true,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            }
            var penjualan = new ApexCharts(document.querySelector("#penjualan"), penjualanOptions)
            penjualan.render()
            
            
            var stokOptions = {
                series: [{
                    name: 'Stok',
                    data: [100,20,30,40,1]
                }],
                chart: {
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) {
                        return val;
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },

                xaxis: {
                    categories: ["Pelampung", "Helm", "Pelindung lutut", "Perahu karet", "Jas hujan"],
                    position: 'bottom',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                            type: 'gradient',
                            gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                            }
                        }
                    },
                    tooltip: {
                        enabled: false,
                    }
                },
                title: {
                    text: 'Stok Barang',
                    floating: true,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var stokChart = new ApexCharts(document.querySelector("#stok"), stokOptions);
            stokChart.render();
    </script>
@endsection