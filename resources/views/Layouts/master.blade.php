<!doctype html>
<html>
  <head>
      <meta charset='utf-8'>
      <link href="/css/style.css" type='text/css' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="/images/favicon.ico">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <title> Season of Giving </title>
  </head>
  <banner>
    <ul>
        <li>How it works</li>
        <li>Find a charity</li>
        <li>Log a donation</li>
        <li>My donations</li>
        @yield('banner')
    </ul>
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
