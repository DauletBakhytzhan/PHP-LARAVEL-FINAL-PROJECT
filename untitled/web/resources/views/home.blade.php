@extends('layout.layout')

@section('title')
    Главная
@endsection

 @section('main_content')




<div class="row mt-4">


        <div class="col-9">
            <div class="row">

                <div class="col-12 mb-5">
                    <form action="">
                        <div class="row">
                            <div class="col-3">
                                <input class="form-control" type="text" placeholder="Ваш город">
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="" id="">
                                    <option value="">Кухня</option>
                                    <option value="">Бургеры</option>
                                    <option value="">Кофе</option>
                                    <option value="">Магазин</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="" id="">
                                    <option value="">до 3000</option>
                                    <option value="">до 10000</option>
                                    <option value="">до 15000</option>
                                    <option value="">Больше</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="" id="">
                                    <option value="">☆</option>
                                    <option value="">☆☆</option>
                                    <option value="">☆☆☆</option>
                                    <option value="">☆☆☆☆</option>
                                    <option value="">☆☆☆☆☆</option>
                                </select>
                            </div>

                        </div>
                        <button class="btn btn-success">
                            Поиск
                        </button>
                    </form>
                </div>
        @foreach($data as $el)
                <div class="col-12 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-9">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{$el->Url}}" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{$el->Url}}" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Second slide label</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{$el->Url}}" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 p-0 m-0">
                                    <h4 class="text-center"> </h4>
                                    <p class="p-0 m-0"><i class="fas fa-map-marker-alt">{{$el->name}}</i></p>
                                    <p class="p-0 m-0"><i class="fa fa-phone mt-2"></i> +7(707)564-83-10</p>
                                    <p class="p-0 m-0"><i class="fas fa-wifi mt-2"></i> {{$el->address}}</p>

                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="color:yellow;">
                            <div class="row">
                                <div class="col-2">

                                </div>
                                <div class="col-6">
                                    <p class="text-center" style="color: #000">
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a href="" class="btn btn-success float-right">Написать</a>
                                    <a href="{{ route('contact-data', $el->id) }}" class="btn btn-success float-right mr-2">Бронь</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-muted text-center">
                            Last update day ago
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="col-3">
            <div class="list-group text-center">
                <a href="#" class="list-group-item list-group-item-action active disabled">
                    Rating
                </a>
                <a href="#" class="list-group-item list-group-item-action">StarBucks</a>
                <a href="#" class="list-group-item list-group-item-action">McDonalds</a>
                <a href="#" class="list-group-item list-group-item-action">KetchUp</a>
                <a href="#" class="list-group-item list-group-item-action">KFC</a>
                <a href="#" class="list-group-item list-group-item-action">Burger King</a>
                <a href="#" class="list-group-item list-group-item-action disabled" style="min-height: 500px;"></a>
            </div>
        </div>

    </div>

 @endsection
