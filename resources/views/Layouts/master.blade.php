<!doctype html>
<html>
  <head>
    @if(Session::get('flash_message') != null))
        <div class='flash_message'>{{ Session::get('flash_message') }}</div>
    @endif
      <meta charset='utf-8' />
      <link href="/css/style.css" type='text/css' property='stylesheet' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' property='stylesheet' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Pacifico' property='stylesheet' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="/images/favicon.ico">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <title>Season of Giving</title>
    </head>
    <body>
      <header>
        <div class="titlemain">
            <a href="/" class="titlelink">
              <img src="/images/giftban.png" alt="giftban" class="giftban"/>
              @if(Request::is('/'))
                  Welcome
              @else
                  Season of Giving
              @endif
              <img src="/images/giftban.png" class="giftban" alt="giftban"/>
            </a>
        </div>
        <div class="nav">
         <div class="ribbon">
           <h1>
             <strong class="ribbon-content">
      <!--  <div class = "ribbonstuff">
          <img src="/images/ribbon.png" class="ribbonban" alt="ribbonban"/>
  -->
            @if(Auth::check())
              <a href="/about">About</a>
              -
              <a href="/charity">Charities</a>
               -
              <a href="/newwish">Log a Wish</a>
              -
             <a href="/account">My Account</a>
              -
             <a href="/logout">Log Out</a>
           @else
              <a href="/about">About</a>
               -
              <a href="/charity">Charities</a>
               -
              <a href="/newwish">Log a Wish</a>
              -
             <a href="/register">Register</a>
              -
             <a href="/login">Log In</a>
        @endif

          </strong>
        </h1>
        <div class="ribbon-stitches-bottom">
      </div>
    </div>
    </div>
      @yield('banner')
    </header>
    @yield('header')
        <div class="content2">
            @yield('content')
        </div>
        <footer>
            @yield('footer')
        </footer>
  </body>
</html>
