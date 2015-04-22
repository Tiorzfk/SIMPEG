
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
                        <h5>Data Keluarga <?php echo $this->session->userdata("nama_lengkap"); ?></h5>
                        <div class="ibox-tools">
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    
                    <?php if ($data_keluarga->num_rows()<=0){?>
                    <a href="<?php echo base_url('pegawai/data_keluarga/tambah');?>" class="btn btn-outline btn-default btn-sm" type="button"><i class="fa fa-plus-square-o"></i> Tambah</a>
                    <?php } ?>
                    <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <th>Nama Keluarga</th>
                        <th>Tanggal Lahir</th>
                        <th>Status Kawin</th>
                        <th>Tanggal Nikah</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data_keluarga->result_array() as $a)
                    {?>
                    <tr class="gradeX">
                        <td><?php echo $a['nama_anggota_keluarga'];?></td>
                        <td><?php echo $a['tanggal_lahir'];?></td>
                        <td><?php echo $a['status_kawin'];?></td>
                        <td><?php echo $a['tanggal_nikah'];?></td>
                        <td><?php echo $a['pekerjaan'];?></td>
                        <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#mymodal<?php echo $a['id_data_keluarga'];?>"><i class="fa fa-search-plus"></i> Detail</buttom>
                        <button data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url('pegawai/data_keluarga/edit/'.$a['id_data_keluarga']);?>"><i class="fa fa-edit"></i> Edit</a></li>
                         <li><a href="<?php echo base_url('pegawai/data_keluarga/hapus/'.$a['id_data_keluarga']);?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-times-circle-o" ></i> Hapus</a></li>
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
        foreach($data_keluarga->result_array() as $a)
        {
    ?>
<div class="modal inmodal" id="mymodal<?php echo $a['id_data_keluarga'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<i class="fa fa-group modal-icon"></i><br>
<h4 class="modal-title">Detail Keluarga Pegawai</h4>
 <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>                                      
</div>
<div class="modal-body">
<p>
<div class="form-group"><label class="col-sm-4 control-label">Nama Keluarga</label>
<div class="col-sm-8"><input type="text" name="nama_keluarga" value="<?php echo $a['nama_anggota_keluarga']?>" class="form-control" placeholder="Nama Keluarga" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Lahir</label>
<div class="col-sm-8"><input type="text" name="nama_keluarga" value="<?php echo $a['tanggal_lahir']?>" class="form-control" placeholder="Nama Keluarga" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Status Kawin</label>
<div class="col-sm-8"><input type="text" name="nama_keluarga" value="<?php echo $a['status_kawin']?>" class="form-control" placeholder="Nama Keluarga" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Nikah</label>
<div class="col-sm-8"><input type="text" name="nama_keluarga" value="<?php echo $a['tanggal_nikah']?>" class="form-control" placeholder="Nama Keluarga" disabled></div>
<div class="form-group"><label class="col-sm-4 control-label">Uraian</label>
<div class="col-sm-8"><textarea type="textarea" name="nama_keluarga" class="form-control" placeholder="Nama Keluarga" disabled><?php echo $a['uraian']?></textarea></div>
<div class="form-group"><label class="col-sm-4 control-label">Pekerjaan</label>
<div class="col-sm-8"><input type="text" name="nama_keluarga" value="<?php echo $a['pekerjaan']?>" class="form-control" placeholder="Nama Keluarga" disabled></div>
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
