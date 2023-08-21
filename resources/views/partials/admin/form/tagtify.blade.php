<div class="form-group">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>

    @php
        $value = $article && $article->tags ? $article->tags->pluck('tag')->implode(',') : '';
    @endphp
    <input name="{{ $attribute }}" value="{{ empty($value) ? $default ?? '' : $value }}" data-role="tagsinput"
        class="form-control" autofocus>

</div>
