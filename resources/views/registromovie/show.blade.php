@extends('layouts.app')

@section('template_title')
    {{ $registromovie->name ?? "{{ __('Show') Registromovie" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registromovie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registromovies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Namemovie:</strong>
                            {{ $registromovie->NameMovie }}
                        </div>
                        <div class="form-group">
                            <strong>Fechamovies:</strong>
                            {{ $registromovie->FechaMovies }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $registromovie->Country }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
