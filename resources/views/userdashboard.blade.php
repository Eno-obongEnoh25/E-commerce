@extends('layout.app')

@section('content')
userdashboard

<li class="mb-4"><a href="{{ route('computing') }}"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>Computing </a></li>
<li class="mb-4"><a href="{{ route('phonesAndTablets') }}"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>phonesAndTablets </a></li>


@endsection
