<!-- Header
============================================= -->
@if(Route::currentRouteName() == "crw_home")
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
@elseif(Route::currentRouteName() == "crw_about")
<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">
@else
<header id="header" class="full-header">
@endif

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="{{ route('crw_home') }}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
        <a href="{{ route('crw_home') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu" class="dark">
        <ul>
          <li class="current">
            <a href="{{ route('crw_home') }}"><div>Home</div></a>
          </li>
          <li>
            <a href="{{ route('crw_about') }}"><div>About Us</div></a>
          </li>
          <li>
            <a href="{{ route('crw_services') }}"><div>Services</div></a>
          </li>
          <li>
            <a href="#"><div>Shop</div></a>
            <ul>
              <li><a href="#"><div>Audio</div></a></li>
              <li><a href="#"><div>PDF</div></a></li>
              <li><a href="#"><div>Videos</div></a></li>
            </ul>
          </li>
          <li class="mega-menu">
            <a href="{{ route('crw_blog') }}"><div>Blog</div></a>
          </li>
          <li>
            <a href="{{ route('crw_contact') }}"><div>Contact Us</div></a>
          </li>
        </ul>

        <!-- Top Cart
        ============================================= -->
        <div id="top-cart">
          <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
          <div class="top-cart-content">
            <div class="top-cart-title">
              <h4>Shopping Cart</h4>
            </div>
            <div class="top-cart-items">
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Blue Round-Neck Tshirt</a>
                  <span class="top-cart-item-price">$19.99</span>
                  <span class="top-cart-item-quantity">x 2</span>
                </div>
              </div>
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Light Blue Denim Dress</a>
                  <span class="top-cart-item-price">$24.99</span>
                  <span class="top-cart-item-quantity">x 3</span>
                </div>
              </div>
            </div>
            <div class="top-cart-action clearfix">
              <span class="fleft top-checkout-price">$114.95</span>
              <button class="button button-3d button-small nomargin fright">View Cart</button>
            </div>
          </div>
        </div><!-- #top-cart end -->

        <!-- Top Search
        ============================================= -->
        <div id="top-search">
          <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
          <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
          </form>
        </div><!-- #top-search end -->

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->
