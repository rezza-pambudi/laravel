<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RezzaMovie</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
    <div id="header">
        <h1 id="logo"><a href="#">RezzaMovie</a></h1>
        
        <div id="navigation">
          <ul>
            <li><a class="active" href="#">HOME</a></li>
            <li><a href="{{ url('/login') }}">LOGIN</a></li>
          </ul>
        </div>
        <div id="sub-navigation">
          
          <div id="search">
            <form action="#" method="get" accept-charset="utf-8">
              <label for="search-field">SEARCH</label>
              <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
              <input type="submit" value="GO!" class="search-button" />
            </form>
          </div>
        </div>
      </div>

      @yield('content')

      <div id="footer">
        <p class="lf">Copyright &copy; 2025 <a href="#">Moviesite</a> - All Rights Reserved</p>
        <div style="clear:both;"></div>
      </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>