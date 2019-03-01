@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
    
    $attributes['id'] = (!empty($attributes['id'])) ? $attributes['id'] : $name;
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif

    {{ Form::password($name, array_merge($attributes, ['class' => $class])) }}
</div>