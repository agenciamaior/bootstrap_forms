@php
    $class = (empty($attributes['class'])) ? 'form-check-input' : 'form-check-input ' . $attributes['class'];

    $attributes['id'] = (empty($attributes['id'])) ? $name : $attributes['id'];
@endphp

<div class="form-check">
    {{ Form::checkbox($name, $value, null, array_merge($attributes, ['class' => $class])) }}

    <label class="form-check-label" for="{{ $attributes['id'] }}">
        {!! $label !!}
    </label>
</div>