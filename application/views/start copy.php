<!DOCTYPE html>
<html lang="en">
  <head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">
    </script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>
      DreamHack Winter - Skapa din egna affisch
    </title>
    
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div id="container">
      <h1>
        DreamHack Winter 2013
      </h1>
      
      <div id="body">
        
    	<div id="affisch">
          <a href="/generate/image/
<?=$input?>
">
  <img height="500px" width="357px" src="/generate/image/
<?=$input?>
/1.jpg">
          </a>
          
          <h2>
            <?=$input?> KOMMER, KOMMER DU?
          </h2>
        </div>
        
        
        <div id="share">
          
          <h3>
            Skapa din egna DreamHack-affisch
        </h3>
        

        
        
        <form role="form" id="generate" class="form-inline" action="http://77.80.253.77/generate/index/">
          <div class="form-group" id="lul">
            <input type="text" class="form-control input-lg" name="q" placeholder="<?=$input?>">
          </div>
          <button type="submit" class="btn btn-primary btn-lg">SKAPA AFFISCH</button>
        </form>

        
        
        <div id="sharebuttons">
          
          <a href="https://www.facebook.com/sharer/sharer.php?u=http://77.80.253.77/generate/index/<?=$input?>" target="_blank">
  <img src="/facebookr.png">
            </a>
            
            
            <a href="https://twitter.com/intent/tweet?text=<?=$input?> KOMMER, KOMMER DU? http://77.80.253.77/generate/index/<?=$input?>&hashtags=DHW13" class="twitter-share-button" data-text="<?=$input?> KOMMER, KOMMER DU? " data-lang="sv" data-size="large" data-count="none" data-hashtags="dhw13">
  
  <img src="/twitter.png">
  
  
            </a>
            
        </div>
        
        </div>
      </div>
    </div>
    
  </body>
</html>