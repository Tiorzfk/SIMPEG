<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v1.8/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jan 2015 22:40:58 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMPEG | Login</title>

    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/admin/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">

</head>

<body class="gray-bg">
 <?php if($this->session->flashdata('result_login')) { ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
             <a class="alert-link" href="#">Terjadi Kesalahan! <br></a><?php echo $this->session->flashdata('result_login'); ?>.
     </div>
 <?php } ?>
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
            <h1 class="logo-name">APP</h1>
            </div>
            <h3>Selamat Datang di Sistem Informasi Kepegawaian (SIMPEG) PNS Kabupaten Padalarang</h3>
            <p>Login in. To see it in action.</p>
<?php
$attributes = array('role' => 'form', 'id' => 'form');
echo form_open('login/cek_login', $attributes);
?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/admin/js/jquery-2.1.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/validate/jquery.validate.min.js'); ?>"></script>

     <script>
         $(document).ready(function(){

             $("#form").validate({
                 rules: {
                     password: {
                         required: true,
                         minlength: 3
                     },
                     url: {
                         required: true,
                         url: true
                     },
                     number: {
                         required: true,
                         number: true
                     },
                     min: {
                         required: true,
                         minlength: 6
                     },
                     max: {
                         required: true,
                         maxlength: 4
                     }
                 }
             });
        });
    </script>


</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v1.8/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jan 2015 22:40:58 GMT -->
</html>
