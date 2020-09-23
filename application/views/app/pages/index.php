  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/styleland.css'?>">
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
                    </ul>
                </div>
            </nav>
        </header>
    </div>

  <div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-4">
                <h3>Pioneers </h3>
                <h4>of Asian Hospitality</h4>
                <p>Ours is a story driven by an enduring passion for customer service.</p>
                <a href="<?php echo base_url().'home' ?>">Print Invoice</a>
            </div>
            <div class="col-12 col-lg-8">
                <img src="<?php echo base_url().'assets/images/bannerinvoice.png'?>" >
            </div>
        </div>

    </div>

    <script src="<?php echo base_url().'assets/css/jquery-3.4.1.slim.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/css/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/css/bootstrap.min.js'?>"></script>
</body>

</html>