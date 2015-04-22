    <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong>Pengaturan Akun</strong>
         </li>
    </ol>
    </div>
       <div class="col-lg-2">
       </div>
</div>
      <!--Tampil Pesan-->
   <?php if($this->session->flashdata('berhasil')) { ?>
     <div class="alert alert-success alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <a class="alert-link" href="#">Berhasil! <br></a><?php echo $this->session->flashdata('berhasil'); ?>.
     </div>
   <?php } ?>
   <?php if($this->session->flashdata('gagal')) { ?>
     <div class="alert alert-danger alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <a class="alert-link" href="#">Terjadi Kesalahan! <br></a><?php echo $this->session->flashdata('gagal'); ?>.
     </div>
   <?php } ?>
   <?php if($this->session->flashdata('perhatian')) { ?>
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <a class="alert-link" href="#">Perhatian! <br></a><?php echo $this->session->flashdata('perhatian'); ?>.
     </div>
   <?php } ?>
                                  
    <?php
        if($this->session->userdata("tab_a")=="" && $this->session->userdata("tab_b")=="")
        {
            $set['tab_a'] = "active";
            $this->session->set_userdata($set);
        }
        $a = $this->session->userdata("tab_a");
        $b = $this->session->userdata("tab_b");
    ?>
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
    <div class="col-lg-6">
    <div class="ibox float-e-margins">
    <div class="ibox-title"><h5>Pengaturan Akun</h5></div>
    <div class="ibox-content">
                            <div class="well">
                                <ul class="nav nav-tabs">
                                    <li class="<?php echo $a; ?>"><a data-toggle="tab" href="#tab-1" aria-expanded="false">Pengaturan Password</a></li>
                                    <li class="<?php echo $b; ?>"><a data-toggle="tab" href="#tab-2" aria-expanded="true">Pengaturan Pengguna</a></li>
                                </ul>
                            </div>
                       

                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane <?php echo $a; ?>">
                                <?php echo form_open('login/save_pass'); ?>
                                    <div class="form-group">
                                    <label>Username</label> 
                                    <input type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Password Lama</label> 
                                    <input type="text" name="pass_lama" placeholder="Password Lama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Password Baru</label> 
                                    <input type="text" name="pass_baru" placeholder="Password baru" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Ulangi Password Baru</label> 
                                    <input type="text" name="ulangi_pass_baru" placeholder="UlangiPassword baru" class="form-control" required>
                                    </div>
                                    <input type="hidden" value="<?php echo $this->session->userdata('id_login'); ?>" name="id_login" class="form-control">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <?php echo form_close(); ?>
                                </div>

                                <div id="tab-2" class="tab-pane <?php echo $b; ?>">
                                    <?php echo form_open_multipart('login/savename'); ?>
                                    <div class="form-group">
                                    <label>Nama_pengguna</label> 
                                    <input type="text" name="nama" value="<?php echo $this->session->userdata('nama_lengkap'); ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <label>Foto</label> 
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="<?php echo base_url() .'assets/user_image/'. $this->session->userdata('foto'); ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                    </div>
                                    <input type="file" name="foto" id="foto" class='default'>
                                    </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <input type="hidden" value="<?php echo $this->session->userdata('id_login'); ?>" name="id_login" class="form-control">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>

                        </div>

                </div>
                </div>
                </div>
                </div>
                </div>
                <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-fileupload/bootstrap-fileupload.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>