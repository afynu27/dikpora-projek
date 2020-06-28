<!doctype html>
<?php $style = $this->session->userdata('hideOrShow');?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <style>
        html,body{
            padding:0;
            margin:0;
        }
        body{
            width:100%;
            height:100%;
        }
        .header{
            width:100%;
            height:100px;
            background-color:black;
            font-weight:bold;
            display:flex;
            color:white
            align-items:center;
            justify-content: space-around;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
           
        }
        .header nav{
            display: flex;
            justify-content: space-around;
            width:100%;
            
        }
        .header nav ul{
            display:flex;
            list-style:none;
            align-items:center;
            justify-content: space-around;
            width:100%;
            
        }
        .header nav ul li a{
            text-decoration:none;
            color:white;
            align-items:center;
            justify-content: space-between;
        }
        .isi{
            margin-top:50px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            border-radius:20px;
            background-color:white;
        }
        .hideNseek{
            display:<?= $style ?>
        }
        .crop {width:100px;overflow:hidden;height:50px;line-height:50px;}​
    </style>
     <?php 
    $user = $this->session->userdata('username');
    if($this->session->userdata('login')){
        ?>
       <style>
        .hide{
            display:none;
        }
       </style>
       <?php
    }else{
        
    }
?>
    <div class="header">
        <div class="logo d-flex align-items-center">
            <img src="<?= base_url('images/dikpora-trans.png');?>" style="width:100%;">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="<?= base_url()?>index.php/home">Beranda</a>
                    </li>
                    <li>
                        <a href="">Profil</a>
                    </li>
                    <li>
                        <a href="">Weblink</a>
                    </li>
                    <li>
                        <a  href="">Publikasi</a>
                    </li>
                    <li>
                            <div class="dropdown">
                          <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Interaksi
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="hide dropdown-item text-info" href="<?= base_url()?>index.php/Login/login">Login</a>
                            <a class="hide dropdown-item text-info" href="<?= base_url()?>index.php/Login/registrasi">Sign Up</a>
                            <a class="dropdown-item text-info" href="<?= base_url()?>index.php/Buku_tamu">Buku Tamu</a>
                          </div>
                        </div>
                    </li>
                    <li>
                        <input class="form-control"type="text" value="" placeholder="cari">
                    </li>
                    <li>
                    <div class="hideNseek dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?= $this->session->userdata('nama'); ?>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                             <a class="dropdown-item text-info" href="<?= base_url()?>index.php/home/logout">Logout</a>
                          </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
   
    

    

   