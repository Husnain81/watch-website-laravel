@extends('layout.main')

@section('content')


    <!-- Checkout -->
    <section class="my-5 py-5 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Check Out</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form"  method="POST"  action="{{route('place_order')}}">
                @csrf
                
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email address" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="address" required>
                </div>


                

                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Checkout">
                </div>
               
            </form>
        </div>
    </section>


 
@endsection