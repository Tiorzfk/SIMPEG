    <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong>Manage User</strong>
         </li>
    </ol>
    </div>
       <div class="col-lg-2">
    </div>
    </div>
            <div class="wrapper wrapper-content animated pulse">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Manajemen User </h5>
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
<a href="<?php echo base_url('administrator/manage_user/tambah');?>" class="btn btn-outline btn-default btn-sm" type="button"><i class="fa fa-plus-square-o"></i> Tambah</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
    <?php
        $no=1;
        foreach($user->result_array() as $a)
        {
    ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $a['nama_lengkap']; ?></td>
                                    <td><?php echo $a['username']; ?></td>
                                    <td><?php echo $a['status']; ?></td>
                                    <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-w btn-sm" data-toggle="modal" data-target="#mymodal<?php echo $a['id_login'];?>"><i class="fa fa-search-plus"></i> Foto</a>
                                    <button data-toggle="dropdown" class="btn btn-w btn-sm dropdown-toggle"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                     <li><a href="<?php echo base_url('administrator/manage_user/edit/'.$a['id_login']);?>"><i class="fa fa-edit"></i> Edit</a></li>
                                     <li><a href="<?php echo base_url('administrator/manage_user/hapus/'.$a['id_login']);?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-times-circle-o" ></i> Hapus</a></li>
                                    </ul>
                                    </div></td>
                                </tr>
    <?php $no++;} ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
    <?php
        foreach($user->result_array() as $a)
        {
    ?>
<div class="modal inmodal fade" id="mymodal<?php echo $a['id_login'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title">Foto User</h4>
</div>
<div class="modal-body">
<center><img src="<?php echo base_url('assets/user_image/'.$a['foto']); ?>" width="200px"></center>         
</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<?php } ?>