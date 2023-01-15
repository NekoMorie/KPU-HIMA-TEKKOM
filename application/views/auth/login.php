<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPU HIMA TEKKO</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="<?= base_url('assets/favicon/');?>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/favicon/');?>favicon-16x16.png" sizes="16x16" />

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>

</head>
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?= base_url("assets/image/logo_text.png");?>"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="<?= base_url('auth')?>">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Login</p>
            </div>

            <!-- NIM input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Nomor Token</label>
                <input type="token" name="token" id="token" class="form-control form-control-lg" placeholder="Nomor Token" />
                <small class="text-danger"><?= form_error('token'); ?></small>
            </div>  

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #386BC0;">Login</button>
            </div>

            </form>
        </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="text-align: center; background-color: #386BC0;">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0" >
            Copyright © KPU HIMA Teknik Komputer 2023. All rights reserved.
        </div>
        <!-- Copyright -->
    </div>
    </section>
</body>
</html>