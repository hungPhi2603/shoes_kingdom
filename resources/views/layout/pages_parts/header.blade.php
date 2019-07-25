<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="home"><img src="page/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="home">Home</a></li>
                        @foreach( $category as $cate)
                            <li class="nav-item submenu">
                                <a href="category/{{ changeTitle($cate->name) }}" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">{{ $cate->name }}</a>
                            </li>
                        @endforeach
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item submenu dropdown">
                            <a href="user" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false"><span class="ti-user"></span></a>
                            <ul class="dropdown-menu">
                                @if(Auth::check())
                                    <li class="nav-item"><a class="nav-link" href="login.html">{{ Auth::user()->name }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="wishlist/{{ Auth::user()->id }}">Danh sách yêu thích</a></li>
                                    <li class="nav-item"><a class="nav-link" href="logout">Đăng xuất</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="login">Đăng nhập</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register">Đăng ký</a></li>
                                @endif
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="shopping-cart" class="cart">
                                <span class="ti-bag position-relative">
                                    <span class="badge position-absolute">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
