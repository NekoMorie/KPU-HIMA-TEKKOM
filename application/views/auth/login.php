<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPU HIMA TEKKO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <form>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Login</p>
            </div>

            <!-- NIM input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Nomor Token</label>
                <input type="NIM" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nomor Token" />
            </div>

            <!-- TANGGAL LAHIR input -->
            <!-- <div class="form-outline mb-3">
                <input type="date" id="form3Example4" class="form-control form-control-lg"
                placeholder="" />
                <label class="form-label" for="form3Example4">Tanggal Lahir</label>
            </div> -->

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" class="btn btn-primary btn-lg"
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