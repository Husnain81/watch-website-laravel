@extends('layout.main')

@section('content')
    <section class="container mt-3 my-3 py-5">
        <div class="container mt-2 text-center">
            <h4 style="margin-top: 45px;">Payment</h4>
            @if(Session::has('total') && Session::get('total') != null)
                @if(Session::has('order_id') && Session::get('order_id') != null)
                    <p style="color: blue">Total: ${{ Session::get('total') }}</p>
                @endif
            @endif
        </div>
    </section>

    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=Adq66bcXHinMx0OvLkNvHTRc8FODBXZOllKvXo4dN7Zdrts3PsGFrX3RbLtTlKTnAHElyqGXVeIsm0Iw&currency=USD"></script>
    <!-- Set up a container element for the button and center-align it -->
    <div class="text-center"> <!-- Add the "text-center" class here -->
        <div id="paypal-button-container" class="d-inline-block"> <!-- Add the "d-inline-block" class here -->
        </div>
    </div>

    <script>
        paypal.Buttons({
            // Order is created on the server and the order id is returned
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '77.44' // Use the fetched value from the database
                        }
                    }]
                });
            },

            onApprove: function (data, actions) {
                return actions.order.capture().then(function (orderData) {
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                });
            }
        }).render('#paypal-button-container');
    </script>






@endsection



