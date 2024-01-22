@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Registrom
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Registrom</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registrom.update', $registrom->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registrom.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
