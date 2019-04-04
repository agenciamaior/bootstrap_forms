@php
    $baseClass = class_basename($model);

    $routePrefix = (empty($attributes['route_prefix'])) ? str_plural(strtolower($baseClass)) : $attributes['route_prefix'];
    $routeParameterName = (empty($attributes['route_param_name'])) ? strtolower($baseClass) : $attributes['route_param_name'];

    $url = ($model->id) ? route($routePrefix . '.update', [$routeParameterName => $model]) : route($routePrefix . '.store');

    $method = ($model->id) ? 'put' : 'post';
@endphp

{{ Form::model($model, array_merge(['url' => $url, 'method' => $method], $attributes)) }}

@if ($model->id)
    {{ Form::hidden('id', $model->id, ['id' => 'id']) }}
@endif