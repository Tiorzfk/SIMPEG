    <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong><?php echo $breadcrumb?></strong>
         </li>
    </ol>
    </div>
       <div class="col-lg-2">
    </div>
    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

    <!--Tampil Pesan-->
    <?php if($this->session->flashdata('berhasil')) { ?>
     <div class="alert alert-success alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <a class="alert-link" href="#">Berhasil! <br></a><?php echo $this->session->flashdata('berhasil'); ?>.
     </div>
    <?php } ?>
                        <div class="ibox-title">
                            <h5><?php echo $breadcrumb?> Data Keluarga <?php echo $this->session->userdata("nama_lengkap"); ?></h5>
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
<?php
$attributes = array('class' => 'form-horizontal');
echo form_open('pegawai/data_keluarga/simpan', $attributes);
?>
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Keluarga</label>

                                    <div class="col-sm-6"><input type="text" name="nama_keluarga" value="<?php echo $nama_anggota_keluarga?>" class="form-control" placeholder="Nama Keluarga" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-6"><input type="text" name="tgl_lahir" value="<?php echo $tanggal_lahir?>" class="form-control" data-mask="99/99/9999" placeholder="Tanggal Lahir" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Status Kawin</label>
                                     <div class="col-sm-6"><input type="text" class="form-control" value="<?php echo $status_kawin?>" name="status_kawin" placeholder="Status Kawin" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tanggal Menikah</label>
                                    <div class="col-sm-6"><input type="text" name="tgl_menikah" value="<?php echo $tanggal_nikah?>" class="form-control" data-mask="99/99/9999" placeholder="Tanggal Menikah" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Uraian</label>
                                    <div class="col-sm-6"><textarea type="textarea" name="uraian" class="form-control" placeholder="Uraian"><?php echo $uraian?></textarea>
                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-6"><input type="text" name="pekerjaan" value="<?php echo $pekerjaan?>" class="form-control" placeholder="Pekerjaan" required></span>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $id_pegawai ?>">
                                <input type="hidden" class="form-control" name="id_data_keluarga" value="<?php echo $id_data_keluarga ?>">
                                <input type="hidden" class="form-control" name="st" value="<?php echo $st ?>">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>