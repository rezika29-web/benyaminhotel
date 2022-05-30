<?php
session_start();
if(!isset($_SESSION['user']))
    header('location:login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Benyamin Hotel ADMINISTRATOR</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
        <!--/script TinyMCE-->
        <script type="text/javascript" src="plugin/tinymce/js/tinymce/tinymce.min.js"></script>
        <!--/script-->
        <!-- DataTables CSS -->
        <link href="assets/plugins/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="assets/plugins/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    </head>
<body>
<?php
include ("header.php");
?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                include("menu.php");
                ?>
                 <!--/.sidebar-->

            </div>
            <!--/.span3-->
            <div class="span9">
                <?php
                include ("main.php");
                ?>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!-- DataTables JavaScript -->
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables-responsive/dataTables.responsive.js"></script>
<!--/.wrapper-->
<div class="footer">
    <div class="container">
        <b class="copyright">&copy; 2019 Benyamin Hotel  </b>All rights reserved.
    </div>
</div>
<script>
    tinymce.init({
        selector: '#berita',
        mode    : 'textareas',
        theme   : 'modern',
        height  : '300',
        plugins : [
            'advlist autolink link image lists charmap print  hr anchor pagebreak spellchecker',
            ' wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ] ,
        content_css: 'css/content.css',
        toolbar : 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print  media fullpage | forecolor | backcolor emoticons'
    });
</script>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>


</body>
