@extends('Layout.mainlayout')
@section('content')
    <form action="{{ route('home')}}/senddata" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="str" placeholder="Candidate">
        <input type="text" class="form-control" name="number" placeholder="Count">
        <input type="submit" class="btn btn-success" name="sendbtn" value="send">
    </form>
    <div class="title m-b-md">
        <p>{{$result}}</p>
    </div>
@endsection
@section('backhome')
    <a href="{{ route('home')}}"><- Home</a>
@endsection