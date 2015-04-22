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
                    <div class="wrapper wrapper-content animated fadeInDown">
                        <div class="ibox-title">
                            <h5><?php echo $breadcrumb?> Data Gaji Pokok <?php echo $this->session->userdata("nama_lengkap"); ?></h5>
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
echo form_open('pegawai/data_gaji_pokok/simpan', $attributes);
?>
                                <div class="form-group"><label class="col-sm-2 control-label">Golongan</label>
                                    <div class="col-sm-6">
                                    <select name="id_golongan" class="chosen-select" style="width:350px;" tabindex="2" required>
                                    <option value=""></option>
                                    <?php
                                    foreach($golongan->result_array() as $sp)
                                    {
                                        if($sp['id_golongan']==$id_golongan)
                                        {?>
                                        <option value="<?php echo $sp['id_golongan']; ?>" selected="selected"><?php echo $sp['golongan']; ?></option>
                                        <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_golongan']; ?>"><?php echo $sp['golongan']; ?></option>
                                    <?php } }?>
                                    </select></div>
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
                                <div class="form-group"><label class="col-sm-2 control-label">Dasar Perubahan</label>
                                    <div class="col-sm-6"><input type="text" name="dasar_perubahan" value="<?php echo $dasar_perubahan?>" class="form-control" placeholder="Dasar Perubahan" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Gaji Pokok</label>
                                    <div class="col-sm-6"><input type="text" name="gaji_pokok" value="<?php echo $gaji_pokok?>" class="form-control" placeholder="Gaji Pokok" required></span>
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
                                <div class="form-group"><label class="col-sm-2 control-label">Masa Kerja</label>
                                    <div class="col-sm-6"><input type="text" name="masa_kerja" value="<?php echo $masa_kerja?>" class="form-control" placeholder="Masa Kerja" required></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Pejabat Menetapkan</label>
                                    <div class="col-sm-6"><input type="text" name="pejabat_menetapkan" value="<?php echo $pejabat_menetapkan?>" class="form-control" placeholder="Pejabat Menetapkan" required></span>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="id_gaji_pokok" value="<?php echo $id_gaji_pokok ?>">
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
