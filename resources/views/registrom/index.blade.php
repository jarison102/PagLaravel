@extends('layouts.app')

@section('template_title')
    Registrom
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registrom') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registrom.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Cilindraje</th>
										<th>Peso</th>
										<th>Potencia Máxima</th>
										<th>Tipo De Motor</th>
										<th>Arranque</th>
										<th>Sistema De Reducción Primaria</th>
										<th>Luz Principal</th>
										<th>Sistema De Alimentación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registroms as $registrom)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registrom->Nombre }}</td>
											<td>{{ $registrom->Cilindraje }}</td>
											<td>{{ $registrom->Peso }}</td>
											<td>{{ $registrom->Potencia_máxima }}</td>
											<td>{{ $registrom->Tipo_de_motor }}</td>
											<td>{{ $registrom->Arranque }}</td>
											<td>{{ $registrom->Sistema_de_reducción_primaria }}</td>
											<td>{{ $registrom->Luz_principal }}</td>
											<td>{{ $registrom->Sistema_de_alimentación }}</td>

                                            <td>
                                                <form action="{{ route('registrom.destroy',$registrom->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registrom.show',$registrom->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registrom.edit',$registrom->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registroms->links() !!}
            </div>
        </div>
    </div>
@endsection
