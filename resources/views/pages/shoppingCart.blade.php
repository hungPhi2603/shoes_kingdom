@extends('layout.pages')

@section('content')

    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giỏ hàng</h1>
                    {{--<nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Kích Cỡ</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Tổng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $pr)

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="storage/upload/product/{{ $pr['item']->product_image()->first()->filename }}" alt="" width="200px">
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="product/{{ $pr['item']->id }}">{{ $pr['item']->title }}</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{ $pr['item']->product_status()->find($pr['size_id'])->size }}</h5>
                            </td>
                            <td>
                                <h5>{{ $pr['item']->promotion_price }}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="{{ $pr['qty'] }}" title="Quantity:"
                                           class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>{{ $pr['price'] }}</h5>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="bottom_button">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="cupon_text d-flex align-items-center float-right">
                                    <input type="text" placeholder="Mã giảm giá">
                                    <a class="primary-btn" href="#">Áp Dụng</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Tổng hóa đơn</h5>
                            </td>
                            <td>
                                <h5>{{ $totalPrice }}</h5>
                            </td>
                        </tr>

                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="#">Tiếp Tục Mua Hàng</a>
                                    <a class="primary-btn" href="#">Thanh Toán</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection