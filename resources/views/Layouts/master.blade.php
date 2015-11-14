<!doctype html>
<html>
  <head>
      <meta charset='utf-8'>
      <link href="/css/style.css" type='text/css' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="/images/favicon.ico">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <title> Season of Giving </title>
  </head>
  <banner>
    <div class="title">
    <a href="/" class="titlelink">
    <img src="/images/giftban.png" class="giftban"/>
      Season of Giving
    <img src="/images/giftban.png" class="giftban" alt="giftban"/>
  </a>

    </div>
    <div class="nav">
    <div class="ribbon">
    <!--  <div class="ribbon-stitches-top">
    </div> -->
    <strong class="ribbon-content">
      <h1>
        <a href="/about">About</a>
         -
        <a href="/charity">Find a Charity</a>
         -
        <a href="/newwish">Log a Wish</a>
        -
       <a href="/account">My Account</a>
        -
       <a href="/login">Log in</a>
      </h1>
    </strong>
    <div class="ribbon-stitches-bottom">
    </div>
  </div>
  </div>
    @yield('banner')
  </banner>

  <body>
      @yield('header')

      <div class="content2">
        @yield('content')
      </div>

      <footer>
        @yield('footer')
      </footer>

  </body>
</html>
