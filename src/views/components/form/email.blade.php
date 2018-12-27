<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ Form::email($name, $default, array_merge(['class' => 'form-control ' . @$attributes['class']], $attributes)) }}
</div>