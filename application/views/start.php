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
	<title>Här är din fula bild!</title>
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
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
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Här är din fula bild!</h1>

	<div id="body">
		<a href="/generate/image/<?=$input?>"><img height="500px" width="357px" src="/generate/image/<?=$input?>/1.jpg"></a>
		<div>
		<form id="generate" action="http://77.80.253.77/generate/index/">
			<input type="text" name="q">
			<input type="submit" value="Go">
		</form>
		</div>
		<p>Dela på FÄZBÖK</p>
		<code><a href="https://www.facebook.com/sharer/sharer.php?u=http://77.80.253.77/generate/index/<?=$input?>" target="_blank">
  Share on Facebook
</a></code>

		<p>Dela på twiter</p>
		<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?=$input?> KOMMER, KOMMER DU? " data-lang="sv" data-size="large" data-count="none" data-hashtags="dhw13">Tweeta</a>

	</div>

</div>

</body>
</html>