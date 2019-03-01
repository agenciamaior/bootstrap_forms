@php
    $class = (empty($attributes['class'])) ? 'custom-control-input' : 'custom-control-input ' . $attributes['class'];

    $attributes['id'] = $name;
@endphp

<div class="custom-control custom-switch">
    {{ Form::checkbox($name, $value, null, array_merge($attributes, ['class' => $class])) }}

    <label class="custom-control-label" for="{{ $name }}">
        {!! $label !!}
    </label>
</div>