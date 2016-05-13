<!DOCTYPE html>
<html class="desktop" lang="en">
<head>
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script><title>search result</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/search-form.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script> 
<script src="js/jquery.ehighteasing.1.3.js"></script> 
<script src="js/smmenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
</head>
<body>
<header>
    <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>
    <div class="js-search flt__l flt__n-xl">
    	<div class="toggle"></div>
    	<form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
    		<label class="input" for="in">
    			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
    		</label>
    	</form>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <ul class="nav sf-menu clearfix">
            <li><a href="index.html"><strong><em data-hover="home">home</em></strong></a></li>
            <li class="sub-menu"><a href="index-1.html"><strong><em data-hover="about us">about us</em></strong></a><span class="fa fa-angle-down"></span>
                <ul class="submenu">
    				<li><a href="#">about us I</a></li>
    				<li><a href="#">about us II</a><span class="fa fa-angle-right"></span>
                        <ul class="submenu">
                            <li><a href="#">about us 1</a></li>
                            <li><a href="#">about us 2</a></li>
                          </ul> 
                    </li>
    				<li><a href="#">about us III</a></li>
    			</ul>
            </li>
            <li><a href="index-2.html"><strong><em data-hover="Services">Services</em></strong></a></li>
            <li><a href="index-3.html"><strong><em data-hover="Projects">Projects</em></strong></a></li>
            <li><a href="index-4.html"><strong><em data-hover="Contacts">Contacts</em></strong></a></li>
        </ul>
    </nav>
</header>
<div class="content indent">
    <!--content-->
    <div class="container">
        <h2>Search result:</h2>
        <div id="search-results"></div>
    </div>
</div>
<!--footer-->
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <p class="title">Products</p>
                    <ul class="list1">
                        <li><a href="#">Products 1</a></li>
                        <li><a href="#">Products 2</a></li>
                        <li><a href="#">Products 3</a></li>
                        <li><a href="#">Products 4</a></li>
                        <li><a href="#">Products 5</a></li>
                        <li><a href="#">Products 6</a></li>
                    </ul>
                    <p class="title">Solutions</p>
                    <ul class="list1">
                        <li><a href="#">Solutions 1</a></li>
                        <li><a href="#">Solutions 2</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 align-box">
                    <p class="title">Technology</p>
                    <ul class="list1">
                        <li><a href="#">Technology 1</a></li>
                        <li><a href="#">Technology 2</a></li>
                    </ul>
                    <p class="title">Information</p>
                    <ul class="list1">
                        <li><a href="#">Information 1</a></li>
                        <li><a href="#">Information 2</a></li>
                        <li><a href="#">Information 3</a></li>
                        <li><a href="#">Information 4</a></li>
                        <li><a href="#">Information 5</a></li>
                        <li><a href="#">Information 6</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <p class="title">Company</p>
                    <ul class="list1">
                        <li><a href="#">Company 1</a></li>
                        <li><a href="#">Company 2</a></li>
                        <li><a href="#">Company 3</a></li>
                        <li><a href="#">Company 4</a></li>
                    </ul>
                    <p class="title">Follow us</p>
                    <ul class="follow_icon">
                        <li><span class="fa fa-google-plus"></span><a href="#">Google +</a></li>
                        <li><span class="fa fa-twitter"></span><a href="#">Twitter</a></li>
                        <li><span class="fa fa-facebook"></span><a href="#">Facebook</a></li>
                        <li><span class="fa fa-linkedin"></span><a href="#">LinkedIn</a></li>
                        <li><span class="fa fa-rss"></span><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 contact-box">
                    <p class="title">Contact</p>
                    <div class="info-box">
                        <p>Telephone:<span>phone number</span></p>
                        <p>FAX:<span>phone number</span></p>
                        <p>E-mail: <a href="mailtio:#">mail@org</a></p>
                    </div>
                    <p class="title">Headquarter</p>
                    <p>Address, address.</p>
                </div>
                <div class="clearfix"></div>
                <div class="copyright">
                    <div class="col-lg-12">
                        <p class="priv"><strong>WALTER. Biz</strong> &copy; <em id="copyright-year"></em> <a href="#">Privacy Policy</a></p>
					<!--<ul class="list2">
                            <li><a href="#">WALTER. Biz 1</a></li>
                            <li><a href="#">WALTER. Biz 2</a></li>
                            <li><a href="#">WALTER. Biz 3</a></li>
                            <li><a href="#">WALTER. Biz 4</a></li>
                            <li><a href="#">WALTER. Biz 5</a></li>
                            <li><a href="#">WALTER. Biz 6</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="js/bootstrap.min.js"></script>
<a style="display: none;" href="#" id="toTop" class="fa fa-arrow-circle-up"></a>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","72d7dcce33","1388850","ZV1TZ0FTVkFVWkwKXlwXZEFaHRI=",0,11,new Date().getTime(),"","","","",""]);</script></body>
</html>