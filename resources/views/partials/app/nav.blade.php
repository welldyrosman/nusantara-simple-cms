@php
use Illuminate\Support\Facades\Request;

$jsonFile = public_path('dist/json/menu.json');
$menus = json_decode(file_get_contents($jsonFile));
$currentUrl = url()->current();
@endphp

<nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset(config('settings.logo')) }}" alt="{{ config('settings.site_title') }}" width="" height="30" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @foreach ($menus as $p)

                @if (count($p->children) > 0)
                <li class="nav-item dropdown">
                    <a class="nav-link class="nav-link {{ url($p->url)===$currentUrl ? 'active' : '' }}" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $p->title }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($p->children as $child)
                        <li><a class="dropdown-item" href="#">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else

                <li class="nav-item">
                    <a class="nav-link {{ url($p->url)===$currentUrl ? 'active' : '' }}" aria-current="page" href="{{ $p->url }}">{{ $p->title }}</a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
