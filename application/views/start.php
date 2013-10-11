<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
	
		! function (d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0],
		        p = /^http:/.test(d.location) ? 'http' : 'https';
		    if (!d.getElementById(id)) {
		        js = d.createElement(s);
		        js.id = id;
		        js.src = p + '://platform.twitter.com/widgets.js';
		        fjs.parentNode.insertBefore(js, fjs);
		    }
		}(document, 'script', 'twitter-wjs');
		
		$( document ).ready(function() {
			$("form#generate").submit(function( e ) {
			    e.preventDefault();
			    $search_key = $(this).children("input[type=text]").val();
			    $go = "http://77.80.253.77/generate/index/"+$search_key;
			    location.href = $go;
				return false;
			});
		});
		
	</script>

	<meta charset="utf-8">
	<title>DreamHack Winter - Skapa din egna affisch</title>
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #666;
		margin: 30px auto;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		width: 800px;
		
		
		background-image: url(bg.jpg);
		background-color:#f6f6f6;
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:top center; 
		height:100%;
		
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;

		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}



	#body{
		margin: 0 55px 0 15px;

		
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		text-align: center;
		background-color: #999;
		margin: 10px auto 0px 0px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		overflow:auto;
	}
	
	
	#share {

	float: right;
	widht: 400px;
	margin-top: 150px;
		
		}
			
	#shareicons {
		margin-top: 40px;
		float: left;
		width: 300px;
		font-size: 9px;
		}

	#affisch {
		
		margin: 20px;
		float: left;

		
		}
		
		#fb {
		
		margin-left: 50px;
		float: left;

		
		}
		
		#twitter {
		
		margin-right: 50px;
		float: right;

		
		}
		
	</style>
</head>
<body>

<div id="container">
	<h1><?=$input?> kommer, kommer du?</h1>

	<div id="body">
    	<div id="affisch">
		<a href="/generate/image/<?=$input?>"><img height="500px" width="357px" src="/generate/image/<?=$input?>/1.jpg"></a>
        </div>
		<div>

		</div>
        
        <div id="share">
        
        		<form id="generate" action="http://77.80.253.77/generate/index/">
			<input type="text" name="q">
			<input type="submit" value="Go">
		</form>
 
       	 <div id="shareicons">
         	<div id="fb">
       
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://77.80.253.77/generate/index/<?=$input?>" target="_blank">
  <img src="fb35.png">
		</a><br> share on facebook
        </div>

		<div id="twitter">
		<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?=$input?> KOMMER, KOMMER DU? " data-lang="sv" data-size="large" data-count="none" data-hashtags="dhw13">
        
        <img src="twitter35.png">
       
        
        </a> 
        
        <br> share on twitter
        
        </div>
        </div>
         </div>
		</div>
	</div>

</div>

</body>
</html>