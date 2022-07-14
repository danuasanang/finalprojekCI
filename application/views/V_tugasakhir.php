<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>TUGAS AKHIR</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dokumentasi</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>DASHBOARD</small></h4>
      <h2>TUGAS AKHIR</h2>
      
      <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button>

      <div class="navbar-form navbar-right">
        <?php echo form_open('c_tugasakhir/search')?>
        <input type="text" name="keyword" class="form-control" placeholder="Cari">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close()?>
      </div>

      <table class="table table-bordered">
      
    <thead>
      <tr>
        <th>NO</th>
        <th>Tahun Angkatan</th>
        <th>Konsentrasi</th>
        <th>NIM</th>
        <th>Judul</th>
        <th>Pembimbing</th>
        <th>Waktu</th>
        <th>Dokumen</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    
      <?php 

      $no=1;
      foreach ($c_tugasakhir as $ta):?>
      
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $ta->th_angkatan;?></td>
          <td><?php echo $ta->konsentrasi;?></td>
          <td><?php echo $ta->nim;?></td>
          <td><?php echo $ta->judul;?></td>
          <td><?php echo $ta->pembimbing;?></td>
          <td><?php echo $ta->waktu;?></td>
          <td>
            
            <?php 
            if($ta->dokumen):

            ?>
            <a href="<?= base_url('uploads/'.$ta->dokumen) ?>">Download</a>
            <?php endif;?>
          </td>
          <td><span class="label <?= $ta->status =='Aktif' ? 'label-success' : 'label-warning'?>"><?= $ta->status?></span></td>
          <td><a href="<?php echo site_url('c_tugasakhir/hapus/'.$ta->id) ?>">
          <div class="btn btn-danger">Hapus</div></a><br><br>
          <a href="<?php echo base_url('c_tugasakhir/update/'); ?><?php echo $ta->id; ?>" class="btn btn-primary">Update</a></td>
          
        </tr>
        

      <?php endforeach;?>
    </section>
      </table>
      <div class="box-footer clearfix">
        <ul>
        <?= $link ?>
        </ul>
      </div>
      
    
    
      

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA MAHASISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'c_tugasakhir/tambah_aksi'?>" enctype="multipart/form-data" id="form">
      <div class="form-group">
        <label for="">Tahun Angkatan</label>
        <select type="text" name="th_angkatan" class="form-control" required>
        <option value="">Pilih Angkatan</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Konsentrasi</label>
        <select type="text" name="konsentrasi" class="form-control" required>
        <option value="">Pilih Konsentrasi</option>
        <option value="Web Development">Web Development</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Animasi">Animasi</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">NIM</label>
        <input type="text" name="nim" class="form-control is-invalid" id="nim" placeholder="NIM Anda" required>
        <div class="invalid-feedback"> </div>
      </div>
      <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Anda" required>
      </div>
      <div class="form-group">
        <label for="">Pembimbing</label>
        <input type="text" name="pembimbing" class="form-control" placeholder="Pembimbing Anda" required>
      </div>
      <div class="form-group">
        <label for="">Waktu</label>
        <input type="date" name="waktu" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="">Dokumen</label>
        <input type="file" name="dokumen" class="form-control" required>
        <p>File Harus Berformat PDF!</p>
      </div>
      <div class="form-group">
   <label>Status</label>
	<select type="text" name="status" class="form-control" required>
	   <option value="">Pilih Status</option>
	   <option value="Aktif" class="badge bg-maroon">Aktif</option>
	   <option value="Tidak aktif" class="badge bg-maroon">Tidak Aktif</option>
	</select>	        		
    </div>

        <button type="reset" class="btn btn-secondary"  onclick="document.getElementById('form').reset()">Reset</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>

      </form>
      </div>
    </div>
  </div>
</div>

    </thead>
      </table>

