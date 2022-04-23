<div class="backdrop"></div>
        
        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="header-top-welcome">
                            <p>Etkinliklerinizi Birlikte Ekleyelim!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                       
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="#">İletişime Geç</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    HEADER TOP PART END 
        =======================================-->
        

        <!--=====================================
                    HEADER PART START
        =======================================-->
        <section class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="/images/user.png" alt="user"></button>
                        <a href="{{url('/')}}"><img src="/images/logo.png" alt="logo"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="{{url('/')}}" class="header-logo">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                    @if (Session::Get('user') ==null )
                    
                    <a href="{{url('/girisyap')}}" class="header-widget" title="My Account">
                        <img src="/images/user.png" alt="user">
                        <span>Giriş Yap</span>
                    </a>
                    @else
                    <a href="{{route('hesabim')}}" class="header-widget" title="My Account">
                        <img src="/images/user.png" alt="user">
                        <span>{{Session::Get('userName','Hesabım')}}</span>
                       
                    </a>
                      <a href="{{route('logout')}}"  title="Çıkış Yap" class="header-widget" title="My Account">
                    <span><i class="icofont-logout"></i></span></a>
                    @endif

                    <form class="header-form">
                        <input type="text" placeholder="Arama yap...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                   
                </div>
            </div>
        </section>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Ana Sayfa</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="home-grid.html">Home grid</a></li>
                                        <li><a href="index.html">Home index</a></li>
                                        <li><a href="home-classic.html">Home classic</a></li>
                                        <li><a href="home-standard.html">Home standard<span class="menu-badge">new</span></a></li>
                                        <li><a href="home-category.html">Home category</a></li>
                                    </ul>
                                </li>
                                
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Giriş Çıkış </a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="reset-password.html">reset password</a></li>
                                        <li><a href="change-password.html">change password</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Blog</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="blog-grid.html">blog grid</a></li>
                                        <li><a href="blog-standard.html">blog standard</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                            </ul>
                          
                        </div>
                    </div>
                </div>
            </div>
        </nav>


       


        <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="{{url('/')}}"><img src="/images/logo.png" alt="logo"></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                <div class="nav-btn">
                    <a href="login.html" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Bize Katıl</span>
                    </a>
                </div>
                <!-- This commentable code show when user login or register -->
                <!-- <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="/images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div> -->
               
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li><a href="shop-5column.html">shop 5 column</a></li>
                            <li><a href="shop-4column.html">shop 4 column<span class="menu-badge">new</span></a></li>
                            <li><a href="shop-3column.html">shop 3 column</a></li>
                            <li><a href="shop-2column.html">shop 2 column</a></li>
                            <li><a href="shop-1column.html">shop 1 column<span class="menu-badge">new</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li><a href="product-grid.html">product grid<span class="menu-badge">new</span></a></li>
                            <li><a href="product-video.html">product video<span class="menu-badge">new</span></a></li>
                            <li><a href="product-simple.html">product simple</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="change-password.html">change password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-standard.html">blog standard</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


        