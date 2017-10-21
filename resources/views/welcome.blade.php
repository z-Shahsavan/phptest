@extends('Layout.mainlayout')
@section('content')
    <div class="links">
    <a href="{{ route('home')}}/phptest/bird/1">Test One</a>
    <a href="{{ route('home')}}/menu">Pizza Store</a>
    <a href="{{ route('home')}}/duckemolator0">Duck Emolator -0</a>
    <a href="{{ route('home')}}/duckemolator1">Duck Emolator -1</a>
    </div>
@endsection