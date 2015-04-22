    <ol class="breadcrumb">
         <li>
             <a href="<?php echo base_url('administrator');?>"><strong>Home</strong></a>
         </li>
    </ol>
    </div>
       <div class="col-lg-2">
       </div>
</div>
 
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Gaji Pokok <?php echo $this->session->userdata("nama_lengkap"); ?></h5>
                        <div class="ibox-tools">
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    
                    <?php if ($data_gaji_pokok->num_rows()<=0){?>
                    <a href="<?php echo base_url('pegawai/data_gaji_pokok/tambah');?>" class="btn btn-outline btn-default btn-sm" type="button"><i class="fa fa-plus-square-o"></i> Tambah</a>
                    <?php } ?>
                    <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <th>Golongan</th>
                        <th>Nomor SK</th>
                        <th>Tanggal SK</th>
                        <th>Gaji Pokok</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data_gaji_pokok->result_array() as $a)
                    {?>
                    <tr class="gradeX">
                        <td><?php echo $a['golongan'];?></td>
                        <td><?php echo $a['nomor_sk'];?></td>
                        <td><?php echo $a['tanggal_sk'];?></td>
                        <td><?php echo $a['gaji_pokok'];?></td>
                        <td><?php echo $a['tanggal_mulai'];?></td>
                        <td><?php echo $a['tanggal_selesai'];?></td>
                        <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#mymodal<?php echo $a['id_gaji_pokok'];?>"><i class="fa fa-search-plus"></i> Detail</buttom>
                        <button data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url('pegawai/data_gaji_pokok/edit/'.$a['id_gaji_pokok']);?>"><i class="fa fa-edit"></i> Edit</a></li>
                         <li><a href="<?php echo base_url('pegawai/data_gaji_pokok/hapus/'.$a['id_gaji_pokok']);?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-times-circle-o" ></i> Hapus</a></li>
                        </ul>
                        </button>
                        </div>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </tfoot>
                    </table>
<?php
//modal detail gaji pokok
        foreach($data_gaji_pokok->result_array() as $a)
        {
    ?>
<div class="modal inmodal" id="mymodal<?php echo $a['id_gaji_pokok'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<i class="fa fa-tasks modal-icon"></i><br>
<h4 class="modal-title">Detail Gaji Pokok Pegawai</h4>
</div>
<div class="modal-body">
<p>
<div class="form-group"><label class="col-sm-4 control-label">Golongan</label>
<div class="col-sm-8"><input type="text"value="<?php echo $a['golongan']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Nomor SK</label>
<div class="col-sm-8"><input type="text"value="<?php echo $a['nomor_sk']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal SK</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tanggal_sk']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Dasar Perubahan</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['dasar_perubahan']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Gaji Pokok</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['gaji_pokok']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai</label>
<div class="col-sm-8"><input type="tex" class="form-control" value="<?php echo $a['tanggal_mulai']?>" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Selesai</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tanggal_selesai']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Masa Kerja</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['masa_kerja']?>" class="form-control" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Pejabat Menetapka</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['pejabat_menetapkan']?>" class="form-control" disabled></div>
</p>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 </div>
 

 