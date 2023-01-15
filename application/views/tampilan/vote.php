<?php 

?>
<div class="header card text-xl-center text-center fw-bold fw-light" style="text-align: center; background-color: #386BC0;">
        <div class="identitas">
            <h1>IDENTITAS PENGGUNA <br> <?= $peserta['nama']?> - <?= $peserta['nim']?> <br> <?= $peserta['kelas']?> - Teknik Komputer</h1> 
        </div>
        <a href="<?= base_url('logout')?>"><button class=" btn btn-danger"><i class="fa fa-sign-out"></i>Keluar</button></a>
    </div>
    <?php
    if ($statusvote == 0) {
      ?>
      <div class="container text-center">
        <form method="post" action="">
          <section>
            <?php
              foreach ($paslon as $ps) :
            ?>
            <div>
              <input type="radio" id="control_0<?= $ps['no_urut']?>" name="vote" value="<?= $ps['no_urut']?>">
              <label for="control_0<?= $ps['no_urut']?>">
                <div class="card">
                  <div class="row">
                    <div class="col-12">
                        <div class="img"><img src="<?=base_url()?>assets/image/paslon/<?= $ps['foto']?>" alt="" class="avatar avatar-sm rounded-circle me-2"></div>
                    </div>
                    <div class="col-12">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <strong><?= $ps['calon']?></strong> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li class="list-group-item">Visi 
                          <ul class="list-group text-start justify-content-start"><?= $ps['visi']?></ul>
                        </li>
                        <li class="list-group-item">Misi
                          <ul class="list-group text-start"> <?= $ps['misi']?></ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>  
              </label>
            </div>
            <?php endforeach; ?>
            </section>
            <label for="control_03">
              <input class="btn btn-success" type="submit" id="control_05" name="submit" value="VOTE">
            </label>
        </form>
      </div>
      <?php }else{ ?>
        <div class="ty text-center">    
        <h1 class="text-uppercase">Terima kasih telah berpartisipasi dalam pemilihan ketua dan wakil ketua de hima tekkom 2023 pilihan anda telah tersimpan !</h1>
    </div>
      <?php }?>