@extends('layouts.app')
@section('style')
    <style>
        /* .home_img:hover{
        margin: 3%;
        } */
        .hero{
            padding-top: 40px;
        }
        .hero_img{
            width: -webkit-fill-available; 
            aspect-ratio: 2 / 1;
            object-fit: cover;
        }
        .img_name{
            text-align: center;
            display: ruby-text;
            color: white;
            z-index: 999;
            font-weight: 600;
            font-size: 46px;
            position: relative;
            bottom: 253px;
        }
        .img_content{
            text-align: center;
            display: ruby-text;
            z-index: 999;
            bottom: 247px;
            font-size: 17px;
            color: white;
            font-weight: 500;
            position: relative;
        }
        .view_collection{
            text-align: center;
            display: ruby-text;
            color: white !important;
            z-index: 999;
            font-weight: 500;
            bottom: 200px;
            font-size: 20px;
            position: relative;
        }
        /* floating button css */
        .floating-button{
            justify-content: end;
            display: flex;
            width: -webkit-fill-available;
            /* box-shadow: 0 -5px 20px 5px rgba(0,0,0,.15); */
        }
        .floating_cart {
            text-decoration: none;
            display: grid;
            color: black;
            z-index: 999;
            background-color: white;
            box-shadow: inset 0px 0px 20px whitesmoke;
            padding: 1%;
            position: fixed;
            border-radius: 7px;
            top: 200px;
        }
        .floating_cart_buy {
            text-decoration: none;
            display: grid;
            color: black;
            background-color: white;
            box-shadow: inset 0px 0px 20px whitesmoke;
            padding: 1%;
            z-index: 999;
            position: fixed;
            border-radius: 7px;
            top: 275px;
        }
        .order_btn{
            font-size: 30px;
            color:black;
        }
        .shop_cart>span{
            display: block;
            font-size: 15px;
            color: black;
            font-weight: 600;
        }
        .dis_btn{
            border: 0px;
            background-color: #8aada8;
            padding: 1;
            color: white;
            font-size: 13px;
            border-radius: 2px;
            margin-left: 3%;
        }
        .apolo_img{
            width: -webkit-fill-available; 
            aspect-ratio: 1/ 1.4;
        }
        .paxel_img{
            width: -webkit-fill-available; 
            aspect-ratio: 1/0.70;
        }
         /* floating button css */
        /* blog section css */
        .latest{
            color: white;
            font-size: 33px;
            text-align: center;
            font-weight: 700;
        }
        .more-text{
            color: white;
            text-align: center;
            font-size: 16px;
            font-weight: 100;
        }
        .blog_img{
            width: -webkit-fill-available; 
            aspect-ratio: 1.2/.75;
            padding: 10px;
        }
        .brand_shop{
            width: 300px;
            margin-left: 2%;
            background-color: #0d244c;
            padding: 9px;
            position: relative;
            bottom: 125px;
            color: white;
            font-size: 25px;
            display: grid;
            font-weight: 700;
        }
        .brand_shop:hover{
            color: white;
            text-decoration: none;
        }
        .brand_shop>span{
            padding-left: 40px;
        }
        .artical{
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 15px;
            position: relative;
            bottom: 122px;
            padding-left: 45px;
        }
        .artical:hover{
            text-decoration: none;
            color: yellowgreen;;
        }
        /* blog section css */
        /* product category section css */
        .pro_category{
            font-size: 21px;
            font-weight: 600;
            text-align: center;
        }
        /* product category section css */
       
        /* product component css */
        .latest_product{
            font-size: 23px;
            padding-bottom: 25px;
        }
        .component_part{
            text-align: start;
            padding-left: 6%;
            font-size: 17px;
            font-weight: 500;
        }
        .product_price{
            text-align: justify;
            padding-left: 5%;"
        }
        .exact_price{
            font-size: 17px;
            font-weight: 400;
            padding: 1%;
        }
        .discount_price{
            font-size: 13px;
            font-weight:500;
        }
        .percent_price_btn{
            width: 42px;
            background-color: #0d244c;
            padding: 1%;
            border-radius: 24px;
            position: absolute;
            margin-left: 26px;
            margin-top: 10px;
        }
        .num_btn{
            text-decoration: none;
            color: white;
            font-size: 9px;
        }
        .browse{
            display: table-caption;
            font-size: 33px;
            color: #0d244c;
            font-weight: 700;
        }
        .casual{
            text-align: center;
            font-size: 15px;
            font-weight: 500;
        }
        ::placeholder {
            color:white ;
            opacity: 1; /* Firefox */
            }

            ::-ms-input-placeholder { /* Edge 12-18 */
            color:white;
            }
        /* component css */
    </style>
@endsection
@section('content')
    {{-- hero section --}}
    <section class="hero">
        <div class="container-fluid" style="padding: 0px 30px">
            <div class="floating-button">
                <a href="#" class="floating_cart">
                    <i class="fa-solid fa-store order_btn"></i>
                    <span>Prebuilts</span>
                </a>
            </div>
            <div class="floating-button">
                <a href="#" class="floating_cart_buy">
                    <i class="fa-solid fa-cart-shopping order_btn"></i>
                    <span >Buy Now</span>
                </a>
            </div>
        <section>
          <div class="container-fluid" style="padding: 0px">
            {{-- <div class="row"> --}}
                <div class="col-md-6 col-sm-12" style="padding:0;" >
                    <img class="hero_img" src="./img/pexels-juan.jpg" alt="">
                    {{-- <span class="img_name">Shop women</span> --}}
                    {{-- <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View women's collection</a>  --}}
                </div>
                <div class="col-md-6" style="padding:0;">
                    <img class="hero_img" src="./img/pexels-andrea.jpg" alt="">
                    {{-- <span class="img_name">Shop men</span>
                    <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View men's collection</a> --}}
                </div>
            {{-- </div> --}}
          </div>
        </section>
        <section>
            <div class="container-fluid" style="padding: 0px 30px; background-color: #0d244c;">
                <div class="row">
                    <div class="col-md-6 col-sm-12" style="padding:0; text-align:center; ">
                        <label style="border-bottom: 1px solid white; padding: 20px;">
                            <i style="font-size: 15px; color:white;" class="fa-solid fa-magnifying-glass"></i><input type="search" value="" name="" class="" placeholder="Search all products in our store ..." required="" aria-required="true" aria-label="" style="border :0px;
                        background-color: transparent;
                        width: 288px;
                        font-size: 17px;
                        margin-left: 21px;
                        " >
					    </label>
                    </div>
                    <div class="col-md-6 col-sm-12" style="padding:0; background-color: #0d244c;z-index: 999;
                color: white;">
                        <span>Shop Women</span>
                        <span>Shop Women</span>
                        <span>Shop Women</span>
                        <span>Shop Women</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding: 0px 20px;">
            <div class="" style=" display: flex; justify-content: center; padding-bottom:20px; padding-top: 11rem !important;">
                <img decoding="async" width="212" height="39" src="https://avada.website/retail/wp-content/uploads/sites/113/2021/04/retail-logo-svg.svg" alt="" style="margin-left: 5%;" class="img-responsive wp-image-3583 disable-lazyload">
            </div>
            <div class="">
                <p style="text-align: center;
                font-size: 27px;">Urna elit, sem lobortis faucibus 
                <b style="border-bottom: 3px solid black;">Facilisi vel lectus etiam</b>
                </p>
                <p style="text-align: center;
                font-size: 27px;">phasellus odio in massa sociis congue massa feugiat ut sit </p> 
                <p style="text-align: center;
                font-size: 27px;
                padding-bottom: 20px;
            ">pulvinar in.</p>
            </div>
            <div class="">
                <p style="text-align: center;
                font-size: 20px; padding-bottom:85px;">
                    <a style="color: black; " href="#">Buy Avada theme today!</a>
                </p>
            </div>
        </div>
    </section>
    {{-- allproduct section --}}
    <section style="padding-top: 40px;">
        <div class="container-fluid" style="padding:0px 30px">
            <div class="">
                <h1 class="latest_product">Latest products</h1>
            </div>
            <div class="percent_price_btn">
                <a href="" class="num_btn">
                    <span>-33%</span>
                </a>
            </div>
            <div class="row " style="text-align: center !important;">
                <div class="col-md-3 sm-col-12" >
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                    <div class="product_price">
                        <span class="exact_price" >$30.00</span>
                        <span class="discount_price">$45.00</span>
                        <button type="button" class="dis_btn" >33% off</button>
                    </div>
                </div> 
                <div class="col-md-3 sm-col-12">
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                       </div>
                        <div class="product_price" >
                          <span class="exact_price">$30.00</span>
                    </div>
                </div>
                <div class="col-md-3 sm-col-12" >
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                    <div class="product_price">
                        <span class="exact_price" >$30.00</span>
                        <span class="discount_price">$45.00</span>
                        <button type="button" class="dis_btn" >33% off</button>
                    </div>
                </div> 
                <div class="col-md-3 sm-col-12">
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                       </div>
                        <div class="product_price" >
                          <span class="exact_price">$30.00</span>
                    </div>
                </div> 
            </div> 
            <div class="row " style="text-align: center !important; padding-top:4%;">
                <div class="col-md-3 sm-col-12">
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                        <div class="product_price" >
                        <span class="exact_price">$30.00</span>
                    </div>
                </div>  
                <div class="col-md-3 sm-col-12" >
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                    <div class="product_price">
                        <span class="exact_price" >$30.00</span>
                        <span class="discount_price">$45.00</span>
                        <button type="button" class="dis_btn" >33% off</button>
                    </div>
                </div> 
                <div class="col-md-3 sm-col-12">
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                        <div class="product_price" >
                        <span class="exact_price">$30.00</span>
                    </div>
                </div>  
                <div class="col-md-3 sm-col-12" >
                    <x-productcomponent />
                    <div class="" style="margin-top: 5%;" >
                        <p class="component_part">Simple Tank Top</p>
                    </div>
                    <div class="product_price">
                        <span class="exact_price">$30.00</span>
                        <span class="discount_price">$45.00</span>
                        <button type="button" class="dis_btn" >33% off</button>
                    </div>
                </div> 
            </div>        
        </div>
    </section>
    {{-- end allproduct section --}}
    {{-- product collection section --}}
    <section style="padding-top:95px;">
       <div class="container-fluid" style= "padding:0px 20px;">
        <div class="row" style="background-color:#f8f5ef;">
            <div class="col-md-3 col-sm-12" style="padding-top:95px;padding-left:2%;">
              <div>
                  <h2 class="browse">Browse the latest collections.</h2>
              </div>
              <div class="" style="margin-top:10%">
                  <p style="font-size: 18px;
                  font-weight: 400;">Morbi leo sagittis placerat sem. Nisl tincidunt nulla fames nisl risus egestas.</p>
              </div>
              <div class="" style="">
                  <p style=" margin-top: 80px;">
                      <a style="color: black; font-size:20px;" href="#">Buy Avada today!</a>
                  </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-12" style="padding-top:80px;">
              <x-productcomponent />
              <div style="margin-top: 5%;">
                <p class="casual">Casual collection 7 </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-12" style="padding-top:80px;">
              <x-productcomponent />
              <div  style="margin-top: 5%;">
                <p class="casual">Casual collection 7 </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-12" style="padding-top:80px;">
              <x-productcomponent />
              <div  style="margin-top: 5%;">
                <p class="casual">Casual collection 7 </p>
              </div>
            </div>
         </div>
       </div>
    </section>
    {{-- endproduct collection section --}}
    {{-- section --}}
    <section style="padding-top: 95px;">
        <div class="container-fluid" style="padding: 13px">
            <div class="row">
                <div class="col-md-6 col-sm-12" >
                    <a href="" class="">
                        <img class="apolo_img" src="./img/apologizes.jpg" alt="" >
                    </a> 
                </div>
                <div class="col-md-6 col-sm-6" style="padding-left: 30px;">
                    <a href="" class="">
                        <img class="paxel_img" src="./img/pexels-andrea.jpg" alt="" >
                    </a> 
                    <a href="" class="">
                        <img class="paxel_img" src="./img/pexels-juan.jpg" alt="" style="margin-top: 34px;">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end section --}}
    {{-- blog section --}}
    <section style="padding-top: 60px;">
        <div class="container-fluid" style="padding: 20px;">
            <div class="row" style="background-color:#0d244c">
                <div class="col-md-12 col-sm-12" style="padding-top: 100px; padding-bottom: 40px;">
                   <p class="latest">Latest from the blog</p>
                   <p class="more-text">Morbi leo sagittis placerat sem nisl tincidunt nulla.</p>
                </div>
            </div>
            <div class="row" style="background-color:#0d244c; ">
                <div class="col-md-4 col-sm-12"  >
                    <a href="" class="">
                        <img  class="blog_img" src="https://avada.website/retail/wp-content/uploads/sites/113/2021/03/blog-7.jpg" alt="blog-7"  data-sizes="auto" sizes="361px">
                    </a> 
                    <a  href=" " style="text-decoration: none; ">
                        <div class="brand_shop">
                            <div style="padding: 26px;">
                                <span>6 brands to shop</span>
                                <span>for a fresh start</span>
                                <span>this spring</span>
                            </div>
                        </div>
                    </a>
                    <a  href="" class="artical" style="bottom: 107px;">
                        Read artical<i style="margin-left: 2%;" class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12" >
                    <a href="" class="">
                        <img class="blog_img" src="https://avada.website/retail/wp-content/uploads/sites/113/2021/03/blog-5.jpg" data-sizes="auto" sizes="361px">
                    </a> 
                    <a  href=" " style="text-decoration: none; ">
                        <div class="brand_shop">
                            <div style="padding: 26px;">
                                <span>Cute valentines</span>
                                <span>day gifts for him </span>
                                <p> or her</p>
                            </div>
                        </div>
                    </a>
                    <a  href="" class="artical">
                        Read artical<i style="margin-left: 2%;" class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12" >
                    <a href="" class="">
                        <img class="blog_img"  src="https://avada.website/retail/wp-content/uploads/sites/113/2021/02/blog-3.jpg" alt="blog-3" data-sizes="auto" sizes="361px">
                    </a> 
                    <a  href=" " style="text-decoration: none; ">
                        <div class="brand_shop">
                            <div style="padding: 26px;"> 
                                <span>Street style</span>
                                <span>lookbook – 2021</span>
                                <p> Edition</p>
                            </div>
                        </div>
                    </a>
                    <a  href="" class="artical">
                        Read artical<i style="margin-left: 2%;" class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end blog section --}}
    {{-- category section --}}
    <section>
        <div class="container-fluid" style="padding-top:65px;">
            <div class="row" style="padding: 20px;">
                <div class="col-md-12 col-sm-12">
                    <p class="pro_category">Browser by category</p>
                </div>
            </div>
            <div class="row" style="padding: 7px;">
                <div class="col-md-2 col-sm-12 ">
                    <x-product_category />
                    <p style="text-align: center;
                    font-size: 20px;
                    font-weight: 500;
                    padding-top: 20px;">Women<span style="font-size: 14px;
    font-weight: 300;
    margin-left: 14px;">10</span></p>
                </div>
                <div class="col-md-2 col-sm-12">
                    <x-product_category />
                </div>
                <div class="col-md-2 col-sm-12">
                    <x-product_category />
                </div>
                <div class="col-md-2 col-sm-12">
                    <x-product_category />
                </div>
                <div class="col-md-2 col-sm-12">
                    <x-product_category />
                </div>
                <div class="col-md-2 col-sm-12">
                    <x-product_category />
                </div>
            </div>
        </div>
    </section>
    {{-- category section --}}
    {{-- hero section --}}
@endsection