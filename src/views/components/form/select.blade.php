<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ Form::select($name, $values, $default, array_merge(['class' => 'form-control', 'placeholder' => $placeholder], $attributes)) }}
</div>
