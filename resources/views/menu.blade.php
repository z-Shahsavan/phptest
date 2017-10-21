@extends('Layout.mainlayout')
@section('content')
    <div>
        <form action="{{ route('home')}}/send" method="post">
            {{csrf_field()}}
            <ul class="menulist" >
                <li id="0">Cheese Pizza</li>
                <li id="1">Pepperoni Pizza</li>
                <li id="2">Calm Pizza</li>
                <li id="3">Greek Pizza</li>
            </ul>
        </form>
        <div>
            <ul class="cookprocesslist" id="cookprocesslist">

            </ul>
        </div>
    </div>
@endsection

@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
    $(function(){
         $('.menulist').on('click', 'li', function() {
            var id=$(this).attr('id');
             $.ajax({
                 url: '/orderpizza/',
                 type: 'GET',
                 data: { id: id },
                 success: function(response)
                 {
                     $('#cookprocesslist').html(response);
                 }
             });

         });
    })
    </script>
@endsection
@section('backhome')
    <a href="{{ route('home')}}"><- Home </a>
@endsection