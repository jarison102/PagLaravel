@extends('layouts.app')

@section('template_title')
    {{ $registrom->name ?? "{{ __('Show') Registrom" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registrom</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registrom.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registrom->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cilindraje:</strong>
                            {{ $registrom->Cilindraje }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $registrom->Peso }}
                        </div>
                        <div class="form-group">
                            <strong>Potencia Máxima:</strong>
                            {{ $registrom->Potencia_máxima }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Motor:</strong>
                            {{ $registrom->Tipo_de_motor }}
                        </div>
                        <div class="form-group">
                            <strong>Arranque:</strong>
                            {{ $registrom->Arranque }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema De Reducción Primaria:</strong>
                            {{ $registrom->Sistema_de_reducción_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Luz Principal:</strong>
                            {{ $registrom->Luz_principal }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema De Alimentación:</strong>
                            {{ $registrom->Sistema_de_alimentación }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
