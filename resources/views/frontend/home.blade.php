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
        padding: 1%;
        position: fixed;
        border-radius: 7px;
        top: 200px;
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
     /* floating button css */
</style>
    
@endsection
@section('content')
    {{-- hero section --}}
    <section class="hero">
        <div class="container-fluid" style="padding: 0px 20px;">
            <div class="floating-button">
                <a href="#" class="floating_cart">
                    <i class="fa-solid fa-cart-shopping order_btn"></i>
                    <span>Prebuilts</span>
                </a>
            </div>
            {{-- <div class="floating-button">
                <a href="#" style="text-decoration: none">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span style="display: flex">Buy Now</span>
                </a>
            </div> --}}
            <div class="row">
                <div class="col-6" style="padding: 0;">
                    <img class="hero_img" src="./img/pexels-juan.jpg" alt="">
                    <span class="img_name">Shop women</span>
                    <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View women's collection</a>
                </div>
                <div class="col-6" style="padding: 0;">
                    <img class="hero_img" src="./img/pexels-andrea.jpg" alt="">
                    <span class="img_name">Shop men</span>
                    <span class="img_content">If you're looking to add shop-related </span>
                    <span class="img_content"> content to your website.</span>
                    <a href="" class="view_collection">View men's collection</a>
                </div>
            </div>
        </div>
    </section>
    {{-- hero section --}}
@endsection