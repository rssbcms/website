<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="RSSB" name="description">
	<title>RSSB</title>
	<link href="/rssb.png" rel="apple-touch-icon">
	<link href="rssb.ico" rel="icon">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js">
	</script><!--https://cdnjs.com/libraries#-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
	</script><!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!--script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js">
	</script>
	<script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js">
	</script-->

<!--script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-80981110-1', 'auto');
  ga('send', 'pageview');
</script-->

<style>
@font-face {
	font-family:"HelveticaNeueLT Std Blk Cn";
	font-style:normal;
	font-weight:900;
	font-stretch:condensed;
	src : url("font/HelveticaNeueLTStd-BlkCn.otf");
}
@font-face {
	font-family:"Minion Pro";
	font-style:normal;
	font-weight:bold;
	src : url("font/MinionPro-Bold.otf");
}
@font-face {
	font-family:"Minion Pro";
	font-style:italic;
	font-weight:normal;
	src : url("font/MinionPro-It.otf");
}
@font-face {
	font-family:"Minion Pro";
	font-style:oblique;
	font-weight:normal;
	src : url("font/MinionPro-It.otf");
}
@font-face {
	font-family:"Minion Pro";
	font-style:normal;
	font-weight:normal;
	src : url("font/MinionPro-Regular.otf");
}
.quote, blockquote {
border-left: 4px solid #ccc;
color: #a5a4a4;
margin: 30px 0 30px 0px;
padding-left: 15px;
} /*margin: 1em 3em
border-left: 2px solid #999;
color: #999;
padding-left: 1em;
*/
img {margin-bottom:5pt;
    pointer-events: none;
} /*stops image download*/
    body {
    	font-family: "Minion Pro", serif;
    	font-size: 14pt;
    	line-height: 140%;
    	background-color: #fbf9cd;
    }
    .card-header, .list-group-item, .navbar-nav>li>.dropdown-menu {
    	background-color: cornsilk
    }
    .sans a, .sans p {
    	font-family: Sans-Serif;
    	font-size: 13pt;
    	color: black
    }
    .sans a:hover {
    	color: blue
    }
    .img-thumbnail {
    	font-size: 12pt;
    	line-height: 120%;
    }
.btn {font-family: Sans-Serif; }
    h1, h2, h3, h4 {
    	color: #686868; font-family: "HelveticaNeueLT Std Blk Cn", Sans-Serif;
    }/*, font-style:normal; font-weight:900;*/
    .card, .list-group-item, audio, video, img, .img-thumbnail, .alert, .modal, button, select, textarea, input, .box {
    	-webkit-box-shadow: 0 10px 6px -6px #777;
    	-moz-box-shadow: 0 10px 6px -6px #777;
    	box-shadow: 0 10px 6px -6px #777;
    }
    .noshadow, input[type="checkbox"], input[type="radio"] {
    	-webkit-box-shadow: 0 0px 0px 0px #777;
    	-moz-box-shadow: 0 0px 0px 0px #777;
    	box-shadow: 0 0px 0px 0px #777;
    }
    .container {
    	background-color: floralwhite;
    	max-width: 750px;
    	/*old=728*/
    	padding: 10;
    	box-shadow: 0 0 20px #484545;
    }
    .navbar, .breadcrumb {
    	white-space: nowrap;
    	font-family: sans-serif;
    	font-size: 11pt;
    }
    .navbar-table {
    	display: block;
    }
    .dropdown-menu>a:hover, .dropdown-menu>li>a:focus {
    	background-color: white;
    }

    /*.navbar-toggler {outline: none !important;}*/

    .navbar-dark .navbar-nav .nav-link {
    	color: rgba(255, 255, 255, 1);
    }
    .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover .navbar-toggler {
    	color: rgba(255, 255, 255, .75);
    }
    .cols {
    	columns: 250px 3;
    	-webkit-columns: 250px 3;
    	-moz-columns: 250px 3;
    	-webkit-column-rule: 1px solid darkred;
    	-moz-column-rule: 1px solid darkred;
    	column-rule: 1px solid darkred;
    }
    .cols2 {
    	columns: 350px 2;
    	-webkit-columns: 350px 2;
    	-moz-columns: 350px 2;
    }
    .p50 {
    	max-width: 50%;
    }
    .p33 {
    	max-width: 33%;
    }
    .p25 {
    	max-width: 25%;
    }
    .p20 {
    	max-width: 20%;
    }
    @media screen and (max-width: 430px) {
    	.p50, .p33, .p25, .p20 {
    		width: 320px; max-width: 100%; 
    		margin-bottom:10px;
    	}
    }
    .float-left {
    	margin-right: 10px
    }
    .float-right {
    	margin-left: 10px
    }
    @media screen and (max-height: 430px) {
    	.fixed-top {
    		position: relative;
    		top: 0;
    		right: 0;
    		left: 0
    	}
    }
    .pagetop {
    	height: 80px;
    }
    @media screen and (max-width: 500px) {
    	.pagetop {
    		height: 40px;
    	}
    }
    .navbar-toggler {
    	align-self: flex-end;
    }
    </style>
<!--script>
// closes hamburger on any click
$(document).ready(function() { 
$("body").click(function(event) {
        // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called 
         if ($(".navbar-collapse").is(":visible") && $(".navbar-toggler").is(":visible") ) {
            $('.navbar-collapse').collapse('toggle');
        }
  });

});
</script-->
</head>
<body >
<nav class="navbar navbar-expand-md navbar-dark fixed-top container navbar-table" id="topNav" style="background-color: darkred;">
  <picture class="noshadow"><source srcset="rssbanner.svg" type="image/svg+xml"> <img alt="Image description" class="noshadow" src="rssbanner.png" width="100%"></picture><br>
  <!--makes svg invisible:span class="navbar-brand"--><!--makes svg invisible:a href="index.php" class="navbar-brand"-->
  <!--img class="noshadow" width=100% src="rssbanner.svg" --><!--/span-->
  <!-- onerror="this.src=rssbanner.png; this.onerror=null;"  class="noshadow img-fluid" id="rslogo" rssbanner.svg  /rssbtrans.png style="margin-left: auto; margin-right: auto; display: block;" rssbcrop.jpg--><!--/a-->
  <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler noshadow navbar-toggler-right" data-target="#nav-content" data-toggle="collapse" style="border: none; color: white; margin-left:-10px" type="button">&#8801 <small><small><small>MENU</small></small></small></button><!--&#9776;-->
  <!--span class="navbar-brand">&nbsp;</span-->
   <!-- Links -->
  <div class="row">
    <!-- container-fluid-->
    <div class="collapse navbar-collapse navbar-toggle col" id="nav-content">
      <ul class="navbar-nav">
        <!--float-right text-right pr-3 float-xs-right mr-auto mt-2 mt-md-0 col-12-->
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuH" data-toggle="dropdown" href="index.php" id="Preview" role="button">Home</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="index.php">Home</a> <a class="dropdown-item" href="overview.php">Overview</a> <a class="dropdown-item" href="dera_picture_album.php">Dera Picture Album</a> <a class="dropdown-item" href="faqs.php">FAQs</a> <a class="dropdown-item" href="articles.php">Newspaper Articles</a> <a class="dropdown-item" href="contact.php">Contact</a> <a class="dropdown-item" href="http://spanish.rssb.org/">En Español</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuS" data-toggle="dropdown" href="#" id="Preview" role="button">Satsang</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="satsang_information.php">Satsang Information</a> <a class="dropdown-item" href="satsang_schedules.php">Satsang Schedules</a> <!--a class="dropdown-item" href="http://satsanginfo.rssb.org">Satsang Venues</a-->
             <!--a class="dropdown-item" href="internationalcentres.php">International Centres</a-->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuM" data-toggle="dropdown" href="#" id="Preview" role="button">Medical &amp; Relief Efforts</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="awareness_programs.php">Awareness Programs</a> <a class="dropdown-item" href="hospitals.php">Hospitals</a> <a class="dropdown-item" href="medical_camps.php">Medical Camps</a> <a class="dropdown-item" href="disaster_relief.php">Disaster Relief</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuP" data-toggle="dropdown" href="#" id="Preview" role="button">Publications</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="http://www.scienceofthesoul.org/">Online Book Store</a> <a class="dropdown-item" href="ebooks.php">eBooks</a> <a class="dropdown-item" href="sprituallink.php">Spiritual Link</a> <a class="dropdown-item" href="satsangs_essays.php">Satsangs &amp; Essays</a> <a class="dropdown-item" href="initiation.php">Initiation - Are we Ready?</a> <a class="dropdown-item" href="seekers.php">Seekers' Guide</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuA" data-toggle="dropdown" href="#" id="Preview" role="button">Audio/Video/Photos</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="QandA.php">Questions &amp; Answers - Audio</a> <a class="dropdown-item" href="discourses_audios.php">Discourses - Audio</a> <a class="dropdown-item" href="shabads.php">Shabads - Audio</a> <a class="dropdown-item" href="discourses_videos.php">Discourses - Video</a> <a class="dropdown-item" href="dera_documentary_videos.php">Dera Documentary - Video</a> <a class="dropdown-item" href="photographs.php">Photographs</a> <!--a class="dropdown-item" href="awareness_programs.php">Health Awareness Videos</a>
                            <a class="dropdown-item" href="medical_camps.php">Eye Camp Video</a-->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle menuE" data-toggle="dropdown" href="#" id="Preview" role="button">Education</a>
          <div aria-labelledby="Preview" class="dropdown-menu">
            <a class="dropdown-item" href="pathseekers.php">Pathseekers School</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-5">
  <main class="bd-content" role="main">
    <div class="pagetop"></div>
<!-- END HEADER -->
