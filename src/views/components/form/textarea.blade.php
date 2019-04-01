@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
    $default = (empty($attributes['default'])) ? null : $attributes['default'];

    unset($attributes['default']);
    
    $attributes['id'] = (!empty($attributes['id'])) ? $attributes['id'] : $name;
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif
    
    {{ Form::textarea($name, $default, array_merge($attributes, ['class' => $class])) }}
</div>
