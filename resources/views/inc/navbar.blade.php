{{-- navigation --}}
<nav>
    {{-- top nav --}}
    <div class="container-fluid top_nav">
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
                        <a href="" class=""><i class="fa-brands fa-instagram"></i></a> 
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
                            <a class="nav-link" href="#" role="button" >
                                Shop <i class="fa-solid fa-angle-down shop_down_btn"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                                <li><a class="dropdown-item" href="#">Shop</a></li>
                                <li><a class="dropdown-item" href="#">Shop Classic - Sidebar</a></li>
                                <li><a class="dropdown-item" href="#">Shop Grid - 3 Columns</a></li>
                                <li><a class="dropdown-item" href="#">Shop Grid - 3 Columns</a></li>
                                <li><a class="dropdown-item" href="#">Shop List View</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="p-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" id="shopDropdown" aria-haspopup="true" aria-expanded="false">
                                Categories <i class="fa-solid fa-angle-down shop_down_btn"></i>
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="#">SEO(Search Engine Optimization)</a></li>
                                <li><a class="dropdown-item" href="#">SMM(Social Media Merketing)</a></li>
                                <li><a class="dropdown-item" href="#">SEM(Search Engine Merketing)</a></li>
                                <li><a class="dropdown-item" href="#">PPC(Pay Per Click)</a></li>
                                <li><a class="dropdown-item" href="#">Local SEO</a></li>
                                <li><a class="dropdown-item" href="#">Youtube Marketing</a></li>
                                <li><a class="dropdown-item" href="#">E - mail Marketing</a></li>
                                <li><a class="dropdown-item" href="#">SMS Marketing</a></li>
                            </ul> --}}
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
                <ul class="col-2 d-flex">
                    <div class="p-3">
                        <li class="shop_cart ">
                            <a class="" href="#"><i class="fa-solid fa-manat-sign"></i></a>
                            {{-- <form action="" method="POST">
                                <input type="text" id="name" placeholder="Username" name="username" class="form-control" required>
                                <input type="text" id="name" placeholder="Password" name="password" class="form-control" required>
                                <input type="checkbox" id="name"  name="remember"  required>
                                <label for="">Remember Me</label><br>
                                <input type="submit" value="Submit">
                            </form> --}}
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
<script>
    $(document).ready(function() {
        $('.dropdown').hover(function() {
            $(this).find('.dropdown-menu').addClass('show');
        }, function() {
            $(this).find('.dropdown-menu').removeClass('show');
        });
    });
</script>