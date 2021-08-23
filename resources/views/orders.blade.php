@extends('layout.app')

@section('content')

<div class="container mt-2">
    <h3>My Orders</h3>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <th>Item Name</th>
                <th>Delivery status</th>
                <th>Address</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>image</th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->payment_method }}</td>
                    <td><img src="{{ asset('/storage/images/items/'.$order->image_name) }}"
                         style="height: 8rem; width: 10rem"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
