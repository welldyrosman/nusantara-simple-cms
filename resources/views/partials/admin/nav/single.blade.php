<li class="nav-item">
    <a href="{{ !empty($resource) && empty($link) ? route('admin.' . $resource . '.index') : $link }}"class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
        {{ !empty($resource) && empty($text) ? __('admin.' . $resource . '.index') : $text }}
      </p>
    </a>
  </li>