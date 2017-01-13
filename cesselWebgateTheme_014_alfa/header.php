<?
//header("Cache-Control: max-age=604800, must-revalidate");

?>
<?php

/**
 * The Header template for our theme
 *
 *
 *
 * @package WordPress
 * @subpackage cesselWebgateTheme
 * @since cesselWebgateTheme 0.1.4 alfa
 */
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="ExpiresDefault " content="access plus 10 years" />
<title><?php wp_title(); ?></title>
<link rel="shortcut icon" href="<? echo CES_IMG; ?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-sm.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-md.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-lg.css" />
<script type="text/javascript" src="//yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<? wp_head(); ?>

<script type="text/javascript">
	ymaps.ready(init);
	var myMap, 
		myPlacemark;

		function init()
			{
				var adress = '<? echo $contacts['adress']; ?>';
	            ymaps.geocode(adress).then(function (res)
					{
						var position = res.geoObjects.get(0).geometry.getCoordinates();
    					myMap = new ymaps.Map('map',{center: position,zoom : 14 });
						var myPlacemark = new ymaps.Placemark(position,{hintContent: 'Русская Школа Искусств',balloonContent: 'Русская Школа Искусств - Москва, Ул. Ляпидевского, д. 10а'});
						myMap.geoObjects.add(myPlacemark);  
					}); 
			
			}	
</script>

</head>

<body <?php body_class(); ?>>
<? get_template_part('modals'); ?>

<? /* БЛОК НАСТРОЕК */ ?>

				<? $contacts['tel'] = get_sitedata('tel'); ?>
				<? $logo_src = wp_get_attachment_image_url(get_theme_mod( 'custom_logo'),'full'); ?>

