
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Alissa - Responsive Coming Soon Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

       <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <h2>我地好快就可以再次共聚</h2>
                            <p>時間一秒也很貴</p>
                            <div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
		<div class="well">
    		<h3 id="meHead">
    			天氣
    			<br>
    		</h3>
    		<p id="meContent">
				Loading
    		</p>
			<p>
    			<a class="btn" href="weather.php">詳細一點 »</a>
    		</p>
    	</div>
		<div class="well">
    		<h3 id="meHead">
    			重點新聞
    			<br>
    		</h3>
    		<p id="uknewsContent">
				Loading
    		</p>
			<p>
    			<a class="btn" href="http://cucse.chingkiu.me/~cktai2/jennyuknews/site.php">詳細一點 »</a>
    		</p>
    	</div>
		<div class="well">
    		<h3>
    			每天為你整理準備下面資訊 :
    			<br>
    		</h3>
			<p>
				每天整理超過三百條新聞及Tweets經人手分析後為你提供整理一手報導,保障你安全,提供最合適資訊.
    		</p>
			<h4>即時</h4>
    		<p>
				Twitter - City Police, London Fire Brigade, London Ambulance, BBC London Newsroom, BBC News (UK), BBC Breaking News, Brighton Fire Rescue, Brighton Fire Dept
    		</p>
			<h4>整理報導</h4>
    		<p>
				天氣 - BBC Weather
    		</p>
			<p>
				新聞 - bbcchinese.com英國, BBC NEWS-UK, bbcchinese.com主頁, Google NEWS UK聯盟
    		</p>
			<p>
				
    		</p>
    	</div>


    	<!-- Example row of columns -->

    	<hr>
    </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/jquery.countdown.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
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

</html>

