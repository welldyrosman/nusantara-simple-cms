</div>
<div class="card-footer">
    @csrf
    <input type="hidden" name="_method" value="{{ ${$resource} !== null ? 'PUT' : 'POST' }}">
    <button type="submit" class="btn btn-primary">{{ __('admin.save') }}</button>
</div>
</form>
</div>
