<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_categoria') }}
            {{ Form::select('id_categoria', $categorias, $libro->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_libro') }}
            {{ Form::text('nombre_libro', $libro->nombre_libro, ['class' => 'form-control' . ($errors->has('nombre_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Libro']) }}
            {!! $errors->first('nombre_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>