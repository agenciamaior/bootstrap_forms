@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
    
    $attributes['id'] = (!empty($attributes['id'])) ? $attributes['id'] : $name;
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif

    {{ Form::file($name, array_merge($attributes, ['class' => $class])) }}

    @if (!empty($attributes['default']))
        <figure class="form-image-container">
            <img src="{{ $attributes['default'] }}">
        </figure>
    @endif
</div>
