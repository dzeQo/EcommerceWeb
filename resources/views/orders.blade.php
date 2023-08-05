@extends('master')
@section('title' , 'EcomWeb - My orders')
    
@section('content')

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                        <div class="cart_title">My Orders<small> (<?php echo count($orders) ?> items in your orders) </small></div>
                            <div class="cart_items">
                                @foreach ($orders as $item)
                                <ul class="cart_list">
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="{{$item->gallery}}" alt="{{$item->name}}"></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title  text-center">Name</div>
                                                <div class="cart_item_text  text-center">{{$item->name}}</div>
                                            </div>
                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title  text-center">Delivery Status</div>
                                                <div class="cart_item_text  text-center"><span style="background-color:yellow;"></span>{{$item->status}}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title text-center">Address</div>
                                                <div class="cart_item_text  text-center">{{$item->address}} </div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title  text-center">Payement Method </div>
                                                <div class="cart_item_text  text-center">{{$item->payement_method}}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title  text-center">Payement status </div>
                                                <div class="cart_item_text  text-center"><i class="fas fa-spinner"></i>  {{$item->payement_status}}</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                            <!-- <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    <div class="order_total_amount">
                                        <?php
                                            $sum = 0;
                                            foreach ($orders as $item){
                                                $sum += $item->price;
                                            }
                                            echo $sum .' MAD' ;
                                        ?>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
