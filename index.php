<?php

include('config.php');
include "client/config.php";
date_default_timezone_set('Asia/Jakarta');
$login_button = '';

if(isset($_GET["code"])){
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error'])){
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();
  if(!empty($data['given_name'])){
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name'])){
    $_SESSION['user_last_name'] = $data['family_name'];
   }

   if(!empty($data['name'])){
    $_SESSION['name'] = $data['name'];
   }

  if(!empty($data['email'])){
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender'])){
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture'])){
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(!isset($_SESSION['access_token'])){
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="https://i.imgur.com/2dywpzc.png" /></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login </title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Mitra Statistik Login</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == ''){
        $query = "insert into logs values(null,'".$_SESSION['name']."','".$_SESSION['user_email_address']."','".date("Y-m-d H:i:s")."','login','')";
        if($mysqli->query($query)){
          echo "<script>window.location.replace('client/');</script>";
        }else{
          echo $query;
        }
    }else{
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>