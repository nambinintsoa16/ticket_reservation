@extends('layouts.content')
@section('page_content')
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < $parameter["data"]["data"]["slid_count"]; $i++)
                            <li data-target="#slider-carousel" data-slide-to="0" class="{{$i == 0 ?"active":""}}"></li>
                        @endfor  
                    </ol>
                  
                    <div class="carousel-inner">  
                        @foreach ($parameter["data"]["data"]["slid_menu"] as $items_slide)
                        <div class="item {{$items_slide->active}}">
                            <div class="col-sm-6">
                                <h1>{!!$items_slide->title_slide_1!!}</h1>
                                <h2>{{$items_slide->title_slide_2}}</h2>
                                <p>{{$items_slide->content_slide}}</p>
                                <button type="button" class="btn btn-default get">{{$items_slide->link_slide}}</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset("assets/images/home/girl1.jpg")}}" class="girl img-responsive" alt="" />
                                <img src="{{asset("assets/images/home/pricing.png")}}"  class="pricing" alt="" />
                            </div>
                        </div>  
                        @endforeach
                    </div>
                  
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="features_items"><!--features_items-->
                 @foreach ($parameter["data"]["data"]["liste_event_actif"] as $item_parent)
                  <h2 class="title text-center">{{$item_parent->categorie_nom}}</h2>
                   @foreach ($item_parent->Produits as $item)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo">
                                        <div class="row">
                                            <div class="col-md-5">
                                                 <img src="{{asset("assets/images/home/product1.jpg")}}" alt="" />
                                            </div>
                                            <div class="col-md-7 card bg-white">
                                                <h2>{{$item->nom_produit}} </h2> 
                                                <p><i class="fa fa- fa-calendar"></i>&nbsp;{{$item->jour}}</p>
                                                <p><i class="fa fa-clock-o"></i>&nbsp;{{$item->date}} à {{$item->heure}}</p>
                                                <p><i class="fa fa-map-marker"></i>&nbsp;{{$item->lieu}}</p>
                                               
                                                <!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Acheter ticket</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <a href="{{route('detail_event',["id"=>$item->slug])}}" class="btn btn-default add-to-cart">Détail</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>MGA {{$item->prix_debut}} à MGA {{$item->prix_fin}}</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>{{$item->type_evenement}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach         
                </div><!--features_items-->
                @endforeach
                
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">	
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>			
                    </div>
                </div><!--/recommended_items-->
                
            </div>
        </div>
    </div>
</section>

@endsection