<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand mr-4 pink-text" href="https://fda.express" target="_self"><strong>FDA Express</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item{{$menu==='dashboard'?' active':''}}">
                <a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://fda.express/US-FDA-Prior-Notice-Credit-p367724103" target="_blank"><i class="fas fa-shopping-cart"></i> Buy credit</a>
            </li>
            <li class="nav-item dropdown{{$menu==='shipment' || $menu==='status'?' active':''}}">
                <a class="nav-link dropdown-toggle" id="prior-notice-dropdown"><i class="far fa-paper-plane"></i> Prior Notice
                </a>
                <div class="dropdown-menu dropdown-dark" aria-labelledby="prior-notice-dropdown">
                <a class="dropdown-item{{$menu==='shipment'?' active':''}}" href="{{route('index')}}"><i class="far fa-edit"></i> Create New</a>
                <a class="dropdown-item{{$menu==='status'?' active':''}}" href="{{route('status')}}"><i class="fas fa-signal"></i> Status and Download</a>
                </div>
            </li>
            <li class="nav-item dropdown{{$menu==='transportation' || $menu==='shipper' || $menu==='receiver' || $menu==='product_list'?' active':''}}">
                <a class="nav-link dropdown-toggle" id="profile-dropdown"><i class="fas fa-stamp"></i> Profile
                </a>
                <div class="dropdown-menu dropdown-dark" aria-labelledby="profile-dropdown">
                <a class="dropdown-item{{$menu==='transportation'?' active':''}}" href="{{route('transportation-list')}}"><i class="fas fa-globe"></i> Transportation</a>
                <a class="dropdown-item{{$menu==='shipper'?' active':''}}" href="{{route('shipper-list')}}"><i class="fas fa-shipping-fast"></i> Shipper</a>
                <a class="dropdown-item{{$menu==='receiver'?' active':''}}" href="{{route('receiver-list')}}"><i class="far fa-address-book"></i> Receiver</a>
                <a class="dropdown-item{{$menu==='product_list'?' active':''}}" href="{{route('product-list')}}"><i class="fas fa-list"></i> Product List</a>
                </div>
            </li>
            <li class="nav-item{{$menu==='product'?' active':''}}">
                <a class="nav-link" href="{{route('product-data')}}"><i class="fas fa-hamburger"></i> Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://doc.fda.express"><i class="fas fa-book"></i> API</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="user-dropdown">Hi, {{auth()->user()->firstname}}
                </a>
                <div class="dropdown-menu dropdown-dark" aria-labelledby="user-dropdown">
                <a href="/logout" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> Log out
                </a>
            </li>
        </ul>

      </div>

    </div>
  </nav>