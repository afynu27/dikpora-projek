<!DOCTYPE html>
<html lang="en">
<?php $style = $this->session->userdata('hideOrShow');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .isi{
            background-color:ghostwhite;
            height:400px
        }
        .hideNseek{
            display:<?= $style ?>
        }
    </style>
    <div class="container isi text-primary font-weight-bold d-flex align-items-center justify-content-center" style="font-size:3em">
    <?php
    if($this->session->userdata('username')==''){
        ?>
            <p class="display-info text-center">Selamat Datang di Website DIKPORA DIY</p>
       <?php
    }else{
       $u = $this->session->userdata('username');
       ?>
       <p class="display-info text-center">Selamat Datang di Website DIKPORA DIY <?= $u ?></p>
       <?php
    }
?>
       
    </div>
</body>
</html>

