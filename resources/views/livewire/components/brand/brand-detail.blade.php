<div class="col-xl-10 col-sm-12">
    <div class="offer-dedicated-body-left">
        <div class="shadow-sm rounded overflow-hidden mb-4">
            <div class="bg-white coupon-deal-detail-main">
                <div class="coupon-deal-detail-main-block">
                    <img class="img-fluid coupon-deal-detail-main-img" src="{{ asset('images/restaurant-slider.png') }}">
                    <div class="got-badge">
                        <img class="user-cou-img" src="{{ asset('images/user-coupans/1.png') }}"
                            alt="Generic placeholder image">
                    </div>
                </div>
                <div class="coupon-deal-detail-main-body p-4">
                    <h3 class="pr-lg-5 mb-3 text-gray-900">Amazon Coupons & Offers
                        <span class="badge badge-danger ml-2">70% Success
                        </span>
                    </h3>
                    <h6 class="coupon-deal-detail-main-body-p font-weight-light pr-lg-5 text-secondary">
                        Amazon Promo Code - Collect Coupons and Save Upto 50% on Fashion,
                        Electronics,
                        Home & more</h6>
                    <p class="mb-0 mt-4 font-weight-light text-gray-500"><i
                            class="icofont-users-alt-4 text-danger mr-2"></i> 307 People
                        Used Today <i class="ml-4 icofont-clock-time text-danger mr-2"></i>
                        Ends 09.15.2020</p>
                </div>
            </div>
            <div class="custom-nav coupon-deal-detail-main-footer bg-white border-top d-flex align-items-center px-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#pc" class="nav-link active">Campaigns</a>
                    </li>
                    <li class="nav-item">
                        <a href="#to" class="nav-link">Brand Managers</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#sc" class="nav-link">Similar Coupans</a>
                    </li> --}}
                </ul>

                <span class="ml-auto d-flex">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label pt-1" for="customSwitch1">Active</label>
                    </div>
                    <div class="input-group-prepend ml-3">
                        <button class="btn btn-danger btn-sm" type="button" id="button-addon1">Delete Brand</button>
                    </div>
                </span>
            </div>
        </div>
        <div id="pc" class="bg-white shadow-sm rounded mb-4 popular-stores-accordion">
            <h5 class="mb-4 pt-4 pl-4 pr-4 text-gray-900">Campaigns</h5>
            <div class="accordion" id="accordionExample">
                <div class="popular-stores-card">
                    <div class="popular-stores-card-header p-4" id="headingOne">
                        <a data-toggle="collapse" class="collapsed" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne" href="#">
                            <div class="open-accordion float-right"> <i class="icofont-ui-add"></i></div>
                            <div class="media align-items-center">
                                <img alt="Generic placeholder image" src="{{ asset('images/user-coupans/1.png') }}"
                                    class="mr-3">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-weight-bold text-gray-900">Buy
                                        1 Get 1 Free
                                    </h6>
                                    <p class="mb-2 text-gray-600">Get Flat 50% OFF On First
                                        Order</p>
                                    <p class="mb-0 text-info"><i class="icofont-clock-time"></i> Ends
                                        09.15.2020</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="popular-stores-card-body p-4">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/1.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Wal-Mart
                                                                Stores,
                                                                Inc.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-danger"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/2.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Wal-Mart
                                                                Stores,
                                                                Inc.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-info"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular-stores-card">
                    <div class="popular-stores-card-header p-4" id="headingtwo">
                        <a data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true"
                            aria-controls="collapsetwo" href="#">
                            <div class="open-accordion float-right"> <i class="icofont-ui-add"></i></div>
                            <div class="media align-items-center">
                                <img alt="Generic placeholder image" src="{{ asset('images/user-coupans/2.png') }}"
                                    class="mr-3">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-weight-bold text-gray-900">50%
                                        OFF</h6>
                                    <p class="mb-2 text-gray-600">Get Flat 50% OFF On First
                                        Order</p>
                                    <p class="mb-0 text-info"><i class="icofont-clock-time"></i> Ends
                                        09.15.2020</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo"
                        data-parent="#accordionExample">
                        <div class="popular-stores-card-body p-4">
                            <div class="row">
                                <div class="col-12">
                                    <h5>All Brand Vendors</h5>
                                </div>
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/3.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Wal-Mart Stores,
                                                                Inc.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-warning"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/4.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Kroger
                                                                Company.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-danger"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/5.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Mart
                                                                Stores,
                                                                Inc.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-info"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 my-2">
                                    <div class="border-radius bg-white popular-stores-card-offer p-3">
                                        <a href="#">
                                            <div class="media align-items-center">
                                                <img alt="Generic placeholder image"
                                                    src="{{ asset('images/custom-card/6.png') }}" class="mr-3">
                                                <div class="media-body">
                                                    <div class="custom-card-body">
                                                        <h6 class="mb-0">
                                                            <a class="text-gray-900" href="#">Oroger
                                                                Company.</a>
                                                        </h6>
                                                        <p class="text-gray-500 mb-2">
                                                            United Kingdom</p>
                                                    </div>
                                                    <div class="custom-card-badge">
                                                        <span class="badge badge-success"><i
                                                                class="icofont-sale-discount"></i>
                                                            OFFER</span>
                                                        Flat 50% Stores
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="to" class="bg-white shadow-sm rounded p-4 mb-4">
            <h5 class="mb-3 text-gray-900">Brand Users</h5>
            <p class="mb-4 p-0">Established fact that a reader will be distracted by the
                readable
                content of a page when looking at its layout</p>
            <div class="list-design-card active p-3">
                <a href="#">
                    <span class="float-right text-info">60% OFF</span>
                    <div class="media">
                        <img class="mr-3" src="{{ asset('images/brand/3.png') }}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mb-1 text-gray-900">MakeMyTrip</h6>
                            <p class="mb-0 text-gray-500">Ends in 18 days</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="list-design-card active p-3">
                <a href="#">
                    <span class="float-right text-info">50% OFF</span>
                    <div class="media">
                        <img class="mr-3" src="{{ asset('images/brand/5.png') }}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mb-1 text-gray-900">Dominos</h6>
                            <p class="mb-0 text-gray-500">Ends in 1 days</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="list-design-card active p-3 mb-0">
                <a href="#">
                    <span class="float-right text-info">60% OFF</span>
                    <div class="media">
                        <img class="mr-3" src="{{ asset('images/brand/8.png') }}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mb-1 text-gray-900">Amazon</h6>
                            <p class="mb-0 text-gray-500">Ends in 20 days</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <h5 id="sc" class="mb-3 text-gray-900">Other Brands
        </h5>
        <div class="owl-carousel owl-theme owl-carousel-two offers-interested-carousel mb-4">
            <div class="item">
                <div class="bg-white p-4 border shadow-sm text-center h-100 border-radius">
                    <div class="all-coupon">
                        <img class="mb-3 user-cou-img" src="{{ asset('images/user-coupans/1.png') }}"
                            alt="Generic placeholder image">
                        <h4 class="mt-1 h5 text-gray-900">50% OFF</h4>
                        <h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal">Get
                            Flat 50% OFF On
                            First Order</h6>
                    </div>
                    <div class="mb-0">
                        <p class="mb-0 text-info"><i class="icofont-clock-time"></i> Ends
                            09.15.2020</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-white p-4 border shadow-sm text-center h-100 border-radius">
                    <div class="all-coupon">
                        <img class="mb-3 user-cou-img" src="{{ asset('images/user-coupans/2.png') }}"
                            alt="Generic placeholder image">
                        <h4 class="mt-1 h5 text-gray-900">Buy 1 Get 1 Free</h4>
                        <h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal">Get
                            Flat 50% OFF On
                            First Order</h6>
                    </div>
                    <div class="mb-0">
                        <p class="mb-0 text-info"><i class="icofont-clock-time"></i> Ends
                            09.15.2020</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-white p-4 border shadow-sm text-center h-100 border-radius">
                    <div class="all-coupon">
                        <img class="mb-3 user-cou-img" src="{{ asset('images/user-coupans/3.png') }}"
                            alt="Generic placeholder image">
                        <h4 class="mt-1 h5 text-gray-900">Free Burger</h4>
                        <h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal">Get
                            Flat 50% OFF On
                            First Order</h6>
                    </div>
                    <div class="mb-0">
                        <p class="mb-0 text-info"><i class="icofont-clock-time"></i> Ends
                            09.15.2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
