
        <a class="btn btn-sm btn-info mb-1"href="{{ route(implode('.', ['admin', $resource, 'show']), [$resource => $id])  }}">
            <i class="fas fa-pencil-alt"></i>
            <span>{{ __('admin.ops.show') }}</span>
        </a>
        <a class="btn btn-sm btn-warning mb-1"  href="{{ route(implode('.', ['admin', $resource, 'edit']), [$resource => $id]) }}">
            <i class="fas fa-pencil-alt"></i>
            <span>{{ __('admin.ops.edit') }}</span>
        </a>
   
        <form class="is-inline" method="POST" action="{{ route(implode('.', ['admin', $resource, 'destroy']), [$resource => $id]) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger"  type="submit" onclick="return confirm('{{ __('admin.ops.confirmation') }}')">
                <i class="fas fa-pencil-alt"></i>
                <span>{{ __('admin.ops.delete') }}</span>
            </button>
        </form>