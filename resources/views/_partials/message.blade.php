@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@foreach(config('project.errors') as $key => $class)
    @if(session()->has('flash_' . $key))
        <div class="alert alert-{{ $class }}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            {!! session()->get('flash_' . $key) !!}
        </div>
    @endif 

    @if(session()->has($key))
        <div class="alert alert-{{ $class }}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            {!! session()->get($key) !!}
        </div>
    @endif
@endforeach
