<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <!-- Styles -->
  
    </head>
    <body>
    <!-- Wrapper -->
            <div id="wrapper" class="divided">
<div class="container">
     <!-- Banner -->
                    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                        <div class="content">
                            <h1>Story</h1>
                            <p class="major"><!--[-->A (modular, highly tweakable) responsive one-page template designed by <a href="https://html5up.net">HTML5 UP</a> and released for free under the <a href="https://html5up.net/license">Creative Commons</a>.<!--]--></p>
                            <p>This is a <strong>Banner</strong> element, and it's generally used as an introduction or opening statement. You can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-banner">details</a>).</p>
                            <ul class="actions vertical">
                            @if (Route::has('login'))
     
                    @if (Auth::check())
                    <a href="{{ url('/survey') }}" class="button medium wide smooth-scroll-middle">Home</a>
                    <a href="{{ route('logout') }}" class="button medium wide smooth-scroll-middle">Sign Out</a>
                      
                    @else
                    <li><a href="{{ url('/login') }}" class="button big wide smooth-scroll-middle">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="button big wide smooth-scroll-middle">Register</a></li>
            
                    @endif
               
            @endif
                                
                            </ul>
                        </div>
                        <div class="image">
                            <img src="images/cover.jpg" alt="" />
                        </div>
                    </section>

            


            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

        <!-- Note: Only needed for demo purposes. Delete for production sites. -->
            <script src="assets/js/demo.js"></script>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

</div>
               
        
        </div>
    </body>
</html>
