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
                 @foreach ($parameter["data"]["data"]["liste_event_actif"] as $item_parent)
                 <div class="features_items">
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
                                                <p><i class="fa fa- fa-map-marker"></i>&nbsp;{{$item->lieu}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <a href="{{route('detail_event',["id"=>$item->slug])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Acheter ticket</a>
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
                </div>     
              @endforeach
            </div>  
        </div>
    </div>
</section>

@endsection