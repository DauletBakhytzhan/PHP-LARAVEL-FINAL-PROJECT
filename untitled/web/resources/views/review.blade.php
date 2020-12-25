@extends('layout.layout')

@section('title')Контакты@endsection

@section('main_content')
    <div class="row">

        <div class="col-12 mt-5">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3 class="text-center mt-5">Please fill the contact form if you have any questions</h3>
                <p class="text-center">We will try to answer you as soon as possible</p>
            <form action="{{ route('send_form') }}" method="post">
                <div class="container" style="border: 2px solid darkgray; border-radius: 20px; padding-bottom: 10px; padding-top: 5px; color: grey;">
                    <section class="mb-4">
                        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                            a matter of hours to help you.</p>
                        <div class="row">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                                                <label for="name" class=""></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
                                                <label for="email" class=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                                <label for="subject" class=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message"></textarea>
                                                <label for="message"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 offset-5">
                                            <a class="btn btn-primary" href="Contacts.html">Send</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><a href=""><i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>Almaty city, L.Tolstoy 22a</p></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-phone mt-4 fa-2x"></i>
                                        <p>+7(707)564-83-10</p></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-at mt-4 fa-2x"></i>
                                        <p>caffeSe@mail.ru</p></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
@endsection
