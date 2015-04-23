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
                        <h5>Data Riwayat Jabatan Pegawai</h5>
                        <div class="ibox-tools">
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Status</th>
                        <th>Penempatan</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Nomor SK</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data_riwayat_jabatan->result_array() as $a)
                    {?>
                    <tr class="gradeX">
                        <td><?php echo $a['nama_pegawai'];?></td>
                        <td><?php echo $a['status'];?></td>
                        <td><?php echo $a['penempatan'];?></td>
                        <td><?php echo $a['jabatan'];?></td>
                        <td><?php echo $a['unit_kerja'];?></td>
                        <td><?php echo $a['nomor_sk'];?></td>
                        <td><?php echo $a['lokasi'];?></td>
                        <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#mymodal<?php echo $a['id_riwayat_jabatan'];?>"><i class="fa fa-search-plus"></i> Detail</buttom>
                        <button data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url('administrator/data_riwayat_jabatan/edit/'.$a['id_riwayat_jabatan']);?>"><i class="fa fa-edit"></i> Edit</a></li>
                         <li><a href="<?php echo base_url('administrator/data_riwayat_jabatan/hapus/'.$a['id_riwayat_jabatan']);?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-times-circle-o" ></i> Hapus</a></li>
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
        foreach($data_riwayat_jabatan->result_array() as $a)
        {
    ?>
<div class="modal inmodal" id="mymodal<?php echo $a['id_riwayat_jabatan'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<i class="fa fa-tasks modal-icon"></i><br>
<h4 class="modal-title">Detail Riwayat Pekerja Pegawai</h4>
</div>
<div class="modal-body">
<p>
<div class="form-group"><label class="col-sm-4 control-label">Status</label>
<div class="col-sm-8"><input type="text"value="<?php echo $a['status']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Penempatan</label>
<div class="col-sm-8"><input type="text"value="<?php echo $a['penempatan']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Jabatan</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['jabatan']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Unit Kerja</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['unit_kerja']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Uraian</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['uraian']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Eselon</label>
<div class="col-sm-8"><input type="tex" class="form-control" value="<?php echo $a['eselon']?>" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Tmt Eselon</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tmt_eselon']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Nomor SK</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['nomor_sk']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal SK</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tanggal_sk']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tanggal_mulai']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Selesai</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['tanggal_selesai']?>" class="form-control" disabled></div></div>
<div class="form-group"><label class="col-sm-4 control-label">Detail</label>
<div class="col-sm-8"><input type="text" value="<?php echo $a['detail']?>" class="form-control" disabled></div></div>
</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
</div>
<?php } ?> 
</div>
</div>
</div>
</div>
</div>

 

 