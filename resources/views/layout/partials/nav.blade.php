<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-light shadow-sm topbar osahan-top-main">

    <a class="navbar-brand" href="index.html">
        <img class="img-fluid w-40" src="{{ asset('images/logo.svg') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Coupans</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="coupans.html">Coupans</a>
                        <a class="dropdown-item" href="coupan-details.html">Coupan Details</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Offers</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="offers.html">Offers</a>
                        <a class="dropdown-item" href="offer-details.html">Offers Details</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Stores</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="stores.html">Stores</a>
                        <a class="dropdown-item" href="store-details.html">Stores Details</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Restaurant</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="restaurant.html">Restaurant</a>
                        <a class="dropdown-item" href="restaurant-details.html">Restaurant Details</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Account Pages</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="dropdown-header">Login Screens</h6>
                        <a class="dropdown-item" href="profile.html">Profile</a>
                        <a class="dropdown-item" href="enter-otp.html">Enter OTP</a>
                        <a class="dropdown-item" href="sign-in.html">Sign In</a>
                        <a class="dropdown-item" href="sign-up.html">Sign up</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Account</h6>
                        <a class="dropdown-item" href="earn.html">Earn</a>
                        <a class="dropdown-item" href="membership.html">Membership</a>
                        <a class="dropdown-item" href="rating.html">Rating</a>
                        <a class="dropdown-item" href="referral.html">Referral</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Companyd</h6>
                        <a class="dropdown-item" href="not-found.html">404 Not Found</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="terms.html">Terms</a>
                        <a class="dropdown-item" href="privacy.html">Privacy</a>
                        <a class="dropdown-item" href="contact.html">Contact</a>
                        <a class="dropdown-item" href="pricing.html">Pricing</a>
                        <a class="dropdown-item" href="maintence.html">Maintence</a>
                        <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                        <a class="dropdown-item" href="components.html">Components</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav ml-auto flex-direction-row">

        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm border-0 animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>

                <span class="badge badge-danger badge-counter">3</span>
            </a>

            <div class="dropdown-list dropdown-menu dropdown-menu-right border-0 shadow-sm animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to
                            download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500-500" href="#">Show All
                    Alerts</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>

                <span class="badge badge-danger badge-counter">7</span>
            </a>

            <div class="dropdown-list dropdown-menu dropdown-menu-right border-0 shadow-sm animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{ asset('images/user/4.png') }}" alt>
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've
                            been having.</div>
                        <div class="small text-gray-500-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{ asset('images/user/3.png') }}" alt>
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you
                            like them sent to you?</div>
                        <div class="small text-gray-500-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{ asset('images/user/2.png') }}" alt>
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy
                            with the
                            progress so far, keep up the good work!</div>
                        <div class="small text-gray-500-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{ asset('images/user/1.png') }}" alt>
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                            told me
                            that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500-500" href="#">Read More
                    Messages</a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle pr-0" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="{{ asset('images/user-icon/user.png') }}">
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow-sm border-0 animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.html">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-500-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="settings.html">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-500-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-500-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
