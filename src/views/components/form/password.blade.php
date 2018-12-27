<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ Form::password($name, array_merge(['class' => 'form-control ' . @$attributes['class']], $attributes)) }}
</div>