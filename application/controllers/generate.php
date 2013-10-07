<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Generate extends CI_Controller {

	

	public function index()
	{
		echo "nej. helt enkelt nej.";
	}
	
	public function image($input = "ALLA")
	{
		$max_font_size = 140;
		$imageWidth = 731;
		$imageHeight = 1024;
		
		$text = rawurldecode($input);
		header( "Content-Type: image/png" );
		header('Content-Disposition: inline; filename="affisch.png";');
		
		$im = new Imagick();
		$draw = new ImagickDraw();
		$im->readImage('/var/www/dhw132.png');
		
		$draw->setFillColor('white');
		$draw->setFont("/var/www/estile.ttf");
		$draw->setFontSize( $max_font_size );
		
		$textWidth = $im->queryFontMetrics($draw, $input)["textWidth"];
		
		for ($i = $max_font_size; $textWidth > (900);$i = $i - 2)
		{ 
			$draw->setFontSize( $i );
			$textWidth = $im->queryFontMetrics($draw, $input)["textWidth"];
			
		}
		$im->annotateImage($draw, (($imageWidth/2) - ($textWidth/4)), 360, -10, $text);
		echo $im;

	}
}