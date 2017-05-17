<!DOCTYPE html> 
<html lang="ru">
<!-- 
  __ __        __    ______                                           
 _\ \\ \__   /'__`\ /\  ___\                                          
/\__  _  _\ /\_\L\ \\ \ \__/     ___ ___     ___ ___   _ __   _____   
\/_L\ \\ \L_\/_/_\_<_\ \___``\ /' __` __`\ /' __` __`\/\`'__\/\ '__`\ 
  /\_   _  _\ /\ \L\ \\/\ \L\ \/\ \/\ \/\ \/\ \/\ \/\ \ \ \/ \ \ \L\ \
  \/_/\_\\_\/ \ \____/ \ \____/\ \_\ \_\ \_\ \_\ \_\ \_\ \_\  \ \ ,__/
     \/_//_/   \/___/   \/___/  \/_/\/_/\/_/\/_/\/_/\/_/\/_/   \ \ \/ 
                                                                \ \_\ 
                                                                 \/_/                                   
-->
  <head>
    <title>Города</title>
	<meta name="google-site-verification" content="e_u5Ner1ufgE96pmvxpB4cFgK18r6bC8NMNt_L4N-40" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Старинные фотографии городов на сайте 35mmrp.ru!"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="yandex-verification" content="4d98d74cc3edac1c"/>
      <!-- подключил скрипты  -->
<?php include ("scrip.php");  ?>
<?php include_once("analyticstracking.php"); ?>
       <!-- подключил адаптивный дизайн  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon">
      <!-- подключил стильи  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<?php include ("tagmanager.php");  ?> 
        <!-- фиксированная размета  -->
<div class="container">
        <!-- меню фексированное  -->  
<?php include ("menu/header.php");  ?>
          <br><br><br>
<div class="page-header" "reight"><h4><center>На странице представлены старинные фотографии городов, найденные в открытых источниках. Описания деталей при которых сняты фотографиии отсутствуют.</center></h4>
        </div>
            <!-- новости на главной   -->  
<?php include ("news/content_cities.php"); ?>
<!-- нижний блок меню  navbar navbar-fixed-bottom container-->
<?php include ("menu/pager.php"); ?>	
<?php include ("menu/footer.php"); ?>
    </div>
  </body>
</html> 