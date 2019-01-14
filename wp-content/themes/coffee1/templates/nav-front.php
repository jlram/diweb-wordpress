  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= get_page_link(get_page_by_title('Home')->ID) ?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?= get_page_link(get_page_by_title('Menu')->ID) ?>" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="<?= get_page_link(get_page_by_title('Services')->ID) ?>" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="<?= get_page_link(get_page_by_title('Blog')->ID) ?>" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?= get_page_link(get_page_by_title('About')->ID) ?>" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="room.php">Cart</a>
                <a class="dropdown-item"A<2 href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="<?= get_page_link(get_page_by_title('Contact')->ID) ?>" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="<?= get_page_link(get_page_by_title('Cart')->ID) ?>" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->