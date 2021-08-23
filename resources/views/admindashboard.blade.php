@extends('layout.app')

@section('content')
@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->any as $error)
                <li class="">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

@endif

@if (session('message'))
<div style="width: 20rem; margin: 0 auto"
    class="text-center p-3 mb-2 bg-success text-white">
    {{ session('message') }}
</div>
@endif

<div class="container jumbotron text-center mt-3" style="width: 50%">
    <h3>Create Item</h3>
    <form action="{{ route('admindashboard') }}" method="Post" enctype="multipart/form-data">
        @csrf
         <input type="text" class="form-control w-full"
         name="name" placeholder=" Input Name of item" id="" value="{{old('name')}}">  <br><br>

         &#8358;<input type="text" class="form-control w-full"
         name="price" placeholder="Item Price" id="" value="{{old('price')}}">  <br><br>

        <input type="text" class="form-control w-full"
         name="category" placeholder="Input Category" id="" value="{{old('category')}}">  <br><br>

        <input type="number" class="form-control w-full"
         name="category_id" placeholder="Input Category Id" id="" value="{{old('category_id')}}">  <br><br>

        <textarea name="description" class="form-control w-full" value="{{ old('description') }}"
         placeholder="Description" id="" cols="30" rows="10"></textarea><br><br>

         <h4>Select a file</h4>
        <input type="file" name="image" id=""><br><br>


        <button type="submit" class="btn btn-primary border-0 px-4 text-light w-full p-2 border-0 rounded-pill">Submit Post</button>
    </form>

    <a href="{{ route('welcome') }}"><h4>Go to welcome page</h4></a>

</div>


@endsection
