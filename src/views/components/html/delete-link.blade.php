{{ Form::open(['url' => $route, 'method' => 'delete', 'class' => @$attributes['class']]) }}

<button type="submit" class="{{ !empty($attributes['button_class']) ? $attributes['button_class'] : 'btn btn-danger' }}" id="{{ !empty($attributes['id']) ? $attributes['id'] : '' }}">
    @php
        $hasIcon = true;
        $icon = 'trash';

        if (isset($attributes['icon'])) {
            if ($attributes['icon'] == false) {
                $hasIcon = false;
            } else {
                $icon = $attributes['icon'];
            }
        }
    @endphp

    @if($hasIcon)
        <i class="fa fa-{{ $icon }}"></i> 
    @endif
    
    {{ $text }}
</button>

{{ Form::close() }}