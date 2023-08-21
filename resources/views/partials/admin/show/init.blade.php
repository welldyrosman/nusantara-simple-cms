<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ __('admin.' . $resource . '.' . ($action ?? 'show')) }}</h3>
        @php [$name, $id] = ${$resource} !== null ? ['update', ${$resource}->id] : ['store', null] @endphp
    </div>
    <div class="card-body">
        @include('partials.admin.errors')
