@extends('layout.layout')

@section('title')
    О Нас
@endsection

@section('main_content')
    <div class="container col">
        <div class="row centered-form">
            <div class=""style="margin-left: 330px; ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">add <small></small></h3>
                    </div>
                    <div class="panel-body">
                        <form action="addkitchen" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="price_for_one" id="last_name" class="form-control input-sm" placeholder="price_for_one">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="description"  class="form-control input-sm" placeholder="description">
                            </div>
                            <div class="form-group">
                                <input type="text" name="url"  class="form-control input-sm" placeholder="url">
                            </div>
                            <div class="form-group">
                                <input type="text" name="address"  class="form-control input-sm" placeholder="address">
                            </div>
                            <button type="submit" value="Register" class="btn btn-info btn-block">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <h1>About Us</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>--}}
@endsection
