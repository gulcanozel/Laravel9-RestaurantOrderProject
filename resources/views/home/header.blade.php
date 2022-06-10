<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets')}}/images/logo.png" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $mainCategories= \App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active"><a class="nav-link" href="{{'home'}}">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                @foreach($mainCategories as $rs)
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{$rs->title}}</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <div class="dropdown-item">
                                        @if (is_countable($rs) && count($rs) > 0) :
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        @endif
                                    </div>
                                    <a class="dropdown-item" href="pizza.html">Pizza</a>
                                    <a class="dropdown-item" href="snacks.html">Snacks</a>
                                </div>
                                @endforeach
                            </div>

                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{'about'}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{'references'}}">References</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="reservation.html">Reservation</a>
                            <a class="dropdown-item" href="stuff.html">Stuff</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">blog</a>
                            <a class="dropdown-item" href="blog-details.html">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>

                    <li class="nav-item dropdown">
                        @auth()
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item fa fa-user" href="{{route('userpanel.index')}}">  My Account</a>
                                <a class="dropdown-item fa fa-heart" href="#">  My Orders</a>
                                <a class="dropdown-item fa fa-comment" href="{{route('userpanel.reviews')}}">  My Reviews</a>
                                <a class="dropdown-item fa fa-check" href="#">  Checkout</a>
                                <a class="dropdown-item fa fa-user-times" href="/logoutuser">  Logout</a>
                            </div>
                        @endauth
                        @guest()
                                <div class="template-demo" role="group" aria-label="Basic example">
                                    <a class="btn-lg" href="/loginuser">Login</a>
                                    <a class="btn-lg" href="/registeruser">Register</a>
                                </div>
                        @endguest
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
