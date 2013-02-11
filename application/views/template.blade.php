<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>TechMerch</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/app.css') }}
	
</head>
<body>
	<div class="container">
		<?php $uri = URI::segment(1); ?>
      <div class="masthead">
        <h3 class="muted">TechMerch</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li <?php if($uri == 'auth') echo "class='active'" ?>><a href="/auth">Home</a></li>
                <li <?php if($uri == 'attend') echo "class='active'" ?>><a href="/attend">Attend</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        @yield('maincontent')
      </div>

      <hr>

    </div> <!-- /container -->
</body>
</html>
