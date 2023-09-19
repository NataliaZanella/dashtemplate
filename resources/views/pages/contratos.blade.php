@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contratos'
])


@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contratos/Dotação</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Categoria</th>
                                    <th>Ano de Vigência</th>
                                    <th>(R$)Valor do Contrato</th>
                                    <th> Data de Inicio</th>
                                    <th>Empresa Prestadora</th>
                                </thead>
                                <tbody>
                                     @foreach ($Contrato as $contrato)
                                    <tr>
                                        <td>{{$contrato->Nome}}</td>
                                        <td>{{$contrato->Tipo}}</td>
                                        <td>{{$contrato->Subcategoria}}</td>
                                        <td>{{ date('d/m/y', strtotime($contrato->Ano_vigencia))}}</td>
                                        <td>R${{$contrato->Valor_total}}</td>
                                        <td>{{ date('d/m/y', strtotime($contrato->Data_inicio))}}</td>
                                        <td>{{$contrato->Empresa_prestadora}}</td>
                                    </tr>
                                    @endforeach  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection