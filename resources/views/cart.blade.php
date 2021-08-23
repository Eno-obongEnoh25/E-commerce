@extends('layout.app')

@section('content')

<div class="container mt-2">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <th>Item Id</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
                <th>image</th>
            </thead>
            <tbody>
                <td>
                    <a href="{{ route('buynow') }}"><button class="btn btn-success">Buy Now</button></a>
                </td>
                @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->name }}</td>
                    <td>&#8358;{{ $cart->price }}</td>
                    <td>{{ $cart->category }}</td>
                    <td>{{ $cart->description }}</td>
                    <td><img src="{{ asset('/storage/images/items/'.$cart->image_name) }}"
                         style="height: 8rem; width: 10rem"></td>
                    {{-- <td>
                        <a href="{{ route('buynow') }}"><button class="btn btn-success">Buy Now</button></a>
                    </td> --}}
                    <td>
                        <form action="{{ route('cart.destroy', $cart->carts_id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning" type="submit" style="width: 5rem;">Remove from cart</button>
                        </form>
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

</div>

@endsection
