@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="card card-stats bg-success">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div> --}}
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category text-dark">Saldo Disponível</p>
                                    @foreach ($saldos as $saldo)
                                    <p class="card-title">R${{$saldo->SaldoDisponivel}} <p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats text-dark">
                            <i class="fa fa-refresh"></i> Atualizado
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats bg-primary">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div> --}}
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category text-dark">Saldo Total</p>
                                    @foreach ($saldos as $saldo)
                                    <p class="card-title">R${{$saldo->SaldoTotal}}<p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats text-dark">
                            <i class="fa fa-refresh"></i> Atualizado
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats bg-danger">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-vector text-danger"></i>
                                </div> --}}
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category text-dark">Saldo Utilizado</p>
                                    @foreach ($saldos as $saldo)
                                    <p class="card-title">R${{$saldo->SaldoUtilizado}} <p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats text-dark">
                            <i class="fa fa-refresh"></i> Atualizado
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats bg-warning">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                                </div> --}}
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category text-dark">Saldo Reserva</p>
                                    @foreach ($saldos as $saldo)
                                    <p class="card-title">R${{$saldo->SaldoReserva}} <p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats text-dark">
                            <i class="fa fa-refresh "></i> Atualizado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Estatísticas</h5>
                        {{-- <p class="card-category">Last Campaign Performance</p> --}}
                    </div>
                    <div class="card-body ">
                        <canvas id="chartEmail"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            {{-- <i class="fa fa-circle text-primary"></i> Total --}}
                            <i class="fa fa-circle text-warning"></i> Reserva - R${{$saldo->SaldoReserva}}
                            <br>
                            <i class="fa fa-circle text-danger"></i> Utilizado - R${{$saldo->SaldoUtilizado}}
                            <br>
                            <i class="fa fa-circle text-success"></i> Disponivel - R${{$saldo->SaldoDisponivel}}
                        </div>
                        <hr>
                        {{-- <div class="stats">
                            <i class="fa fa-calendar"></i> Number of emails sent
                        </div> --}}
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-0">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Análise</h5>
                         <p class="card-category">Gasto Mensal</p> 
                    </div>
                    <div class="card-body">
                        <canvas id=chartHours></canvas>  
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Atualizado
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {{--<div class="col-md-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">Análise</h5>
                         <p class="card-category">Line Chart with Points</p> 
                    </div>
                    <div class="card-body">
                        <canvas id="speedChart" width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer">
                         <div class="chart-legend">
                            <i class="fa fa-circle text-info"></i> Tesla Model S
                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                        </div>
                        <hr />
                        <div class="card-stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush