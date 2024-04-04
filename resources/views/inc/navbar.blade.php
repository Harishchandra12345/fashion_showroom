{{-- navigation --}}
<style>
    /* Top navbar css */
    .top_nav{
        border-bottom: 1px solid rgba(35, 15, 15, 0.151);
        padding-bottom: 0rem !important;
        max-width: 1228px !important;
    }
    .brand_logo{
        display: flex;
        justify-content: space-evenly;
        font-size: small;
    }
    .brand_logo>li{
      list-style-type: none;
    }
    .brand_logo>li>a{
        text-decoration: none;
        color: #0c234be4;
    }
    .brand_logo>li>a:hover{
        color: #0c234b55;
    }
    .brand_name{
        font-size: 13px;
        font-weight: 400;
    }
    .brand_name>a:hover{
        color: #0c234b;
    }
    .brand_name>a{
        color: #1294ad;
    }
    /* down nav */
    .nav-item>a{
        font-size: medium;
        color:#09152c;
    }
    .shop_down_btn{
        font-size: 10px;
        margin-left: 4px;
    }
    .shop_cart{
        list-style-type: none;
    }
    .shop_cart>a{
        color: #0c234b !important;
        font-size: 20px;
    }
    .home_btn{
        border-bottom: 1px solid #0000003d;
    }
    
</style>
<nav>
    {{-- top nav --}}
    <div class="container py-3 top_nav">
        <div class="row">
            <div class="col-10">
                <span class="brand_name">Viverra quis quam nec cursus lorem egestas<a href="">venenatis diam</a>sed cursus.</span> 
            </div>
            <div class="col-2">
                <ul class="brand_logo">
                    <li class="col"> 
                        <a href="" class=""><i class="fa-brands fa-facebook-f"></i></a> 
                    </li>
                    <li class="col"> 
                        <a href="" class=""><i class="fa-brands fa-linkedin-in"></i></a> 
                    </li>
                    <li class="col"> 
                        <a href="" class=""><i class="fa-brands fa-twitter"></i></a> 
                    </li>
                    <li class="col"> 
                        <a href="" class="face"><i class="fa-brands fa-instagram"></i></a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="navbar" class="navbar navbar-expand-lg  ">
        <div class="container-fluid py-3">
            <div class="col-3" style="text-align: center">
                {{-- <span>Aveda Retail</span> --}}
                <img decoding="async" width="212" height="39" src="https://avada.website/retail/wp-content/uploads/sites/113/2021/04/retail-logo-svg.svg" alt="" style="margin-left: 5%;" class="img-responsive wp-image-3583 disable-lazyload">
            </div>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse d-flex " id="navbarScroll">
                <ul class="navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;width: -webkit-fill-available; display: flex; justify-content: center">
                    <div class="p-3">
                        <li class="nav-item">
                            <a class="nav-link active home_btn" aria-current="page" href="#">Home</a>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item">
                            <a class="nav-link " href="#">About </a>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop <i class="fa-solid fa-angle-down shop_down_btn"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">E-commerce</a></li>
                                <li><a class="dropdown-item" href="#">Wordpress</a></li>
                                <li><a class="dropdown-item" href="#">Bootstrap</a></li>
                                <li><a class="dropdown-item" href="#">Staric</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories <i class="fa-solid fa-angle-down shop_down_btn"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="#">SEO(Search Engine Optimization)</a></li>
                                <li><a class="dropdown-item" href="#">SMM(Social Media Merketing)</a></li>
                                <li><a class="dropdown-item" href="#">SEM(Search Engine Merketing)</a></li>
                                <li><a class="dropdown-item" href="#">PPC(Pay Per Click)</a></li>
                                <li><a class="dropdown-item" href="#">Local SEO</a></li>
                                <li><a class="dropdown-item" href="#">Youtube Marketing</a></li>
                                <li><a class="dropdown-item" href="#">E - mail Marketing</a></li>
                                <li><a class="dropdown-item" href="#">SMS Marketing</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog <i class="fa-solid fa-angle-down shop_down_btn"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">MLM Software</a></li>
                                <li><a class="dropdown-item" href="#">ERP / CRM</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li> 
                    </div>
                </ul>
            </div>
            <div class="" >
                <ul class="col-2 d-flex" style="justify-content: normal">
                    <div class="p-3">
                        <li class="shop_cart">
                            <a class="" href="#"><i class="fa-solid fa-manat-sign"></i></a>
                        </li> 
                    </div>
                    <div class="p-3">
                        <li class="shop_cart">
                            <a class="" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li> 
                    </div>
                </ul>
            </div>
        </div>
    </div>
    
</nav>