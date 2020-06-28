
<?php $style = $this->session->userdata('hideOrShow');?>
<style>
    .komentar{
        display:grid;
        grid-template-areas:"tl tl"
                            "out in";
        grid-template-columns:0.7fr 1fr;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        margin:40px;
        border-radius:20px;
        width:75vw;
        height:80%;
    }
    html,body{
        height:100%;
    }
    .container{
        height:100%;
    }
    .title{
        grid-area:tl;
        height:50px;
    }
    .komentar-out{
        grid-area:out;
        padding:20px;
        border-right:3px solid gray;
       
    }
    .komentar-in{
        grid-area:in;
       
        padding:20px;
        
    }
    .gulung{
        overflow-y:scroll;
        height:330px;
    }
    .komentar-out div input{
        margin-left:20px;
        
        
    }
   
</style>
<?php 
    
    if($style=='none'){
        ?>
       <style>
        .komentar-out{
            pointer-events:none;
            display:none;
            border-right:3px solid gray;
        }
        .komentar{
            grid-template-areas:"tl tl"
                            "in in";
        }
       </style>
       <?php
    }
?>
<div class="container">
<div class="komentar">
    <div class="title d-flex justify-content-center font-weight-bold text-white p-2 bg-primary" style="font-size:1.5em; border-radius:20px 20px 0 0">
    Buku Tamu</div>
    <div class="komentar-out">
        <form action="<?= base_url()?>index.php/Buku_tamu/addBuku" method="post">
            <div style="margin-left:-20px" class="mb-2">
            <input type="text" name="judul" placeholder="masukkan Judul" class="form-control col-5">
            <?= form_error('judul',' <small class="text-danger pl-4">', '</small>'); ?>
            </div>
            <div>
            <textarea name="isikomentar" id="" cols="3" rows="5" placeholder="masukkan komentar" class="form-control"></textarea>
            </div>
            <?= form_error('isikomentar',' <small class="text-danger pl-3">', '</small>'); ?>
            <div>
                <strong>
                    Ditujukan Kepada:
                </strong>
            </div>
            <div>
            <input  type="checkbox" name="tujuan[]" value="Umum"><label for="">Umum</label> 
            </div>
            <div>
            <input  type="checkbox" name="tujuan[]" value="Balai Tekkomdik"><label for="">Balai Tekkomdik</label>
            </div>
            <div>
            <input  type="checkbox" name="tujuan[]" value="Guru dan Tenaga Kependidikan"><label for="">Guru dan Tenaga Kependidikan</label>
            </div>
          
            <div class="d-flex justify-content-center mt-4">
                <input class="btn btn-primary col-2" type="submit" value="Kirim">
                    
                
            </div>
        </form>

    </div>
    <style>
        .fill{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            padding:10px;
            border-radius:20px;
            background-color:ghostwhite;
           margin-bottom:10px;
        }
        .fill p{
            margin:0;
        }
    </style>
    <div class="komentar-in p-5">
            <div class="container gulung">
                <?php
                    foreach($data_komentar as $data):?>
                    <div class="fill" style="font-size:0.8em">
                        <p>username : <?= $data->username ?></p>
                        <p>lembaga tujuan : <?= $data->tujuan ?></p>
                        <p>judul : <?= $data->judul ?></p>
                        <p style="font-size:1.2em; background-color:wheat;border-radius:10px; padding:10px"><?= $data->komentar ?></p>
                        
                    </div>
                <?php endforeach ?>
            </div>   
    </div>
</div>
</div>