@php
    $class = (empty($attributes['class'])) ? 'form-check-input' : 'form-check-input ' . $attributes['class'];
    $default = (empty($attributes['default'])) ? null : $attributes['default'];

    $attributes['id'] = str_slug($name . ' ' . $value);
@endphp

<div class="form-check">
    {{ Form::radio($name, $value, null, array_merge($attributes, ['class' => $class])) }}

    <label class="form-check-label" for="{{ $attributes['id'] }}">
        {!! $label !!}
    </label>
</div>