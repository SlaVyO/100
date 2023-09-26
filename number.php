<?php
//var $template; 
//print_r($_GET);
$link = "<br><br><a href='number.php?number=";
if (isset($_GET['number']) && (in_array($_GET['number'], array(10,20,100,300,500,700,1000,10000)))){
//$template =  $_GET['number'];
	$max = ( int ) $_GET['number'];
	$min = 0;
	if (isset($_GET['from'])){
		if  (in_array($_GET['from'], array(10,20,30,40,50,60,70,80,90))){
			$min = ( int ) $_GET['from'];
			$max = 9 + ( int ) $_GET['from'];
		}
		else if  (in_array($_GET['from'], array(100,500,1000))){
			$min = ( int ) $_GET['from'];
		}
	}
	//else $min = 0;
	

	$randomNumber = rand ( $min , $max - 1 );
	$template = "<div class = 'randomstart'><a href='number.php?number=".$max."&from=".$min."'>".$randomNumber."</a></div><div class = 'goback'><a href='number.php'>Выход</a></div>";
	//$color = str_pad(sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255)),6,rand(0,9));
	$color = sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255));
//echo '<span style="color:'.$color.'">Random Color</span>';

} else {
	$template = "<div class = 'start'>".$link."10'>Цифры до 10</a>".$link."20'>Цифры до 20</a>".$link."100'>Цифры до 100</a>".$link."300'>Цифры до 300</a>".$link."700'>Цифры до 700</a>".$link."1000'>Цифры до 1000</a>".$link."500&from=100'>Цифры от 100 до 500</a>".$link."1000&from=100'>Цифры от 100 до 1000</a>".$link."10000&from=1000'>Цифры от 1000 до 10000</a></div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Счет</title>
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