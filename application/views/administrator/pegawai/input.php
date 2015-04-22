    <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong>Input Pegawai</strong>
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
        <div class="wrapper wrapper-content animated pulse">
           <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Input Pegawai</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                Data Pegawai Input Form
                            </h2>
                            <p>
                                Sebelum penambahkan pegawai, lengkapilah data-data di bawah ini.
                            </p>

<?php
$attributes = array('class' => 'wizard-big', 'id' => 'form', 'method' => 'POST');
echo form_open_multipart('administrator/pegawai/simpan', $attributes);
?>
                                <h1>Data Pegawai</h1>
                                <fieldset>
                                   <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>NIP</label> 
                                    <input type="text" name="nip" data-mask="999 999 999 999 999 999" value="<?php echo $nip ?>" placeholder="Nip" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>No Kartu Pegawai</label> 
                                    <input type="text" name="no_kartu" value="<?php echo $no_kartu ?>" placeholder="No Kartu" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Pegawai</label> 
                                    <input type="text" name="nama" value="<?php echo $nama_pegawai ?>" placeholder="Nama Pegawai" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kelamin</label> 
                                    <select class="form-control m-b" name="jenis_kelamin" required>
                    <?php
                    $laki="";$perempuan="";$kosong1="";
                    if($jenis_kelamin=="Laki-Laki"){ $laki='selected="selected"';$perempuan="";$kosong1=""; }
                    else if($jenis_kelamin=="Perempuan"){ $laki='';$perempuan='selected="selected"';$kosong1=""; }
                    else { $laki='';$perempuan='';$kosong1='selected="selected"'; }
                    ?>
                    <option value="" <?php echo $kosong1; ?>></option>
                    <option value="Laki-Laki" <?php echo $laki; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo $perempuan; ?>>Perempuan</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Agama</label> 
                                    <select class="form-control m-b" name="agama" required>
                                    <?php
                    $islam="";$hindu="";$budha="";$protestan="";$katolik="";$konghucu="";$lainnya="";$kosong="";$kristen="";
                    if($agama==""){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong='selected="selected"';$kristen=""; }
                    else if($agama=="Hindu"){ $islam='';$hindu='selected="selected"';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
                    else if($agama=="Budha"){ $islam='';$hindu='';$budha='selected="selected"';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
                    else if($agama=="Kristen"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong="";$kristen='selected="selected"'; }
                    else if($agama=="Kristen Protestan"){ $islam='';$hindu='';$budha='';$protestan='selected="selected"';$katolik='';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
                    else if($agama=="Kristen Katolik"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='selected="selected"';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
                    else if($agama=="Konghucu"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='selected="selected"';$lainnya='';$kristen="";$kosong=""; }
                    else if($agama=="Lainnya"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='selected="selected"';$kristen="";$kosong=""; }
                    else if($agama=="Islam"){ $islam='selected="selected"';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
                    ?>
                    <option value="" <?php echo $kosong; ?>></option>
                    <option value="Islam" <?php echo $islam; ?>>Islam</option>
                    <option value="Hindu" <?php echo $hindu; ?>>Hindu</option>
                    <option value="Budha" <?php echo $budha; ?>>Budha</option>
                    <option value="Kristen" <?php echo $kristen; ?>>Kristen</option>
                    <option value="Kristen Protestan" <?php echo $protestan; ?>>Kristen Protestan</option>
                    <option value="Kristen Katolik" <?php echo $katolik; ?>>Kristen Katolik</option>
                    <option value="Konghucu" <?php echo $konghucu; ?>>Konghucu</option>
                    <option value="Lainnya" <?php echo $lainnya; ?>>Lainnya</option>
                                    </select></div>
                                    <div class="form-group">
                                    <label>Status Pegawai</label> 
                                    <select class="form-control m-b" name="status_pegawai" required>
                                    <option value=""></option>
                                    <?php
                                    foreach($status_pegawai->result_array() as $sp)
                                    {
                                        if($sp['id_status_pegawai']==$status_pegawai)
                                        {
                                    ?>
                                    <option value="<?php echo $sp['id_status_pegawai']; ?>" selected="selected"><?php echo $sp['nama_status']; ?></option>
                                     <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_status_pegawai']; ?>"><?php echo $sp['nama_status']; ?></option>
                                    <?php
                                    }
                                    }
                                    ?>
                                    </select>
                                    </div>
                                     <div class="form-group">
                                    <label>Alamat</label> 
                                    <textarea type="textarea" name="alamat" placeholder="Alamat" class="form-control" required><?php echo $alamat?></textarea>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">

                                    <div class="form-group">
                                    <label>Tempat lahir</label> 
                                    <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ?>" placeholder="Tempat Lahir" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Nomor Npwp</label> 
                                    <input type="text" name="no_npwp" data-mask="999 999" value="<?php echo $no_npwp ?>" placeholder="Nomor NPWP" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Kartu akses pegawai</label> 
                                    <input type="text" name="kartu_akses_pegawai" value="<?php echo $kartu_akses ?>" placeholder="Kartu Akses Pegawai" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Lahir</label> 
                                    <input type="text" name="tgl_lahir" data-mask="99/99/9999" value="<?php echo $tgl_lahir ?>" placeholder="Tanggal Lahir" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Usia</label> 
                                    <input type="text" name="usia" value="<?php echo $usia ?>" placeholder="Usia" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Pengangkatan CPNS</label> 
                                    <input type="text" data-mask="99/99/9999" name="tgl_pengangkatan" value="<?php echo $tgl_pengangkatan ?>" placeholder="tanggal pengangkatan CPNS" class="form-control" required>
                                    </div>
                            
                                    </div>
                                    </div>
                                    </fieldset>
                                <h1>Data Pangkat</h1>
                                <fieldset>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Golongan</label> 
                                    <div class="input-group">
                                    <select class="form-control m-b" name="golongan">
                                    <option value=""></option>
                                    <?php
                                    foreach($golongan->result_array() as $g)
                                    {
                                        if($g['id_golongan']==$id_golongan)
                                        {
                                    ?>
                                    <option value="<?php echo $g['id_golongan']; ?>" selected="selected"><?php echo $g['golongan']; ?></option>
                                     <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $g['id_golongan']; ?>"><?php echo $g['golongan']; ?></option>
                                    <?php
                                    }
                                    }
                                    ?>
                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                </fieldset>

                                <h1>Data Foto</h1>
                                <fieldset>
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                        <label>Foto</label> 
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="" alt="" />
                                                            </div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                                            </div>
                                                            <input type="file" name="foto" id="foto" class='default'>
                                                            </span>
                                                        </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="st" value="<?php echo $st ?>" class="form-control">
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div></div> </div>
                    <?php echo form_close(); ?>
                <script src="<?php echo base_url();?>assets/admin/js/plugins/validate/jquery.validate.min.js"></script>
                <script src="<?php echo base_url();?>assets/admin/js/plugins/staps/jquery.steps.min.js"></script>
                <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-fileupload/bootstrap-fileupload.js'); ?>" type="text/javascript"></script>
                <script src="<?php echo base_url('assets/admin/js/plugins/jquery/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
                <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-fileupload/bootstrap-fileupload.js'); ?>" type="text/javascript"></script>
                <script src="<?php echo base_url('assets/admin/js/plugins/jquery/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
                <script src="<?php echo base_url();?>assets/admin/js/plugins/validate/jquery.validate.min.js"></script>
                <script>
                $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });</script>
            