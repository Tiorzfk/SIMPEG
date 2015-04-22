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
    <?php if($this->session->flashdata('perhatian')) { ?>
     <div class="alert alert-warning alert-dismissable">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
     <a class="alert-link" href="#">Perhatian! <br></a><?php echo $this->session->flashdata('perhatian'); ?>.
     </div>
    <?php } ?>
                        <div class="ibox-title">
                            <h5><?php echo $breadcrumb?> User dan hak akses</h5>
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
echo form_open('administrator/manage_user/simpan', $attributes);
?>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pilih Pegawai</label>
                                    <div class="col-sm-6">
                                    <div class="input-group">
                                    <select name="id_pegawai" class="chosen-select" style="width:350px;" tabindex="2" required>
                                    <option value="">Pilih Nama Pegawai</option>
                                    <?php
                                    foreach($pegawai->result_array() as $a)
                                    {
                                        if($a['id_pegawai']==$id_pegawai)
                                        {?>
                                        <option value="<?php echo $a['id_pegawai']; ?>" selected="selected"><?php echo $a['nama_pegawai']; ?></option>
                                        <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $a['id_pegawai'];?>"><?php echo $a['nama_pegawai'];?></option>
                                    <?php } }?>
                                    </select>
                                    </div>
                                    </div>
                                    </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-6"><input type="text" name="username" value="<?php echo $username ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                                     <div class="col-sm-6"><input type="password" <?php if($st=="edit"){ echo 'placeholder="Biarkan kosong jika tidak ingin diubah"'; }?> class="form-control" name="password" <?php if($st=="tambah"){echo "required";}?>></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Hak Akses</label>
                                    <div class="col-sm-6">
                                    <div class="input-group">
                                    <select name="hak_akses" class="form-control m-b" >
                                     <?php
                                    $pegawai="";$administrator="";$operator="";$kosong="";
                                    if($status=="pegawai"){ $pegawai='selected="selected"';$administrator="";$operator="";$kosong=""; }
                                    else if($status=="administrator"){ $pegawai='';$administrator='selected="selected"';$operator="";$kosong=""; }
                                    else if($status=="operator"){ $pegawai='';$administrator='';$operator='selected="selected"';$kosong=""; }
                                    else { $pegawai='';$administrator='';$operator='';$kosong='selected="selected"'; }
                                    ?>
                                    <option value=""<?php echo $kosong; ?>></option>
                                    <option value="pegawai" <?php echo $pegawai; ?>>Pegawai</option>
                                    <option value="administrator" <?php echo $administrator; ?>>Administrator</option>
                                    <option value="operator" <?php echo $operator; ?>>Operator</option>
                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                <input type="hidden" class="form-control" name="id_param" value="<?php echo $id_param ?>">
                                <input type="hidden" class="form-control" name="st" value="<?php echo $st ?>">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
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