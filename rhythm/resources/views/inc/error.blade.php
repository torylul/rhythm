@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('category') ?? 'info' }}" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
@error('error')
<div class="error text-danger text-center p-2">{{ $message }}</div>
@enderror
