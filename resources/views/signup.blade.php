@extends('layout.app')

@section('content')
<div class="container jumbotron text-center mt-3" style="width: 50%">
    <form action="{{ route('signup') }}" method="Post">
        @csrf
        <div class="text-center">
            <div>
                <input type="text" name="name" id=""
                class="form-control w-full @error('name') border-danger @enderror mb-3"
                value="{{ old('name') }}" placeholder="Input Your Name">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <input type="email" name="email" id=""
                class="form-control w-full @error('email') border-danger @enderror mb-3"
                value="{{ old('email') }}" placeholder="Input Your Email">
                <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <input type="password" name="password" id=""
                class="form-control w-full @error('password') border-danger @enderror mb-3"
                placeholder="Input Your Password">
            </div>

            <div>
                <input type="password" name="password_confirmation" id=""
                class="form-control w-full @error('password') border-danger @enderror "
                placeholder="Confirm Your Password">
            </div>

            <button type="submit" class="btn btn-primary border-0 px-4 text-light w-full p-2 border-0 rounded">Submit Post</button>
        </div>
    </form>
</div>

@endsection
