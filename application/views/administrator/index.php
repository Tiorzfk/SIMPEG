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
                        <h5>Data Pegawai</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
<a href="<?php echo base_url('administrator/pegawai/tambah');?>" class="btn btn-outline btn-default btn-sm" type="button"><i class="fa fa-plus-square-o"></i> Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($tampil->result_array() as $a)
                    {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $no?> </td>
                        <td><?php echo $a['nip'];?></td>
                        <td><?php echo $a['nama_pegawai'];?></td>
                        <td><?php echo $a['jenis_kelamin'];?></td>
                        <td class="center"><?php echo $a['nama_status'];?></td>
                        <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url('administrator/pegawai/detail/'.$a['id_pegawai']);?>" class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i> Detail</a>
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                     <li><a href="<?php echo base_url('administrator/pegawai/edit/'.$a['id_pegawai']);?>"><i class="fa fa-edit"></i> Edit</a></li>
                                     <li><a href="<?php echo base_url('administrator/pegawai/hapus/'.$a['id_pegawai']);?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-times-circle-o" ></i> Hapus</a></li>
                                    </ul>
                        </div>
                        </td>
                    <?php $no++;}?>
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            </div>

 