<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        echo "<script>window.location.replace('../');</script>";
    }
    $aa = file_get_contents("http://ec2-3-140-55-141.us-east-2.compute.amazonaws.com/index.php/pendidikan?tipe=list");
    $prop = json_decode($aa,true)['data'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?=$_SESSION['user_image']?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?=$_SESSION['user_first_name']." ".$_SESSION['user_last_name']?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=$_SESSION['user_image']?>" alt=""><?=$_SESSION['user_first_name']." ".$_SESSION['user_last_name']?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Formulir Rekruitment</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <form class="" action="" method="post" novalidate>                      
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">NIK / No KTP<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    name="nik"
                                                    required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    data-validate-words="2" name="nama" value="<?=$_SESSION['name']?>"
                                                    required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    data-validate-words="2" name="tmpt_lhr"
                                                    required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="tgl_lhr"
                                                    required='required'></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="jk" required="required" />
                                            </div>
                                        </div>   
                                        
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" >                                                
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" class="flat" checked name="iCheck"> Laki-laki
                                                        </label>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" class="flat" name="iCheck"> Perempuan
                                                        </label>
                                                    </div>                            
												</div>
											</div>
										</div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat Domisili<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    data-validate-words="2" name="alamat_domisili"
                                                    required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    data-validate-words="2" name="pekerjaan"
                                                    required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">No HP <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="number"
                                                    data-validate-minmax="10,100" required='required'></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Occupation<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="occupation"
                                                    data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email'
                                                    required="required" type="email" value="<?=$_SESSION['user_email_address']?>"/></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pendidikan<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="ijazah">
                                                <option selected disabled>- pilih Pendidikan -</option>
                                                    <?php                                                        
                                                        for($i=0;$i<count($prop);$i++){
                                                            echo "<option value='".$prop[$i]['id_pendidikan']."'>".$prop[$i]['nama_pendidikan']."</option>";
                                                        }
                                                    ?>
												</select>
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pengalaman Kegiatan BPS<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="pengalaman1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bertugas Sebagai <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="sebagai1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pengalaman Kegiatan BPS<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="pengalaman2"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bertugas Sebagai <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="sebagai2" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pengalaman Kegiatan BPS<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="pengalaman3" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bertugas Sebagai <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="sebagai3" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pengalaman Kegiatan BPS<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="pengalaman4" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bertugas Sebagai <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="sebagai4" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pengalaman Kegiatan BPS<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="pengalaman5"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bertugas Sebagai <span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="sebagai5" />
                                            </div>
                                        </div>

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="vendors/validator/multifield.js"></script>
    <script src="vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            }
            else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function (e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function (e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function () {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url : 'http://ec2-3-140-55-141.us-east-2.compute.amazonaws.com/index.php/wilayah?tipe=list',
                type : 'get',
                dataType : 'json',
                success : function(result){
                    console.log(result);
                }
            });
        });
    </script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    
</body>

</html>