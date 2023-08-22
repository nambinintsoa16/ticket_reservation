@extends('layouts.content')
@section('page_content')
    
<div class="product-details"><!--product-details-->
    <div class="col-sm-8">
        <div class="view-product">
            <img src="{{asset("assets/images/product-details/iframe2.png")}}" alt="" />
        </div>
    </div>
    <div class="col-sm-4">
        <div class="product-information"><!--/product-information-->
            <h2>Place disponible</h2>
            <div id="enplacement_content" style="width: 250px"></div>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#reviews" data-toggle="tab">Description de l'evenement</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-map-marker"></i>{{$parameter['data']['detail_event']->lieu}}</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>&nbsp;{{$parameter['data']['detail_event']->jour}}</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>&nbsp;{{$parameter['data']['detail_event']->heure}}</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>{{$parameter['data']['detail_event']->date}}</a></li>
                </ul>
                <p>{!!$parameter['data']['detail_event']->description!!}</p>
                
            </div>
        </div>
    </div>
</div><!--/category-tab-->
@endsection
@section('jascript')
<script>
    $(document).ready(function () {
           /* new seatsio.SeatingChart({
            divId: 'enplacement_content',
            workspaceKey: '6158bb75-611d-4d21-a377-2fd1c1305570',
            event: 'b9ca2af4-dc56-4e6c-b665-4622a7f26c58',
            session: 'continue',
            pricing: [
            {'category': 1, 'price': "10 000"}, 
            {'category': 2, 'price': "30 000"}, 
            {'category': 3, 'price': "50 000"},
            {'category': 3, 'price': "100 000"}
            ],
            priceFormatter: function(price) {
                return 'MGA ' + price;
            }
        }).render();*
    });
</script>
@endsection