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
      <h3>FORM UPDATE DATA</h3>
      <label class="col-md-2"><a href="<?= base_url('')?>"><button class="btn btn-primary">Kembali</button></a></label><br><br>
    <div class="container">
    <form method="post" action="<?php echo base_url('c_tugasakhir/update/'.$ta->id)?>">
      <div class="form-group">
        <label for="">Tahun Angkatan</label>
        <select class="form-control" name="th_angkatan">
        <option <?php if ($ta->th_angkatan == '2019') echo 'selected'; ?>>  2019</option>
        <option <?php if ($ta->th_angkatan == '2020') echo 'selected'; ?>>  2020</option>
        <option <?php if ($ta->th_angkatan == '2021') echo 'selected'; ?>>  2021</option>

        </select>
      </div>
      <div class="form-group">
        <label for="">Konsentrasi</label>
        <select type="text" name="konsentrasi" class="form-control">
        <option value="">Pilih Konsentrasi</option>
        <option <?php if ($ta->konsentrasi == 'Web Development') echo 'selected'; ?>>  Web Development</option>
        <option <?php if ($ta->konsentrasi == 'Jaringan Komputer') echo 'selected'; ?>>  Jaringan Komputer</option>
        <option <?php if ($ta->konsentrasi == 'Animasi') echo 'selected'; ?>>  Animasi</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">NIM</label>
        <input type="text" name="nim" class="form-control"  value="<?= $ta->nim?>">
      </div>
      <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" class="form-control"  value="<?= $ta->judul?>">
      </div>
      <div class="form-group">
        <label for="">Pembimbing</label>
        <input type="text" name="pembimbing" class="form-control"  value="<?= $ta->pembimbing?>">
      </div>
      <div class="form-group">
        <label for="">Waktu</label>
        <input type="date" name="waktu" class="form-control"  value="<?= $ta->waktu?>">
      </div>
      <div class="form-group">
        <label for="">Dokumen</label>
        <input type="file" name="dokumen">
        <a href="<?= base_url('uploads/'.$ta->dokumen) ?>"><?= $ta->dokumen ?></a>
      </div>
      <div class="form-group">
   <label>Status</label>
   <select class="form-control" name="status">
<option <?php if ($ta->status == 'Aktif') echo 'selected'; ?>> Aktif</option>
<option <?php if ($ta->status == 'Tidak aktif') echo 'selected'; ?>>Tidak aktif</option>

</select>       		
    </div>
        <button type="submit" class="btn btn-success" data-dismiss="modal">Update</button>
    </form>
    </div>
      


