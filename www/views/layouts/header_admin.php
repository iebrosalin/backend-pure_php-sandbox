<?php
declare(strict_types=1);

use Components\Helpers\Helpers;

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sandbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/styles/bootstrap.min.css" rel="stylesheet">
    <link href="/styles/styles.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand text-white" <?php echo (isHome())?'':"href='/'" ?> >Sandbox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item
                <?php echo (isHome())?'active':'' ?>">
                    <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item
                <?php echo (partUriMatch('/admin/product'))?'active':'' ?>
                    ">
                    <a class="nav-link" href="/admin/product/">Products</a>
                </li>
                <li class="nav-item
                <?php echo (partUriMatch('/admin/category'))?'active':'' ?>
                ">
                    <a class="nav-link" href="/admin/category/">Category</a>
                </li>
                <li class="nav-item
                <?php echo (partUriMatch('/admin/echo-request'))?'active':'' ?>
                ">
                    <a class="nav-link" href="/admin/echo-request/">Echo-request</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (notHome()) :?>
                <?php echo Helpers::renderBreadcrumb()?>
            <?php endif;?>
