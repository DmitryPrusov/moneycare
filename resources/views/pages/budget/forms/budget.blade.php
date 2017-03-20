<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon"> Название </div>
        {!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'Название бюджета'])  !!}
    </div>
</div>



<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon"> Описание </div>
        {!! Form::textarea('desc', Input::old('desc'), ['class' => 'form-control', 'placeholder' => 'Описание'])  !!}
    </div>
</div>