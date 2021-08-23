@extends('layout.app')

@section('content')

<div class="table-responsive">

    <div class="container">
       <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>&#8358;{{ $total }}</td>
                </tr>

                <tr>
                    <td>Delivery</td>
                    <td>&#8358;500</td>
                </tr>

                <tr>
                    <td>Total Amount</td>
                    <td>&#8358;{{ $total + 500 }}</td>
                </tr>
            </tbody>
        </table>
       </div>
    </table>

    <h3>Payment Method</h3>
    <form action="/buynow" method="Post">
        @csrf
        <div class="form-group">
            <textarea name="address" class="form-control" id="" placeholder="Enter Your Address" cols="100" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="Payment Method"></label><br>
            <input type="radio" value="cash" name="payment">  <span>Pay Online</span><br><br>
            <input type="radio" value="cash" name="payment">  <span>Pay On Delivery</span><br><br>
            <input type="radio" value="ussd" name="payment">  <span>USSD</span><br><br>
        </div>
        <input type="submit" class="btn btn-success" name="submit" id="">

    </form>
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
