<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $registrom->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cilindraje') }}
            {{ Form::text('Cilindraje', $registrom->Cilindraje, ['class' => 'form-control' . ($errors->has('Cilindraje') ? ' is-invalid' : ''), 'placeholder' => 'Cilindraje']) }}
            {!! $errors->first('Cilindraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('Peso', $registrom->Peso, ['class' => 'form-control' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Potencia_máxima') }}
            {{ Form::text('Potencia_máxima', $registrom->Potencia_máxima, ['class' => 'form-control' . ($errors->has('Potencia_máxima') ? ' is-invalid' : ''), 'placeholder' => 'Potencia Máxima']) }}
            {!! $errors->first('Potencia_máxima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_de_motor') }}
            {{ Form::text('Tipo_de_motor', $registrom->Tipo_de_motor, ['class' => 'form-control' . ($errors->has('Tipo_de_motor') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Motor']) }}
            {!! $errors->first('Tipo_de_motor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Arranque') }}
            {{ Form::text('Arranque', $registrom->Arranque, ['class' => 'form-control' . ($errors->has('Arranque') ? ' is-invalid' : ''), 'placeholder' => 'Arranque']) }}
            {!! $errors->first('Arranque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema_de_reducción_primaria') }}
            {{ Form::text('Sistema_de_reducción_primaria', $registrom->Sistema_de_reducción_primaria, ['class' => 'form-control' . ($errors->has('Sistema_de_reducción_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Sistema De Reducción Primaria']) }}
            {!! $errors->first('Sistema_de_reducción_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Luz_principal') }}
            {{ Form::text('Luz_principal', $registrom->Luz_principal, ['class' => 'form-control' . ($errors->has('Luz_principal') ? ' is-invalid' : ''), 'placeholder' => 'Luz Principal']) }}
            {!! $errors->first('Luz_principal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema_de_alimentación') }}
            {{ Form::text('Sistema_de_alimentación', $registrom->Sistema_de_alimentación, ['class' => 'form-control' . ($errors->has('Sistema_de_alimentación') ? ' is-invalid' : ''), 'placeholder' => 'Sistema De Alimentación']) }}
            {!! $errors->first('Sistema_de_alimentación', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>