@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'adicionar'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Adicionar+</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <form action=" {{ route('adicionar.store') }} " method="POST">
                                      @csrf
                                        <div class="form-group">
                                          <label for="">Nome</label>
                                          <input type="text" class="form-control" name="Nome" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Tipo</label>
                                          <input type="text" class="form-control" name="Tipo" placeholder="Tipo">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Categoria</label>
                                            <input type="text" class="form-control" name="Subcategoria" placeholder="Categoria">
                                          </div> 
                                          <div class="form-group">
                                            <label for="">Data de Inicio</label>
                                            <input type="date" class="form-control" name="Data_inicio" placeholder="Data de Inicio (dd/mm/aaaa)">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Ano de Vigência</label>
                                            <input type="date" class="form-control" name="Ano_vigencia" placeholder="Ano de Vigência (dd/mm/aaaa)">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">(R$)Valor</label>
                                            <input type="text" class="form-control" name="Valor_total" placeholder="(R$)Valor">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Empresa Prestadora</label>
                                            <input type="text" class="form-control" name="Empresa_prestadora" placeholder="Empresa Prestadora">
                                          </div>
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                      </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

