<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Home Page</title>
    <!-- Css Files -->
    <link href="{{ asset ('frontend_asset/css/bootstrap.css    ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/font-awesome.css ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/flaticon.css     ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/slick-slider.css ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/fancybox.css     ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/style.css            ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/color.css        ') }}"  rel="stylesheet">
    <link href="{{ asset ('frontend_asset/css/responsive.css   ') }}"  rel="stylesheet">





  </head>
  <body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">

            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6">
                            <ul class="sportsmagazine-social-network">
                                <li><a href="https://www.facebook.com/" class="sportsmagazine-colorhover fa fa-facebook-official" target="_blank"></a></li>
                                <li><a href="https://twitter.com/login" class="sportsmagazine-colorhover fa fa-twitter-square" target="_blank"></a></li>
                                <li><a href="https://pk.linkedin.com/" class="sportsmagazine-colorhover fa fa-linkedin-square"target="_blank"></a></li>
                                <li><a href="https://plus.google.com/" class="sportsmagazine-colorhover fa fa-google-plus-square"target="_blank"></a></li>
                            </ul>
                        </aside>

                        <aside class="col-md-6">
                            <ul class="sportsmagazine-user-section">
                                <li><i class="fa fa-globe"></i> <a href="https://gol.kooralive.info/" target="_blank">Matches Live</a></li>
                                <li><i class="fa fa-dollar"></i> <a href="https://forex.cbm.gov.mm/index.php/fxrate" target="_blank">Currency : USD</a></li>
                                <li>
                                    <i class="fa fa-shopping-cart"></i>
                                    <a href="{{ route('shoping_cart') }}" class="cartNoti">
                                        Cart(0)
                                    </a>
                                </li>

                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <i class="fa fa-user"></i>
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <i class="fa fa-sign-in"></i>
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                            <a class="dropdown-item" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            {{-- <a href="" class="dropdown-item">Order history</a> --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                <i class="fa fa-logout"></i>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainSection \\-->
            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2"><a href="{{ route('homepage') }}" class="sportsmagazine-logo"><img src="{{ asset ('frontend_asset/images/logo-2.png ')}}" alt=""></a></aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{route('homepage')}}">Home</a>
                                        </li>

                                        <li class="sportsmagazine-megamenu-li {{ Request::is('match*') ? 'active' : '' }}"><a class="#">Matches</a>
                                            <ul class="sportsmagazine-megamenu">
                                                    <x-match-component></x-match-component>
                                            </ul>
                                </li>

                                        <li class="sportsmagazine-megamenu-li {{ Request::is('match') ? 'active' : '' }}">

                                            <a href="{{route('blog_news')}}">News</a>

                                        <li class="{{ Request::is('tables*') ? 'active' : '' }}"><a href="#">Tables</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="https://www.fotmob.com/leagues/42/table/champions-league" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/champion_league.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Champion league</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/73/matches/europa-league" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/europa_league.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Europa league</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/47/table/premier-league" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/premier_league.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Premier league</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/87/table/laliga" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/laliga.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Laliga</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/55/table/serie-a" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/serie_a.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Serie A</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/54/table/1.-bundesliga" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/bundesliga.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Bundesliga</a>
                                                </li>
                                                <li><a href="https://www.fotmob.com/leagues/53/table/l" target="_blank"><img src="{{asset('frontend_asset/extra-images/league/ligue_1.jpg')}}" width="30px;">&nbsp;&nbsp;&nbsp;Ligue 1</a>
                                                </li>


                                            </ul>
                                        </li>
                                        <li class="{{ Request::is('ourshop*') ? 'active' : '' }}"><a href="{{route('shop_gallery')}}">OUR SHOP</a>
                                        </li>



                                        <li class="sportsmagazine-megamenu-li {{ Request::is('contact us*') ? 'active' : '' }}"><a href="#">Contact us</a>
                                            <ul class="sportsmagazine-megamenu">
                                                <li class="row">
                                                    <div class="col-md-2">
                                                        <h4>About</h4>
                                                        <ul class="sportsmagazine-megalist">

                                                            <li><a href="{{ route('register') }}" >Register</a></li>
                                                            <li><a href="{{ route('login') }}" >Login</a></li>
                                                            <li><a href="{{route('Faq')}}">FAQ</a></li>
                                                            <li><a href="{{route('contact')}}">Contact us</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4>Player text</h4>
                                                        <div class="sportsmagazine-mega-text">
                                                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                            <p>If you haven't found it yet, keep looking. Don't settle.believe is great work. And the only way As with all matters of the heart, you'll know when you find it.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">

                                                        <a href="#" class="sportsmagazine-thumbnail">
                                                            <img src="{{ asset ('frontend_asset/extra-images/mega-menuadd.jpg')}}" alt="" />
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                      </ul>
                                    </div>
                                </nav>
                                <a data-toggle="modal" data-target="#searchModal" href="#" class="sportsmagazine-search-btn sportsmagazine-colorhover"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->


        </header>
        <!--// Header \\-->


      @yield('content')
        <!--// Footer \\-->
        <footer id="sportsmagazine-footer" class="sportsmagazine-footer-one">

            <!--// Footer Widget \\-->
            <div class="sportsmagazine-footer-widget">
                <div class="container">
                    <div class="row">
                        <!--// Widget Contact Info \\-->
                        <aside class="col-md-4 widget widget_contact_info">
                            <a href="index-2.html" class="footer-logo"><img src="{{ asset ('frontend_asset/images/logo-2.png')}}" alt=""></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elUt ac malesuada ante.Sed gravida, ur quis tempus sollicitudin, tellus urna</p>
                            <ul class="sportsmagazine-social-network">
                                <li><a href="https://www.facebook.com/" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="https://twitter.com/login" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                                <li><a href="https://pk.linkedin.com/" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                                <li><a href="https://plus.google.com/" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                            </ul>
                            <ul class="sportsmagazine-info-list">
                                <li><i class="fa fa-map-marker"></i> <span>08 Baho Street , Hleden 2807</span></li>
                                <li><i class="fa fa-phone"></i> <span>(+95) 752 998 113 </span></li>
                                <li><i class="fa fa-envelope"></i> <span><a href="mailto:name@email.com">sportNews@gmail.com</a></span></li>
                            </ul>
                        </aside>
                        <!--// Widget Contact Info \\-->
                        <!--// Widget Twitter \\-->
                        <aside class="col-md-4 widget widget_twitter">
                            <div class="footer-widget-title"><h2>Twitter Feeds</h2></div>
                            <ul>
                                <li>
                                    <i class="fa fa-twitter"></i> <span>@football</span>
                                    <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">do come & visit</a></p>
                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i>Always Open</time>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <span>@Sports</span>
                                    <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">News</a></p>
                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i>Always Open</time>
                                </li>
                            </ul>
                        </aside>
                        <!--// Widget Twitter \\-->
                        <!--// Widget Gallery \\-->
                        <aside class="col-md-4 widget widget_gallery">
                            <div class="footer-widget-title"><h2>Flicker Photos</h2></div>
                            <ul>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="https://pin.it/42zXu6C" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-2.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-3.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-4.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-5.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-6.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-7.jpg')}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/widget-gallery-8.jpg')}}" alt=""></a></li>
                            </ul>
                        </aside>
                        <!--// Widget Gallery \\-->

                    </div>
                </div>
                <a href="#" class="sportsmagazine-back-top"><i class="fa fa-angle-up"></i></a>
            </div>
            <!--// Footer Widget \\-->

            <!--// CopyRight \\-->
            <div class="sportsmagazine-copyright">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 sportsmagazine-copyright-left"><p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p></aside>
                        <aside class="col-md-6 sportsmagazine-copyright-right">
                            <ul class="sportsmagazine-copyright-link">
                                <li><a href="https://www.sky.com/help/articles/skycom-terms-and-conditions" class="sportsmagazine-colorhover">Terms And Condition</a></li>
                                <li><a href="https://www.sky.com/help/articles/skycom-terms-and-conditions" class="sportsmagazine-colorhover">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// CopyRight \\-->

        </footer>
        <!--// Footer \\-->

    <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>





    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/jquery.js               ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/bootstrap.min.js        ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/slick.slider.min.js     ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/jquery.countdown.min.js ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/fancybox.pack.js        ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/isotope.min.js          ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/progressbar.js          ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/counter.js              ') }}"></script>
    <script type="text/javascript" src="{{ asset ('frontend_asset/script/functions.js            ') }}"></script>


    <script type="text/javascript" src="{{ asset ('frontend_asset/script/custom1.js ') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>




  </body>

</html>
