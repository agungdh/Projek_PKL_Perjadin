  <!-- INDEX -->
  <div class="main">
      <div class="main-inner">
          <div class="container">
              <div class="row">
                  <div class="panel panel-primary filterable">
                      <div class="panel-heading">
                          <h3 class="panel-title">Data Rencana Perjadin</h3>
                          <div class="pull-right">
                              <!-- <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button> -->
                              <a href="<?= base_url(); ?>CAdmin/tambah_rencana_perjadin" class="btn btn-info" style="float: right;">+ Tambah Data</a> <br><br>
                          </div>
                      </div>
                      <table class="table" id="table" name="table">
                          <thead>
                              <!-- <tr class="filters">
                                  <th>No</th>
                                  <th><input type="date" class="form-control" placeholder="Tanggal Berangkat" disabled></th>
                                  <th><input type="date" class="form-control" placeholder="Tanggal Selesai" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Output" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Kegiatan" disabled></th>
                                  <th>Action</th>
                              </tr> -->
                              <tr>
                                  <th> No</th>
                                  <th style="width: 13%;"> Tanggal Berangkat</th>
                                  <th style="width: 13%;"> Tanggal Selesai</th>
                                  <th> Kegiatan</th>
                                  <th> Output</th>
                                  <th style="width: 115px;"> Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $no = 1;
                                foreach ($rencana as $r) { ?>
                                  <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo date("l, d M Y", strtotime($r->tanggal_berangkat)); ?></td>
                                      <td><?php echo date("l, d M Y", strtotime($r->tanggal_pulang)); ?></td>
                                      <td><?php echo $r->kegiatan ?></td>
                                      <td><?php echo $r->output ?></td>
                                      <td>
                                          <a href="<?= base_url(); ?>CAdmin/detail_rencana/<?= $r->id_rencana; ?>" class="btn btn-success">
                                              <i class="icon-medium icon-eye-open"></i></a>
                                          <!-- <a href="<?= base_url(); ?>CAdmin/edit_rencana/<?= $r->id_rencana; ?>" class="btn btn-primary">
                                              <i class="icon-medium icon-pencil"></i></a> -->
                                          <a href="<?= base_url(); ?>CAdmin/hapus_rencana/<?= $r->id_rencana; ?>" class="btn btn-danger" onclick="return confirm('Apakah Data ini akan dihapus? ?')">
                                              <i class="icon-medium icon-trash"></i></a>
                                      </td>
                                  </tr>
                              <?php
                                    $no++;
                                }
                                ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <!-- /container -->
      </div>
      <!-- /main-inner -->
  </div>
  <!-- /main -->