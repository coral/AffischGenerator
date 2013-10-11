<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Generate extends CI_Controller {

	

	public function index($input = "ALLA")
	{
		$text = substr(mb_strtoupper(rawurldecode($input)),0,25);
		$data['input'] = $text;
		$this->load->view('start', $data);
	}
	
	public function image($input = "ALLA", $thumb = false)
	{

		$max_font_size = 65;
		$imageWidth = 731;
		$imageHeight = 1024;
		
		$text = $this->_wordfilter(substr(strtoupper(rawurldecode($input)),0,25));
		header( "Content-Type: image/jpeg" );
		header('Content-Disposition: inline; filename="affisch.jpeg";');
		
		$im = new Imagick();
		$draw = new ImagickDraw();
		
		$im->readImage('/var/www/generator/internal_assets/dhw132.png');
		
		$draw->setFillColor('#f4f8fc');
		$draw->setFont("/var/www/generator/internal_assets/estile.ttf");
		$draw->setFontSize( $max_font_size );
		$draw->setGravity(\Imagick::GRAVITY_CENTER);
		$draw->setStrokeColor('#000000');
		$draw->setStrokeAlpha('0.1');
		$draw->setStrokeWidth(8);
		$draw->setStrokeAntialias(true);
		$draw->setTextAntialias(true);
		
		$textWidth = $im->queryFontMetrics($draw, $text)["textWidth"];
		
		for ($i = $max_font_size; $textWidth > (650); $i = $i - 1)
		{ 
			$draw->setFontSize( $i );
			$textWidth = $im->queryFontMetrics($draw, $text)["textWidth"];
		}
		
		$offsetW = -30;
		$offsetH = -200;
		if(strlen($text) > 10) {
			$offsetW = -10;
			
			if(strlen($text) < 15) {
				$offsetH = -205;
			}
			
			if(strlen($text) > 18) {
				$offsetH = -195;
			}
			
		}
		
		$im->annotateImage($draw, $offsetW, $offsetH, -10, $text);
		$draw->setStrokeAlpha('0');
		$draw->setStrokeWidth(0);
		$im->annotateImage($draw, $offsetW, $offsetH, -10, $text);
		
		if($thumb) {
			$im->resizeImage(357, 500, \Imagick::FILTER_CATROM,1);
		}
		$im->setCompression(Imagick::COMPRESSION_JPEG); 
		$im->setCompressionQuality(100); 
		$im->setImageFormat('jpeg'); 
		echo $im;
		
		$draw->clear();
		$draw->destroy();
		$im->clear();
		$im->destroy();
	}
	
	private function _wordfilter($word)
	{
		$filter = array(
			'HITLER' => 'EN TYSK MAN',
			'STALIN' => 'EN RYSK MAN',
			'SD' => 'POLITIK PÅ DH? LOL',
			'SVERIGEDEMOKRATERNA' => 'POLITIK PÅ DH? LOL',
			'CENTERPARTIET' => 'POLITIK PÅ DH? LOL',
			'FOLKPARTIET' => 'POLITIK PÅ DH? LOL',
			'KRISTDEMOKRATERNA' => 'POLITIK PÅ DH? LOL',
			'MILJÖPARTIET' => 'POLITIK PÅ DH? LOL',
			'MODERATERNA' => 'POLITIK PÅ DH? LOL',
			'SOCIALDEMOKRATERNA' => 'POLITIK PÅ DH? LOL',
			'VÄNSTERPARTIET' => 'POLITIK PÅ DH? LOL',
			'NAZISM' => 'OSKÖNA SNUBBAR',
			'NAZISTER' => 'OSKÖNA SNUBBAR',
			'RASISM' => 'OSKÖNA SNUBBAR',
			'RASISTER' => 'OSKÖNA SNUBBAR',
			'LANHOROR' => 'MÄNNISKOR',
			'HOROR' => 'MÄNNISKOR',
			'HORA' => 'MÄNNISKA',
			'LANHORA' => 'MÄNNISKOR',
			'LANHOROR' => 'KVINNOR',
			'GANJA' => 'KONSTGRÄS',
			'STEISJÖ' => 'SUPERSTAR STREAM ADMIN',
			'RASSAR' => 'OSKÖNA SNUBBAR',);
		
		if(isset($filter[$word])) {
			return $filter[$word];
		} else {
			return $word;	
		}
		
	}
}
