
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title><?=isset($title) ? $title : 'KayShop'?> - E-Commerce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/navbar-fixed/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/asset/libs/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/css/app.css">
    <link rel="stylesheet" href="/asset/libs/fontawesom/css/all.min.css">

    <style>
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
<!-- Navbar Content -->
        <?php $this->load->view('layouts/_navbar'); ?>
<!-- End Navbar Content -->
<!-- Content -->
        <?php $this->load->view($page);?>
<!-- End Content -->
     <script src="/asset/libs/jquery-3.6.2.min.js"></script>
      <script src="/asset/libs/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
      <script src="/asset/js/apps.js"></script>
  </body>
</html>
