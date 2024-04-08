@extends('layouts.app')
@section('style')
    <style>
        /* .home_img:hover{
        margin: 3%;
        } */
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
        /* floating button css */
        /* product component css */
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
        /* component css */
    </style>
@endsection
@section('content')
    {{-- hero section --}}
    <section class="hero">
        <div class="container-fluid" style="padding: 0px 30px;">
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
            <div class="row">
                <div class="col-md-6 col-sm-12" style="padding:0; background-color: #0d244c;">
                    <img class="hero_img" src="./img/pexels-juan.jpg" alt="">
                    <span class="img_name">Shop women</span>
                    <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View women's collection</a>
                    <input type="search" style="    color: black;
                    z-index: 999;
                    border: opx;
                    border: 0px;" name="search" value="" placeholder="Search  all productsin our store..." required>
                </div>
                <div class="col-md-6" style="padding:0; background-color: #0d244c;">
                    <img class="hero_img" src="./img/pexels-andrea.jpg" alt="">
                    <span class="img_name">Shop men</span>
                    <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View men's collection</a>
                    <div class="" style="  z-index: 999;
                    color: white;
                    font-size: 25px;">
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
                font-size: 20px;">
                    <a style="color: black;" href="#">Buy Avada theme today!</a>
                </p>
            </div>
            <div class="">
                <h2 class="" style="font-size: 25px;padding-bottom: 20px;">Latest products</h2>
            </div>
        </div>
    </section>
    {{-- allproduct section --}}
    <section style="padding-top: 40px;">
        <div class="container-fluid" style="padding:0px 30px">
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
    {{-- <section style="padding-top: 95px;">
        <div class="container-fluid" style="padding: 20px">
            <div class="row">
                <div class="col-6">
                    <x-prodectcollection />
                </div>
                <div class="col-6">
                    <x-prodectcollection />
                </div>
            </div>
        </div>
    </section> --}}
    {{-- hero section --}}
@endsection