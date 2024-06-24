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
                <a class="nav-link" href="#"><i class="fas fa-home mr-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Campaign Management</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="coupans.html">Create Campaign</a>
                        <a class="dropdown-item" href="coupan-details.html">View Campaigns</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Reward Management</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="offers.html">Create Reward</a>
                        <a class="dropdown-item" href="offer-details.html">View Rewards</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Customer Management</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="stores.html">View Customers</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Reports & Analytics</span>
                </a>
                <div class="dropdown-menu shadow-sm animated--grow-in border-0" aria-labelledby="navbarDropdown">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="dropdown-item" href="stores.html">Reports</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <livewire:menus.mobile-menu />
</nav>
