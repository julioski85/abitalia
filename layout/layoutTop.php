<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Arinde - Architecture and Interiors HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/logos/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/vendor/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/vendor/slick/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="page-wrapper <?php echo (isset($lightMode) && $lightMode) ? 'light-mode' : ''; ?>">

    <?php include './partials/loader.php' ?>

    <?php 
    if (isset($lightMode) && $lightMode) {
        include './partials/header-light.php';
    } else {
        include './partials/header.php';
    }
    ?>
    