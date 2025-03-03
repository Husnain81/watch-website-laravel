@extends('layout.main')


@section('content')


<!-- Header Start-->

<div id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
                    <script src="{{ asset('js/main.js') }}"></script>
                    <h2><span>WATCH</span> is the best <span>Landing Page</span> to showcause your product</h2>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS
                            Support</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>GPS & Health Tracker
                        </li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Read & reply to
                            messages</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compatible with all
                            devices</li>
                    </ul>
                    <a class="btn" href="{{route('products')}}">Buy Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-img">
                    <img src="{{asset('img/watch-header.png')}}" alt="Product Image">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header end-->



<!-- Process Start-->
<div id="process">
    <div class="container">
        <div class="section-header">
            <h2>How It Works</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-plug"></i>
                    <h2>Connect Device</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat
                        finibus
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-sliders-h"></i>
                    <h2>Configure it</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat
                        finibus
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-check"></i>
                    <h2>Done. Enjoy!!!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat
                        finibus
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process End-->



<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row align-items-center">

            @foreach ($products as $product)

                <div class="col-md-3">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="{{asset('img/' . $product->image)}}" alt="Product Image">
                        </div>
                        <div class="product-content">
                            <h2>
                                <a href="{{ route('single_product', ['id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                            </h2>
                            
                            <pre>{{ dd($product) }}</pre>

                            @if(is_object($product) && property_exists($product, 'sell_price') && !is_null($product->sell_price))
                                <h3>${{ $product->sell_price }}</h3>
                            @else
                                <h3>${{ $product->price ?? 'Price not available' }}</h3>
                            @endif


                            




                            {{-- buy now btn --}}
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
                    </div>
                </div>

            @endforeach

        </div>

        <div class="mt-5 text-center"><a href="{{route('products')}}" class="btn btn-primary">Buy Now</a></div>

    </div>
</div>
<!-- Products End -->







<!-- Testimonials Start -->
<div id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>99.99% Positive Reviews</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Christopher Heath</h3>
                    <h4>Science technician</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Mollie White</h3>
                    <h4>Youtuber</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-3.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Tom McKenzie</h3>
                    <h4>Videographer</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-4.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Ruby Forster</h3>
                    <h4>Photographer</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                    </p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-5.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Leo Conway</h3>
                    <h4>Relationship manager</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->


<!-- FAQ Start -->
<div id="faqs">
    <div class="container">
        <div class="section-header">
            <h2>Quick FAQs</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <span>1</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras felis nisi, sagittis quis
                                arcu eu, luctus cursus ante. Nullam nec diam vitae dolor porta ullamcorper. Duis
                                condimentum ante urna, quis scelerisque velit bibendum eu.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>2</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                Maecenas libero magna accumsan quis?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Maecenas libero magna, accumsan quis urna a, malesuada dictum risus. Duis placerat
                                interdum sodales. Vivamus nec dignissim urna. Nulla tempor enim at viverra tempor.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>3</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                Vivamus condimentum pharetra odio at efficitur?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Vivamus condimentum pharetra odio at efficitur. Pellentesque condimentum erat a sapien
                                maximus, sed tincidunt ante consectetur. In pulvinar blandit sagittis. Fusce a lorem
                                eleifend, ornare sem eu, faucibus ligula.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>4</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                Mauris nec auctor sem?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Mauris nec auctor sem. In eu dui euismod, bibendum ex id, congue enim. Suspendisse
                                potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>5</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                Aliquam massa purus fringilla sit amet eros sed?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Aliquam massa purus, fringilla sit amet eros sed, commodo consequat magna.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet
                        ultricies
                    </p>
                    <h3><i class="fa fa-map-marker"></i>123 Trade Tower, Los Angeles, CA, USA</h3>
                    <h3><i class="fa fa-envelope"></i>email@example.com</h3>
                    <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                    <a class="btn" href="#">Contact Us</a>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Start -->




<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/menuspy/menuspy.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>



@endsection