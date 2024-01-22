<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NameMovie') }}
            {{ Form::text('NameMovie', $registromovie->NameMovie, ['class' => 'form-control' . ($errors->has('NameMovie') ? ' is-invalid' : ''), 'placeholder' => 'Namemovie']) }}
            {!! $errors->first('NameMovie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaMovies') }}
            {{ Form::date('FechaMovies', $registromovie->FechaMovies, ['class' => 'form-control' . ($errors->has('FechaMovies') ? ' is-invalid' : ''), 'placeholder' => 'Fechamovies']) }}
            {!! $errors->first('FechaMovies', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Country') }}
            {{ Form::text('Country', $registromovie->Country, ['class' => 'form-control' . ($errors->has('Country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('Country', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>