      <ol class="breadcrumb">
         <li>
             <a href="index.html">Home</a>
         </li>
         <li class="active">
             <strong>Detail Pegawai</strong>
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
                        <div class="ibox-title"><h5>Detail Pegawai</h5></div>
                            <div class="panel-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">Data Pegawai</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">Data Pangkat</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3">Data Foto</a></li>
                                </ul>
                            </div>
                        

                      <div class="ibox-content">

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>NIP</label> 
                                    <input type="text" name="nip" value="<?php echo $nip ?>" placeholder="Nip" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>No Kartu Pegawai</label> 
                                    <input type="text" name="no_kartu" value="<?php echo $no_kartu ?>" placeholder="No Kartu" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Pegawai</label> 
                                    <input type="text" name="nama" value="<?php echo $nama_pegawai ?>" placeholder="Nama Pegawai" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kelamin</label> 
                                    <select class="form-control m-b" name="jenis_kelamin" disabled>
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
                                    <select class="form-control m-b" name="agama" disabled>
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
                                    <select class="form-control m-b" name="status_pegawai" disabled>
                                    <option value=""></option>
                                    <?php
                                    foreach($status_pegawai->result_array() as $sp)
                                    {
                                        if($sp['id_status_pegawai']==$id_status_pegawai)
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
                                    <textarea type="textarea" name="alamat" placeholder="Alamat" class="form-control" disabled><?php echo $alamat?></textarea>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">

                                    <div class="form-group">
                                    <label>Tempat lahir</label> 
                                    <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ?>" placeholder="Tempat Lahir" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Nomor Npwp</label> 
                                    <input type="text" name="no_npwp" value="<?php echo $no_npwp ?>" placeholder="Nomor NPWP" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Kartu akses pegawai</label> 
                                    <input type="text" name="kartu_akses_pegawai" value="<?php echo $kartu_akses ?>" placeholder="Kartu Akses Pegawai" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Lahir</label> 
                                    <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir ?>" placeholder="Tanggal Lahir" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Usia</label> 
                                    <input type="text" name="usia" value="<?php echo $usia ?>" placeholder="Usia" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Pengangkatan CPNS</label> 
                                    <input type="text" name="tgl_pengangkatan" value="<?php echo $tgl_pengangkatan ?>" placeholder="tanggal pengangkatan CPNS" class="form-control" disabled>
                                    </div>
                            
                                    </div>
                                    </div>
                                   
                                    </div>
                                <div id="tab-2" class="tab-pane">
                                   <div class="form-group">
                                    <label>Golongan</label> 
                                    <select class="form-control m-b" name="status_pegawai" disabled>
                                    <option value=""></option>
                                    <?php
                                    foreach($golongan->result_array() as $sp)
                                    {
                                        if($sp['id_golongan']==$id_golongan)
                                        {
                                    ?>
                                    <option value="<?php echo $sp['id_golongan']; ?>" selected="selected"><?php echo $sp['golongan']; ?></option>
                                     <?php
                                        }
                                        else
                                    {
                                    ?>
                                    <option value="<?php echo $sp['id_golongan']; ?>"><?php echo $sp['golongan']; ?></option>
                                    <?php
                                    }
                                    }
                                    ?>
                                    </select>
                                    </div>

                                </div>

                                <div id="tab-3" class="tab-pane">
                                   <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <label>Foto Pegawai</label> 
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="<?php echo base_url() .'assets/pegawai/'. $foto ?>" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                    </div>
                                    <input type="file" name="foto" id="foto" class='default' disabled>
                                    </span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                     </div>
                 </div>
        <section id="data-keluarga">
             <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Keluarga</h5>
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
                        <td><a href="<?php echo base_url('data_keluarga/detail/'.$a['id_data_keluarga']);?>" class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i> Detail</a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="data-gaji_pokok">
           <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Gaji Pokok</h5>
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
                    </tr>
                    <?php }?>
                    </tbody>
                    </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

          </div>          
    </div>
</div>
