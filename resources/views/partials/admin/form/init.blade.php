<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ __('admin.' . $resource . '.' . ($action ?? 'edit')) }}</h3>
        @php [$name, $id] = ${$resource} !== null ? ['update', ${$resource}->id] : ['store', null] @endphp
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.' . $resource . '.' . $name, $id) }}">
        <div class="card-body">
            @include('partials.admin.errors')
