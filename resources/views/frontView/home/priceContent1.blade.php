@extends('frontview.master')
@section('pricerange1')

    <script type="text/javascript" src="{{asset('frontEnd')}}/js/js.js"></script>
    {{--slider--}}
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Best <span>powerbank</span> shop</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3> <span></span>Save money</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Collect <i>superior</i> product</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="frontEnd/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="frontEnd/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>

    <div class="clearfix"></div>
    </div>
    <!-- banner -->


    <!-- //500-1000 -->
    <div class="top-brands">
        <div class="container">
            <h3>Price Range-(500tk-1000tk)</h3>
            <div class="agile_top_brands_grids">
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            {{--<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img title=" " alt=" " src="/frontEnd/images/RED1.jpg" /></a>
                                            <h4>RAVPOWER1019</h4>
                                            <p>battery capacity:16000mAh</p>
                                            <p>weight:120g</p>
                                            <p>number of ports:3</p>
                                            <p>780TK </p>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                    <input type="hidden" name="amount" value="7.99" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img title=" " alt=" " src="/frontEnd/images/white4.jpg" /></a>
                                            <h4>ASUS2019</h4>
                                            <p>battery capacity:23000mAh</p>
                                            <p>weight:320g</p>
                                            <p>number of ports:3</p>
                                            <p>780TK </p>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="basmati rise" />
                                                    <input type="hidden" name="amount" value="11.99" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            {{--<div class="agile_top_brand_left_grid_pos">
                                <img src="images/offer.png" alt=" " class="img-responsive" />
                            </div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img src="/frontEnd/images/RAVPOWER20.jpg" alt=" " class="img-responsive" /></a>
                                            <h4>RAVPOWER2910</h4>
                                            <p>battery capacity:19000mAh</p>
                                            <p>weight:340g</p>
                                            <p>number of ports:3</p>
                                            <p>800TK </p>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                                    <input type="hidden" name="amount" value="8.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            {{--<div class="agile_top_brand_left_grid_pos">
                                <img src="images/offer.png" alt=" " class="img-responsive" />
                            </div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img src="/frontEnd/images/BLUE2.jpg" alt=" " class="img-responsive" /></a>
                                            <h4>BIRDO1927</h4>
                                            <p>battery capacity:28000mAh</p>
                                            <p>weight:280g</p>
                                            <p>number of ports:3</p>
                                            <p>780TK </p>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="dogs food" />
                                                    <input type="hidden" name="amount" value="9.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //500-1000 -->

    @endsection
