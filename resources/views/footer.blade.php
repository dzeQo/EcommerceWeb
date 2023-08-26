  <footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}"><img src="{{asset('styles')}}/images/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p> <b>t9edda Leya</b> is a digital platform where customers can browse and purchase products or services online, offering convenience and a wide selection of items </p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://web.facebook.com/callmeDzeQo/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="https://github.com/dzeQo/"><i class="fab fa-github github-bg"></i></a>
                                <a href="https://www.linkedin.com/in/zakariae-lebisser-7a67061a3/"><i class="fab fa-linkedin linkedin-bg"></i></a>
                                <a href="https://twitter.com/ZLebisser"><i class="fab fa-twitter twitter-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget" >
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="{{ url('/categories/phones')}}">Phones</a></li>
                                <li><a href="{{ url('/categories/clothes')}}">Clothes</a></li>
                                <li><a href="{{ url('/categories/sport')}}">Sport</a></li>
                                <li><a href="{{ url('/categories/electromenager')}}">Electromenager</a></li>
                                <li><a href="{{ url('/categories/fornitures')}}">Fornitures</a></li>
                                <li><a href="{{ url('/categories/health')}}">Health Care</a></li>
                                <li><a href="{{ url('/categories/beauty')}}">Beauty </a></li>
                                <li><a href="{{ url('/categories/Phones\'s accessories')}}">Phone's accessories</a></li>
                                <li><a href="{{ url('/categories/kitchen')}}">Kitchen</a></li>
                                <li><a href="{{ url('/categories/gaming')}}">Gaming & console</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe for newsletter</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="https://www.linkedin.com/in/zakariae-lebisser-7a67061a3/">dzeQo</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                @if (Session::has('user'))
                                <li><a href="{{ url('/') }}">My Orders</a></li>
                                @endif
                                <li><a href="{{route('pp') }}">Privacy & Policy</a></li>
                                <li><a href="{{ url('/about-us')}}">About Us</a></li>
                                <li><a href="{{ url('/categories/clothes')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>