@extends('layout.app')

@section('content')

<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th>image</th>
        </thead>
        <tbody>
            @foreach ($item as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>&#8358;{{ $item->price }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->description }}</td>
                <td><img src="{{ asset('/storage/images/items/'.$item->image_name) }}" alt=""></td>
                <td>
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('buynow') }}"><button class="btn btn-success">Buy Now</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @auth
        <div>
            <a href="{{ route('welcome') }}">Go to welcome page</a>
            @if (auth()->user()->is_admin)
            <a class="" href="{{ route('admindashboard') }}">Admindashboard</a>
            @endif
            @if (auth()->user()->is_admin != 1)
            <a class="" href="{{ route('userdashboard') }}">Dashboard</a>
            @endif
        </div>
    @endauth
</div>


@endsection
