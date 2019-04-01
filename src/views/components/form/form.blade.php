@php
    $baseClass = class_basename($model);

    $routePrefix = (empty($attributes['route_prefix'])) ? str_plural(strtolower($baseClass)) : $attributes['route_prefix'];
    $modelName = strtolower($baseClass);

    $url = ($model->id) ? route($routePrefix . '.update', [$modelName => $model]) : route($routePrefix . '.store');

    $method = ($model->id) ? 'put' : 'post';
@endphp

{{ Form::model($model, array_merge(['url' => $url, 'method' => $method], $attributes)) }}

@if ($model->id)
    {{ Form::hidden('id', $model->id, ['id' => 'id']) }}
@endif