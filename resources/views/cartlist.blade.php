@extends('master')
@section('title' , 'EcomWeb - CartItems')
    
@section('content')

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                        <div class="cart_title">Shopping Cart<small> (<?php echo count($cartitems) ?> items in your cart) </small></div>
                            <div class="cart_items">
                                @foreach ($cartitems as $item)
                                <ul class="cart_list">
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="{{$item->gallery}}" alt="{{$item->name}}"></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Name</div>
                                                <div class="cart_item_text">{{$item->name}}</div>
                                            </div>
                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title">Category</div>
                                                <div class="cart_item_text"><span style="background-color:#999999;"></span>{{$item->category}}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">{{$item->price}} MAD</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">
                                                    <a href="/RemoveFromCart/{{$item->cart_id}}" class="btn btn-warning"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    <div class="order_total_amount">
                                        <?php
                                            $sum = 0;
                                            foreach ($cartitems as $item){
                                                $sum += $item->price;
                                            }
                                            echo $sum .' MAD' ;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <div class="cart_buttons"> <a href="/" type="button" class="button cart_button_clear">Back To Shopping</a> <button type="button" class="button cart_button_checkout">Proceed to payement</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
