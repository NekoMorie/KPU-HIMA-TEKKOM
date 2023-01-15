<div class="header card text-xl-center text-center fw-bold fw-light" style="text-align: center; background-color: #386BC0;">
        <div class="identitas">
            <h1 class="text-uppercase">Hasil Perolehan suara <br> ketua & wakil ketua <br> DE Hima tekkom 2023 </h1>
        </div>
    </div>
<div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Hasil Suara Online</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center" style="width: 450px;">Paslon</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center" style="width: 100px;">Total Suara</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2" style="width: 500px;">Persentase</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($paslon as $ps) :
                      ?>
                        <tr>
                          <td class="cardo d-flex p-2">
                              <div class="imga col-12 p-2">
                                <img src="<?=base_url()?>assets/image/paslon/<?= $ps['foto']?>" class="avatar avatar-sm rounded-circle me-2" alt="" width="10%">
                              </div>
                              <div class="my-auto p-2">
                                <h6 class="mb-0 text-sm"><?= $ps['calon']?></h6>
                              </div>
                          </td>
                          <?php
                            $suara = $this->view_model->getSuara($ps['id']);
                            if ($totalsuara <> 0) {
                              $persen = $suara / $totalsuara * 100;
                            } else {
                              $persen = 0;
                            }
                          ?>
                          <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0"><?= $suara?></p>
                          </td>
                          <td class="align-middle text-center">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?= $persen?>" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: <?= $persen?>%; background-color:#386BC0;" ><?= $persen?>%</div>
                            </div>
                          </td>
                        </tr>
                        <?php  endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
          // $gk_Adasuara = $this->view_model->getVote();
        ?>
        <div class="container">
          <div class="row justify-content-md-center">
              <div class="col-4">
                  <div class="card text-bg-secondary mb-3" >
                      <div class="card-header text-uppercase align-middle text-center">Jumlah Peserta</div>
                      <div class="card-body text-center">
                        <h5 class="card-title"><?= $peserta?></h5>
                      </div>
                    </div>
              </div>
              <div class="col-4">
                  <div class="card text-bg-danger mb-3" >
                      <div class="card-header text-uppercase align-middle text-center">Belum memberikan suara</div>
                      <div class="card-body text-center">
                        <h5 class="card-title"><?=$suara?></h5>
                      </div>
                    </div>
              </div>
              <div class="col-4">
                  <div class="card text-bg-success mb-3" >
                      <div class="card-header text-uppercase align-middle text-center">sudah memberikan suara</div>
                      <div class="card-body text-center">
                        <h5 class="card-title"><?= $totalsuara?></h5>
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>