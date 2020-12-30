<div class="row justify-content-md-center">
<!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('dashboard/save'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="text" class="form-control" name="nama_provinsi" placeholder="Enter Provinsi" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Kabupaten/Kota</label>
                    <input type="text" class="form-control" name="kabupaten_kota" placeholder="Enter Kota/Kabupaten"
                    required>
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="Enter NIK">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
                  </div>

                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Enter Tempat Lahir">
                  </div>

                   <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Enter Tanggal Lahir">
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label>Alamat</label>
                    <input type="textarea" class="form-control" name="alamat" placeholder="Enter Alamat">
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Agama</label>
                    <div class="col-sm-9">
                      <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Status Perkawinan</label>
                    <div class="col-sm-9">
                      <select name="status_perkawinan" class="form-control">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" placeholder="Enter Pekerjaan">
                  </div>



                 <!--  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-outline-info">Cancel</a>
                  <button type="submit" class="btn btn-primary float-right">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
</div>