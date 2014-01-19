<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <style>
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="navbar-inner">
    		<div class="container-fluid">
    			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="brand" href="index.php">Jenny@UK</a>
    			<div class="nav-collapse collapse">
    				<ul class="nav">
    					<li class="active">
    						<a href="index.php">主頁</a>
    					</li>
    					<li>
    						<a href="weather.php">天氣</a>
    					</li>
    					<li>
    						<a href="uknews.php">英國及倫敦區內新聞</a>
    					</li>
    					<!--<li>
    						<a href="hknews.php">香港新聞</a>
    					</li>-->
    					<li>
    					</li>
    					<li>
    					</li>
    				</ul>
    				<form class="navbar-form pull-right">
    				</form>
    			</div>
    			<!--/.nav-collapse -->
    		</div>
    	</div>
    </div>
    <div class="alert alert-error">
    	<h3>
    		特別報告
    		<br>
    	</h3>
    	<div>
    		暫未有任何特別報告
    		<br>
    	</div>
    </div>
    <div class="container">
    	<!-- Main hero unit for a primary marketing message or call to action
    	-->
    	<div class="well">
    		<h3>
    			英國倫敦時間 :
    			<br>
    		</h3>
    		<p id="uktime">
				Loading
    		</p>
    	</div>
    	<div class="well">
    		<h3>
    			香港時間:
    		</h3>
    		<p id="hktime">
				Loading
    		</p>
    	</div>
    	<!-- Example row of columns -->
    	<div class="row">
    		<div class="span4">
    			<h2 id="meHead">
    				天氣
    				<br>
    			</h2>
    			<p id="meContent">
    				Loading
    			</p>
    			<p>
    			</p>
    			<p>
    				<a class="btn" href="weather.php">詳細一點 »</a>
    			</p>
    		</div>
    		<div class="span4">
    			<h2>
    				英國及倫敦區內最新新聞
    				<br>
    			</h2>
    			<p id="uknewsContent">
    				Loading
    			</p>
    			<p>
    				<a class="btn" href="uknews.php">詳細一點 »</a>
    			</p>
    		</div>
		<!--
    		<div class="span4">
    			<h2>
    				香港新聞
    				<br>
    			</h2>
    			<p>
    				Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas
    				eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus,
    				tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
    				massa justo sit amet risus.
    			</p>
    			<p>
    				<a class="btn" href="#">View details »</a>
    			</p>
    		</div>-->
    	</div>
    	<hr>
    	<footer>
    		<p>
    			© Jenny at UK 2013 Power by Curtis
    			<br>
    		</p>
    	</footer>
    </div>
    <!-- /container -->

    <style>
      
      /* To push content below navbar */
      @media (min-width: 980px) {
        body {
          margin-top: 41px;
        }
      }
      
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <script src="assets/js/bootstrap.js">
    </script>
   
<script type="text/javascript">
init();
var uk;
var hk;
function init(){
   uk = new Date('<?php 
				$datetime = strtotime(date('Y/m/d H:i:s'))-25200;
				$datetime2 = strtotime(date('Y/m/d H:i:s'));
				$datetime = date('Y/m/d h:i:s A', $datetime);
				echo $datetime;
				?>');
   hk = new Date('<?php 
				$datetime2 = date('Y/m/d  h:i:s A', $datetime2);
				echo $datetime2;
				?>');
   clock();
}
function clock() {
   uk.setSeconds(uk.getSeconds() + 1);
   hk.setSeconds(hk.getSeconds() + 1);
   var min = uk.getMinutes();
   var sec = uk.getSeconds();
   var ukhour = uk.getHours();
   var hkhour = hk.getHours();


   if (min<10)
        min  = "0" +uk.getMinutes();
   if (sec<10)
        sec = "0" + uk.getSeconds();
/*
    // Check AM PM
    if (ukhour<=12){
        ukhour = "上午 " ＋ uk.getHours();
    }else{
        ukhour = "下午 " ＋ (uk.getHours()-12);
    }

    if (hkhour<=12){
        hkhour = "上午 " ＋ hk.getHours();
    }else{
        hkhour = "下午 " ＋ (hk.getHours()-12);
    }
*/

   var outStr = uk.getFullYear()+"年   "+(uk.getMonth()+1)+"月  "+uk.getDate()+"日  "+ukhour+':'+min+':'+sec;
   var outStr2 = hk.getFullYear()+"年   "+(hk.getMonth()+1)+"月  "+hk.getDate()+"日  "+hkhour+':'+min+':'+sec;
   document.getElementById('uktime').innerHTML=outStr;
   document.getElementById('hktime').innerHTML=outStr2;
   setTimeout('clock()',1000);

}
  

$(document).ready(function(){
  var yahooURL = "http://query.yahooapis.com/v1/public/yql?q=";
  var temperatureURL = "select%20*%20from%20feed%20where%20url%3D%22http%3A%2F%2Fjennnyuktemp.tumblr.com%2Frss%22";
  var newsURL = "select%20*%20from%20feed%20where%20url%3D%22http%3A%2F%2Fjennyuknews.tumblr.com%2Frss%22&diagnostics=true";


	 $.ajax({
		type:'GET',
		dataType:'xml',
		url:yahooURL+temperatureURL,
		success:function(data){
			$('item',data).each(function(e){
				$('#meHead').text($('title',this).text());
				$('#meContent').html($('description',this).text());
				exit();
			});
		},
		error:function(err) {
			//alert('Error');
		}
	});
	$.ajax({
		type:'GET',
		dataType:'xml',
		url:yahooURL+newsURL,
		success:function(data){
			$('item',data).each(function(e){
				$('#uknewsContent').html($('title',this).text()+"<br/>"+$('description',this).text());
				exit();
			});
		},
		error:function(err) {
			//alert('Error');
		}
	});
	 

	
});

</script>  
  </body>
</html>
