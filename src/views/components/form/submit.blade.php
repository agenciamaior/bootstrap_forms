<button type="submit" class="{{ !empty($attributes['class']) ? $attributes['class'] : 'btn btn-success btn-lg' }}" id="{{ !empty($attributes['id']) ? $attributes['id'] : '' }}">
    @php
        $hasIcon = true;
        $icon = 'check';

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