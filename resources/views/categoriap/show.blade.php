@extends('layouts.app')

@section('template_title')
    {{ $categoriap->name ?? "{{ __('Show') Categoriap" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Categoriap</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categoriap.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $categoriap->Categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
