<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        echo "<script>window.location.replace('../');</script>";
    }
?>
<html lang="en" class="metro-no-touch-device">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://metroui.org.ua/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://metroui.org.ua/favicon.ico" type="image/x-icon">
    <link href="build/css/metro-all.css" rel="stylesheet">
    <link href="build/css/asset/site.css" rel="stylesheet">
    <title>landing page aplikasi mitra statistik</title>
    <style>
    	a {
		      text-decoration:none;
		   }
        h4 {
            white-space: nowrap;
        }

        @media all and (min-width: 768px) {
            .hero {
                padding: 160px 80px 120px;
            }

            .neb-white {
                height: auto;
            }

        }

        [class*=cell-md-3] {
            display: flex;
            flex-flow: column;
            justify-content: flex-start;
        }

        [class*=cell-md-3] div:last-child {
            display: flex;
            justify-content: space-between;
            margin-top: auto!important;
        }
    </style>
<body class="" style="opacity: 1;">
<div class="container-fluid pos-fixed fixed-top z-top bg-hero" id="header">
    <header class="app-bar container bg-transparent fg-white pos-relative app-bar-expand" data-role="appbar" data-expand-point="md" data-role-appbar="true"> 		
        <ul class="app-bar-menu ml-auto text-upper collapsed" style="">            
        </ul>
    </header>
</div>

<div class="container-fluid">
    <div class="container" align="center">
    <h2>Aplikasi Rekruitment Mitra Statistik</h2>
    <h3>Selamat datang <?=$_SESSION['name']?></h2>
        
    </div>
</div>

<div class="container-fluid">
    <div class="container mt-4 mb-4">

        <div class="row mt-10">
            <div class="cell-md-2"></div>
            <div class="cell-md-4">
            	<a href="admin.php" style="text-decoration:none;" target="_blank">
	                <h4 class="text-light text-center">Halaman Admin</h4>
	                <div class="img-container img-thumbnail">
	                    <img width="200px" height="200px" src="build/images/admin.png">
	                    <div class="image-overlay d-flex flex-align-center">
	                        <p class="h5 text-light text-center">Admin</p>
	                    </div>
	                </div>
            	</a>
            </div>  
            <div class="cell-md-4">
            	<a href="form_registrasi.php" style="text-decoration:none;" target="_blank">
	                <h4 class="text-light text-center" >Form Registrasi</h4>
	                <div class="img-container img-thumbnail">
	                    <img width="200px" height="200px" src="build/images/form.png">
	                    <div class="image-overlay d-flex flex-align-center">
	                        <p class="h5 text-light text-center">Form Registrasi</p>
	                    </div>
	                </div>
                </a>
            </div>
            <div class="cell-md-2"></div>
        </div>
        
    </div>
</div>