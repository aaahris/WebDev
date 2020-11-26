<?php

/***** site titles****/

 $index_title = "The Foodies";
 $admin_title = "Admin panel";

/******meta php******/

 $meta = "includes/meta.php";

/******style sheet*****/

$css['rel'] =   "stylesheet";
$css['type'] =  "text/css";
$css['href'] =  "./graphics/style.css";

 /*******header*******/

 $url_header = "includes/header.php";
 $header['heading'] =  "The";
 $header['span'] = "Foodies";
 $header['class']['span'] = "foodies_logo";

/*****footer******/

  $url_footer = "includes/footer.php";
  $footer['para1'] = " Copyrights Claimed, All rights reserved.  ";
  $footer['para2']  = "Read more about our deverlopers ";
  $footer['riui'] = "https://www.riphah.edu.pk/";
  $footer['about']  = "./subpages/about.php";


/*-------------------------------------------database connection-----*/

 $dbhost="localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);



/*************************************index page ******************************/

/*********** index tags**********/


$index['body']['title'] = "index_body";
$index['div']['main'] = "main";
$index['div']['special']  = "specials";
$index['div']['spec'] = "spec";
$index['div']['deal'] = 'deal';

/************special part****************/

 $index['special']['label']  = "Specials";

/****spec 1****/

 $index['spec1']['hamburger']['label']  = "The king mac";
 $index['spec1']['img']  = "./graphics/burger.webp";
 $index['spec1']['para'] =  "Try our best burgers in town";
 $index['spec1']['atag'] = "Order here";
 $index['spec']['alink'] =  "./subpages/order.php";

 /****spec 2****/

  $index['spec2']['nuggets']['label']  = "Chick n'Nuggets";
  $index['spec2']['img']  = "./graphics/nuggets.webp";
  $index['spec2']['para'] =  "Best in town Chicken & Nuggets.";
  $index['spec2']['atag'] = "Order here";
  $index['spec']['alink'] =  "./subpages/order.php";

  /****spec 3****/

  $index['spec3']['pizza']['label']  = "E che pizza!";
  $index['spec3']['img']  = "./graphics/pizza.webp";
  $index['spec3']['para'] =  "We'll serve it hot. Get the best pizza in town. ";
  $index['spec3']['atag'] = "Order here";
  $index['spec']['alink'] =  "./subpages/order.php";


   /****spec 4****/

  $index['spec4']['shuarma']['label']  = "The Karma Shuarma";
  $index['spec4']['img']  = "./graphics/shuarma.webp";
  $index['spec4']['para'] =  "Finger lickin' good.The best shuwarma. ";
  $index['spec4']['atag'] = "Order here";
  $index['spec']['alink'] =  "./subpages/order.php";


/*-----------------------------------special ends--------------*/

    /********deal part******/

   $index['deals']['div'] = "deals";
   $index['deals']['label'] = "Deals";
   $index['deal']['label']  = "deal";

   /****deal 1****/

   $index['deal1']['label'] = "Deal 1";
   $index['deal1']['img'] = "./graphics/deal1.webp";
   $index['deal1']['atag'] =  "./subpages/order.php";


   /****deal 2****/

   $index['deal2']['label'] = "Deal 2";
   $index['deal2']['img'] = "./graphics/deal2.webp";
   $index['deal2']['atag'] =  "./subpages/order.php";

   /****deal 3****/

   $index['deal3']['label'] = "Deal 3";
   $index['deal3']['img'] = "./graphics/deal3.webp";
   $index['deal3']['atag'] =  "./subpages/order.php";

   /****deal 4****/

   $index['deal4']['label'] = "Deal 4";
   $index['deal4']['img'] = "./graphics/deal4.webp";
   $index['deal4']['atag'] =  "./subpages/order.php";

   /*********subscribe form*********/

   $index['subscribe_form']['action'] = "./includes/sql_subscribe.php";
   $index['subscribe_form']['method'] = "POST";
   $index['subscribe_form']['para'] = "Get updates on all special menu items and deals. Subscribe here";
   $index['input']['type']  = "email";
   $index['input']['name']  = "email";
   $index['input']['placeholder']  = "Your email address.";
   $index['button']['type'] = "submit";
   $index['button']['name'] = "button";
   $index['button']['indicator']  = "Subscribe";


/*---------------------------deal ends-----------------*/
/*----------------------------------index page ends--------------------*/

/**********************************************admin page starts******************************/


  /********form******/

  $admin['body']['id']  = "admin_body";
  $admin['div']['id']  = "admin";
  $admin['form']['class']  = "admin_form";
  $admin['form']['action']  = "../includes/sql_admin.php";
  $admin['form']['method']  = "POST";
  $admin['img']['class']  = "user_img";
  $admin['form']['img']  = "../graphics/admin.png";
  $admin['body']['img'] = "../graphics/admin.jpg";
  $admin['form']['label']['UID'] = "UID";
  $admin['input']['type']['UID'] = "text";
  $admin['input']['name']['UID'] = "username";
  $admin['input']['maxlength']['UID'] = "10";
  $admin['form']['label']['pass'] = "Password";
  $admin['type']['type']['pass'] = "password";
  $admin['name']['name']['pass'] = "password";
  $admin['input']['maxlength']['pass'] = "10";
  $admin['button']['type']  = "submit";
  $admin['button']['name']  = "button";
  $admin['form']['label']['button'] = "Login";
  $admin['div']['id'] = "admin_no_MFA";
  $admin['MFA']['alink']  = "../index.php";
  $admin['MFA']['atag'] = 'Return';
  $admin['MFA']['para'] = "You have been given a PC <br>Use that! ";

/**********************************************admin page ends******************************/

/**********************************************error page starts******************************/
  $error['div']['id'] = "error_display";
  $error['heading'] = "ERROR";
  $error['span']  = "Invalid Credentials";
  $error['anchortag'] = "admin.php";


/**********************************************error page ends******************************/


/**********************************************sql subscribe starts here******************************/

  $sql_subscribe['div'] = "sql_subscribe";


/**********************************************sql subscribe ends here******************************/







 ?>
