<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Vacante') }}
            {{ Form::text('Vacante', $cargo->Vacante, ['class' => 'form-control' . ($errors->has('Vacante') ? ' is-invalid' : ''), 'placeholder' => 'Vacante']) }}
            {!! $errors->first('Vacante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>