@extends('index')
@section('content')
<main class="">
        <div class="container-fluid">
            <div class="jumbotron pt-5" style="background: url('https://write.amnestyusa.org/wp-content/uploads/2020/09/Saudi-Arabia-blurred.jpg')no-repeat; background-size:cover;">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#"><img src="https://write.amnestyusa.org/wp-content/themes/w4r/resources/assets/images/w4r-logo.svg" class="logo" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse bg-dark p-2"  id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto" >
                            <li class="nav-item mr-4 active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Instruction</a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Classroom</a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Report Your Letters</a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Good News!</a>
                            </li>
                            <li class="nav-item mr-4">
                            <a class="nav-link" href="#">Donate</a>
                            </li>
                            <li class="my-auto">
                            @auth
                                <a  href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="mr-4" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                            </li>
                        </ul>
                        </div>
                    </nav>
                    <div class="row flex-lg-row-reverse ">
                        <div class="col-md-5 kanan mt-4">
                            <div class="image-bg">
                                <img src="https://write.amnestyusa.org/wp-content/uploads/2020/09/Saudi-Arabia.jpg" class="img-fluid">
                                <div class="caption">
                                    <a href="https://write.amnestyusa.org/cases/nassima-al-sada ">
                                    Nassima has been jailed for defending women's rights<br>
                                    <span class="img-caption-subtitle">
                                    TELL SAUDI ARABIA TO FREE NASSIMA NOW</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 kiri mt-5 ">
                            <h1><span>CHANGE A LIFE</span></h1>
                            <div class="body-text mt-5 p-4">
                                <p>Please report your letters before our January 31st deadline!<br>
                                If you have trouble with your account, please email w4r@aiusa.org.
                                </p>
                            </div>
                            <div class="link mt-5">
                                <a href="/impact">Report your Letters</a>
                                <a href="/signup">Sign Up</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="isi">
                <div class="row">
                @foreach ($list as $item)
                    <div class="col-md-4 kotak mb-5">
                        <a href="">
                            <div class="card">
                                <img src="{{Storage::url($item->image)}}" alt="">
                                <div class="card-body">
                                    <div class="offset-top">
                                        <h3><span>{{$item->judul}}</span></h3>
                                        <h4 class="">{{$item->text}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-4 kotak mb-5">
                        <a href="">
                            <div class="card">
                                <img src="img/Burundi-3.jpg" alt="">
                                <div class="card-body">
                                    <div class="offset-top">
                                        <h3><span>JAILED FOR 32 YEARS FOR DEFENDING HUMAN RIGHTS</span></h3>
                                        <h4 class="">Germain Rukuki / Burundi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 kotak mb-5">
                        <a href="">
                            <div class="card">
                                <img src="img/Burundi-3.jpg" alt="">
                                <div class="card-body">
                                    <div class="offset-top">
                                        <h3><span>JAILED FOR 32 YEARS FOR DEFENDING HUMAN RIGHTS</span></h3>
                                        <h4 class="">Germain Rukuki / Burundi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </section>
            <section class="berita mt-5 mb-5">
                <div class="row p-2">
                    <div class="col-md-4 pr-0 kiri">
                        <img src="img/SSUDAN-scaled.jpg" alt="" class="img-fluid lazyload">
                    </div>
                    <div class="col-md-8 kanan p-5">
                        <h1>
                            <span> GOOD NEWS ON W4R CASES </span>
                        </h1>
                        <h3>
                            MAGAI MATIOP NGONG WAS REMOVED FROM DEATH ROW IN SOUTH SUDAN
                        </h3>
                        <p>
                            “...your colleagues have lighted up my life. Pass them all my regards and thanks.” Magai Matiop Ngong, Write for Rights 2019
                        </p>
                        <a href="">
                            MORE SUCCESS STORIES
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
