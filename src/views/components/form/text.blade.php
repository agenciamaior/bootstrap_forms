<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ Form::text($name, $default, array_merge(['class' => 'form-control ' . @$attributes['class']], $attributes)) }}
</div>
