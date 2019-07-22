<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Deals of the Week</h1>
                    <p>These products are being discounted. Don't miss the chance to take some good deals</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($productSaleOff as $pr)
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20 text-truncate">
                        <div class="single-related-product d-flex">
                            <a href="product/{{ $pr->id }}"><img src="storage/upload/product/{{ $pr->product_image()->first()->filename }}" alt="" width="90px"></a>
                            <div class="desc">
                                <a href="product/{{ $pr->id }}" class="title" data-toggle="tooltip" data-placement="top" title="{{ $pr->title }}">{{ $pr->title }}</a>
                                <div class="price">
                                    <h6>{{ number_format($pr->promotion_price) }} ₫</h6>
                                    <h6 class="l-through">{{ number_format($pr->unit_price) }} ₫</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
