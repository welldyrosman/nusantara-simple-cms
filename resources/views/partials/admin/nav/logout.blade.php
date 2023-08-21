<li class="nav-item">
    <form method="POST" action="{{ route('auth.logout') }}">
        @csrf
        <button type="submit" style="text-align: start;color: #c2c7d0;" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                <span>{{ __('auth.logout') }}</span>
            </p>
        </button>
    </form>
</li>
