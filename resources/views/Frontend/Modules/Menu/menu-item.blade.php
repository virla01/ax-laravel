@if ($item['submenu'] == [])
    <li class="nav-item">
        <a href="{{ url($item['url']) }}" class="nav-link">
            <div class="nav-icon">
                <i class="ax ax-{{ $item['icon'] }}"></i>
            </div>
            <div class="nav-text">
                {{ $item['name'] }}
            </div>
        </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="nav-icon">
                <i class="ax ax-{{ $item['icon'] }}"></i>
            </div>
            <div class="nav-text">
                {{ $item['name'] }}
            </div>
            <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <a href="{{ url($submenu['url']) }}" class="dropdown-item">
                        <div class="nav-icon">
                            <i class="ax ax-{{ $submenu['icon'] }}"></i>
                        </div>
                        <div class="nav-text">
                            {{ $submenu['name'] }}
                        </div>
                    </a>
                @else
                    @include('Frontend.Modules.Menu.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </div>
    </li>
@endif