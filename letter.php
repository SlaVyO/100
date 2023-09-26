<?php
//var $template; 
//print_r($_GET);
$link = "<br><br><a href='letter.php";
$permitted_chars = 'АБВГҐДЕЄЖЗИІЇЙКЛМНОПРСТУФХЦЧШЩЬЮЯ';
$out=iconv( mb_detect_encoding($permitted_chars), 'UTF-8', $permitted_chars);
//$template =  $_GET['number'];
	$max = strlen($out);
	$min = 0;
$random_character = $out [mt_rand($min, $max - 1)];

	//$randomNumber = rand ( $min , $max - 1 );
	$template = "<div class = 'randomstart'><a href='letter.php'>".$random_character."</a></div><div class = 'goback'><a href='number.php'>Выход</a></div>";
	//$color = str_pad(sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255)),6,rand(0,9));
	$color = sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255));
//echo '<span style="color:'.$color.'">Random Color</span>';


?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- <link rel="stylesheet" href="css/reset.css"> -->

	<!-- основные скрипты
	<script src="js/scripts.js"></script> -->

	<meta name="description" content="Your description">
  	<meta name="author" content="Author Name">
	<title>Page Title</title>
</head>
	<title>Літери</title>
	<style type="text/css">
    .start, .randomstart { 
    		text-align: center; 
    		}
    .start  a { 
    		font-size: 350%; 
    		font-family: Arial, Helvetica, sans-serif; 
    		color: #4e998f; 
    		text-decoration: none;
    		}
    
    .randomstart  a { 
    		font-size: 27em; 
    		font-family: Arial, Helvetica, sans-serif; 
    		color: #<?=$color?>; 
    		text-decoration: none;
    		}
    .goback {
    		 position: fixed; /* Фиксированное положение */
    		right: 0; 
    		bottom: 0; /* Левый нижний угол */
    		padding: 40px; /* Поля вокруг текста */
    		
    	}
    	.goback a{
    		text-decoration: none;
    		font-size: 230%;
    	}
  </style>
</head>
<body>
<?=$template?>
</body>
</html>
