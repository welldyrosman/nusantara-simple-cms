<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            {{ empty($resource) && !empty($text) ? $text : __('admin.' . $resource . '.index') }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @if (empty($items))
            <li class="nav-item">
                <a href="{{ route('admin.' . $resource . '.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-plus-square"></i>
                    <span>{{ __('admin.' . $resource . '.create') }}</span>
                </a>
            </li>
            @if (!empty($extra))
                @foreach (\Illuminate\Support\Arr::wrap($extra) as $e => $i)
                    <a class="navbar-item" href="{{ route('admin.' . $resource . '.' . $e) }}">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <span>{{ __('admin.' . $resource . '.' . $e) }}</span>
                    </a>
                @endforeach
            @endif
            <li class="nav-item">
                <a href="{{ route('admin.' . $resource . '.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <span>{{ __('admin.' . $resource . '.index') }} </span>
                </a>
            </li>
        @else
            @foreach ($items as $text => $values)
                <a class="navbar-item" href="{{ $values[0] }}">
                    <span class="icon">{!! icon($values[1]) !!}</span>
                    <span>{{ $text }}</span>
                </a>
            @endforeach
        @endif
    </ul>
</li>
