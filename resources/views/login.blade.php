@extends('layout.app')

@section('content')

@if (session('Invalid'))
<div class="bg-danger border-rounded text-center">
    {{ session('Invalid') }}
</div>
@endif

<div class="container jumbotron text-center mt-2" style="width: 50%">
    <form action="{{ route('login') }}" method="Post">
        @csrf
        <div>
            <input type="text" name="email" id=""
            class="form-control w-full @error('email') border-danger @enderror mb-3"
            value="{{ old('email') }}"
            placeholder="Input Your Email">
            <div class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>

        <div>
            <input type="password" name="password"
            class="form-control w-full @error('password') border-danger @enderror mb-3"
            placeholder="Input Your Password">
        </div>

        <button class="btn btn-primary border-0  p-2 px-4 text-light">Login</button>

    </form>
</div>

@endsection
