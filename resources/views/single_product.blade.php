@extends('layout.main')

@section('content')
 
 <!-- Products Start -->
 <div id="products">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-12">
                 <div class="product-single">
                     @if ($product)
                         <div class="product-img">
                             <img src="{{ asset('img/product-' . $product->id . '.png') }}" alt="Product Image">
                         </div>
                         <div class="product-content">
                             <h2>{{ $product->name }}</h2>
                             @if ($product->sell_price != null)
                                 <h3>${{ $product->sell_price }}</h3>
                                 <h3 style="text-decoration: line-through;">${{ $product->price }}</h3>
                             @else
                                 <h3>${{ $product->price }}</h3>
                             @endif
                             <p>{{ $product->description }}</p>
                             <p>{{ $product->category }} - {{ $product->type }}</p>
                             <form method="POST" action="{{ route('add_to_cart') }}">
                                 @csrf
                                 <input type="hidden" name="id" value="{{ $product->id }}">
                                 <input type="hidden" name="name" value="{{ $product->name }}">
                                 <input type="hidden" name="price" value="{{ $product->price }}">
                                 <input type="hidden" name="sell_price" value="{{ $product->sell_price }}">
                                 <input type="hidden" name="quantity" value="1">
                                 <input type="hidden" name="image" value="{{ $product->image }}">
                                 <input type="submit" value="Add to Cart" class="btn">
                             </form>
                         </div>
                     @else
                         <p>No product found.</p>
                     @endif
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Products End -->
 @endsection
 