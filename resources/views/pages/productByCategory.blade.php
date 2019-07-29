@extends('layout.pages')

@section('content')
    <div id="category">
        <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Bộ sưu tập</h1>
                        <nav class="d-flex align-items-center">
                            <h3><a href="category/{{ $cate->id }}">{{ $cate->name }}</a></h3>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    {{--<div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
                                            class="lnr lnr-arrow-right"></span>Fruits and Vegetables<span class="number">(53)</span></a>
                                <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>

                            <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
                                            class="lnr lnr-arrow-right"></span>Meat and Fish<span class="number">(53)</span></a>
                                <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
                                            class="lnr lnr-arrow-right"></span>Cooking<span class="number">(53)</span></a>
                                <ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span
                                            class="lnr lnr-arrow-right"></span>Beverages<span class="number">(24)</span></a>
                                <ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span
                                            class="lnr lnr-arrow-right"></span>Home and Cleaning<span class="number">(53)</span></a>
                                <ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a href="#">Pest Control<span class="number">(24)</span></a></li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#officeProduct" aria-expanded="false" aria-controls="officeProduct"><span
                                            class="lnr lnr-arrow-right"></span>Office Products<span class="number">(77)</span></a>
                                <ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" aria-expanded="false" aria-controls="beauttyProduct"><span
                                            class="lnr lnr-arrow-right"></span>Beauty Products<span class="number">(65)</span></a>
                                <ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#healthProduct" aria-expanded="false" aria-controls="healthProduct"><span
                                            class="lnr lnr-arrow-right"></span>Health Products<span class="number">(29)</span></a>
                                <ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a href="#">Pet Care<span class="number">(29)</span></a></li>
                            <li class="main-nav-list"><a data-toggle="collapse" href="#homeAppliance" aria-expanded="false" aria-controls="homeAppliance"><span
                                            class="lnr lnr-arrow-right"></span>Home Appliances<span class="number">(15)</span></a>
                                <ul class="collapse" id="homeAppliance" data-toggle="collapse" aria-expanded="false" aria-controls="homeAppliance">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list"><a class="border-bottom-0" data-toggle="collapse" href="#babyCare" aria-expanded="false"
                                                         aria-controls="babyCare"><span class="lnr lnr-arrow-right"></span>Baby Care<span class="number">(48)</span></a>
                                <ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false" aria-controls="babyCare">
                                    <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                    <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                    <li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span class="number">(11)</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>--}}
                    <div class="sidebar-filter">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Color</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                                            Leather<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                                            with red<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Price</div>
                            <div class="price-range-area">
                                <div id="price-range"></div>
                                <div class="value-wrapper d-flex">
                                    <div class="price">Price:</div>
                                    <div id="lower-value">{{ number_format(100000) }}</div>
                                    <span>₫</span>
                                    <div class="to">to</div>
                                    <div id="upper-value">{{ number_format(3000000) }}</div>
                                    <span>₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                        </div>
                        <div class="pagination">
                            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            <!-- single product -->
                            @foreach($products as $pr)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <img class="img-fluid" src="storage/upload/product/{{ $pr->product_image()->first()->filename }}" alt="">
                                        <div class="product-details">
                                            <h6 class="text-truncate">{{ $pr->title }}</h6>
                                            <div class="price">
                                                <h6>{{ number_format($pr->promotion_price) }} ₫</h6>
                                                @if($pr->unit_price > $pr->promotion_price)
                                                    <h6 class="l-through">{{ number_format($pr->unit_price) }} ₫</h6>
                                                @endif
                                            </div>
                                            <div class="prd-bottom">

                                                <a href="add-to-cart/{{ $pr->id }}" class="social-info">
                                                    <span class="ti-bag"></span>
                                                    <p class="hover-text">Thêm vào giỏ hàng</p>
                                                </a>
                                                <a href="add-to-wish-list" class="social-info">
                                                    <span class="lnr lnr-heart"></span>
                                                    <p class="hover-text">Yêu thích</p>
                                                </a>
                                                <a href="product/{{$pr->id}}" class="social-info">
                                                    <span class="lnr lnr-move"></span>
                                                    <p class="hover-text">Chi tiết</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting mr-auto">
                            <select>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                        </div>
                        <div class="pagination">
                            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                </div>
            </div>
        </div>

        <!-- Start related-product Area -->
        @include('layout.pages_parts.dealOfTheWeek')
        <!-- End related-product Area -->
    </div>
@endsection