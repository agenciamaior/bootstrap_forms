@php
    $class = (empty($attributes['class'])) ? 'form-check-input' : 'form-check-input ' . $attributes['class'];

    $attributes['id'] = $name;
@endphp

<div class="form-check">
    {{ Form::checkbox($name, $value, null, array_merge($attributes, ['class' => $class])) }}

    <label class="form-check-label" for="{{ $name }}">
        {!! $label !!}
    </label>
</div>