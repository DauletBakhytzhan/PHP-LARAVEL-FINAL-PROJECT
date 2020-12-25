@extends('layout.layout')

@section('title')
    О Нас
@endsection

@section('main_content')
    <div class="text-center cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <h1> Name: {{$data->name}}</h1>
        <h1> adress:{{$data->address}}</h1>
        <h1>{{$data->city}}</h1>
        <h1>{{$data->description}}</h1>
        <h1>{{$data->rating}}</h1>


    </div>
    <script src="{{mix('js/app.js')}}"></script>
{{--    <h1>About Us</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>--}}
@endsection
