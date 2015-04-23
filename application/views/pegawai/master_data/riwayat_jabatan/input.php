    <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong><?php echo $breadcrumb?></strong>
         </li>
         <li class="active">
             <strong>Riwayat Jabatan</strong>
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
                    <div class="wrapper wrapper-content animated fadeInDown">
                        <div class="ibox-title">
                            <h5><?php echo $breadcrumb?> Data Riwayat Jabatan Pegawai</h5>
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
echo form_open('pegawai/data_riwayat_jabatan/simpan', $attributes);
?>
                                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-6"><input type="text" name="status" value="<?php echo $status?>" class="form-control" placeholder="status" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Penempatam</label>
                                     <div class="col-sm-6"><input type="text" class="form-control" value="<?php echo $penempatan?>" name="penempatan" placeholder="Penempatan" required>
                                     </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                                    <div class="col-sm-6">
                                    <select name="id_jabatan" class="chosen-select" style="width:350px;" tabindex="2" required>
                                    <option value=""></option>
                                    <?php
                                    foreach($jabatan->result_array() as $sp)
                                    {
                                        if($sp['id_jabatan']==$id_jabatan)
                                        {?>
                                        <option value="<?php echo $sp['id_jabatan']; ?>" selected="selected"><?php echo $sp['nama_jabatan']; ?></option>
                                        <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_jabatan']; ?>"><?php echo $sp['nama_jabatan']; ?></option>
                                    <?php } }?>
                                    </select></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Unit Kerja</label>
                                    <div class="col-sm-6">
                                    <select name="id_unit_kerja" class="chosen-select" style="width:350px;" tabindex="2" required>
                                    <option value=""></option>
                                    <?php
                                    foreach($unit_kerja->result_array() as $sp)
                                    {
                                        if($sp['id_unit_kerja']==$id_unit_kerja)
                                        {?>
                                        <option value="<?php echo $sp['id_unit_kerja']; ?>" selected="selected"><?php echo $sp['nama_unit_kerja']; ?></option>
                                        <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_unit_kerja']; ?>"><?php echo $sp['nama_unit_kerja']; ?></option>
                                    <?php } }?>
                                    </select></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Uraian</label>
                                    <div class="col-sm-6"><textarea type="textarea" name="uraian" class="form-control" placeholder="Uraian" required><?php echo $uraian?></textarea></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Eselon</label>
                                    <div class="col-sm-6">
                                    <select name="id_eselon" class="chosen-select" style="width:350px;" tabindex="2" required>
                                    <option value=""></option>
                                    <?php
                                    foreach($eselon->result_array() as $sp)
                                    {
                                        if($sp['id_eselon']==$id_eselon)
                                        {?>
                                        <option value="<?php echo $sp['id_eselon']; ?>" selected="selected"><?php echo $sp['nama_eselon']; ?></option>
                                        <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_eselon']; ?>"><?php echo $sp['nama_eselon']; ?></option>
                                    <?php } }?>
                                    </select></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tmt Eselon</label>
                                    <div class="col-sm-6"><input type="text" name="tmt_eselon" value="<?php echo $tmt_eselon?>" class="form-control" placeholder="Tmt Eselon" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nomor SK</label>
                                    <div class="col-sm-6"><input type="text" name="nomor_sk" value="<?php echo $nomor_sk?>" class="form-control" placeholder="Nomor SK" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tanggal SK</label>
                                     <div class="col-sm-6"><input type="text" class="form-control" value="<?php echo $tanggal_sk?>" data-mask="99/99/9999" name="tanggal_sk" placeholder="Tanggal SK" required>
                                     </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tanggal Mulai</label>
                                    <div class="col-sm-6"><input type="text" name="tanggal_mulai" value="<?php echo $tanggal_mulai?>" data-mask="99/99/9999" class="form-control" placeholder="Tanggal Mulai" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tanggal Selesai</label>
                                    <div class="col-sm-6"><input type="text" name="tanggal_selesai" value="<?php echo $tanggal_selesai?>" data-mask="99/99/9999" class="form-control" placeholder="Tanggal Selesai" required></span>
                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Lokasi</label>
                                     <div class="col-sm-6"><input type="text" class="form-control" value="<?php echo $lokasi?>" name="lokasi" placeholder="Lokasi" required>
                                     </div>
                                </div>
                                <input type="hidden" class="form-control" name="id_riwayat_jabatan" value="<?php echo $id_riwayat_jabatan ?>">
                                <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $id_pegawai ?>">
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
                              <!-- Chosen -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/chosen/chosen.jquery.js"></script>

         <script>
        
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        

    </script>
