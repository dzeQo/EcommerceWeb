@extends('master')
@section('title' , 'EcomWeb - Order Now')
    
@section('content')

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                        <div class="cart_title">Completing the Order</div> <br > <br >
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Amount</td>
                                        <td>{{$total}}  MAD</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>{{ $tax = ($total * 2.5) /100}} MAD</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td> 50 MAD </td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount </td>
                                        <td>{{ $total + $tax +50 }} MAD</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div><br><br>
                                <form action="/orderplace" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" name="address" placeholder="Enter your Address here ..." rows="5" id="comment" name="text"></textarea>
                                    </div><br><br>
                                    <div class="form-group">
                                        <label for="comment">Payement Method :</label><br><br>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio1" name="payment" value="debitCard" checked>
                                            <label class="form-check-label" for="debitCard">Debit Card</label><br><br>
                                          </div>
                                          <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio2" name="payment" value="PayPal">
                                            <label class="form-check-label" for="PayPal">PayPal</label><br><br>
                                          </div>
                                          <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio3" name="payment" value="Cash">
                                            <label class="form-check-label" for="Cash">Payement On Delivery</label><br><br>
                                          </div>
                                    </div>
                                    <div class="cart_buttons">
                                         <button type="submit" class="btn btn-outline-info"> Order Now </button>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
