<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ Form::textarea($name, $default, array_merge(['class' => 'form-control'], $attributes)) }}
</div>
