<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> <?= $title ?> </title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Article-List.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/News-Cards.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/Team-Clean.css">
</head>

<body class="text-center">
    <nav class="navbar navbar-light navbar-expand-md border-secondary navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="<?= base_url('home'); ?>">AutoProject</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('news'); ?>">News</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('home/review'); ?>">Review</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('home/about'); ?>">About Us</a></li>
                </ul><span class="navbar-text actions"> <a class="login"  href="<?= base_url('login'); ?>">Login</a><a class="login">|</a><a class="login" href="register.html">Register</a></span>
            </div>
        </div>
    </nav>