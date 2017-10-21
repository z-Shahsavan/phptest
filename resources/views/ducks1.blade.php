@extends('Layout.mainlayout')
@section('content')
    <ul class="duckslist" >
        @foreach ($dkarr as $val)
            <li>{{$val}}</li>
        @endforeach
    </ul>
@endsection
@section('backhome')
    <a href="{{ route('home')}}"><- Home</a>
@endsection