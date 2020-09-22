<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/images/title.png'?>" />
    <title>Invoice Shangri-La's</title>
</head>

<body>
    <div class="container">
        <header class="head my-3">

            <nav class="navbar navbar-expand-lg navbar-light head__custom-nav" style="border-bottom: 1px solid #e6f0fa">
                <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url().'page' ?>">
                    <img src="<?php echo base_url().'assets/images/title.png'?>">
                    <span>Shangri-La's</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span><img src="<?php echo base_url().'assets/images/menu.png'?>" alt=""></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->uri->segment(2) == '' ? 'text-primary' : '' ?>" href="<?php echo base_url().'page' ?>">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->uri->segment(2) == 'data' ? 'text-primary' : '' ?>" href="<?php echo base_url().'page/data' ?>">Data</a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
