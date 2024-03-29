<!DOCTYPE html>
<html lang="en">

<head>
  <title>New Rizal</title><meta charset="UTF-8" />
</head>
<body>
  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="hal_admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="kel_barberman" class="current">Barberman</a> </div>
      <h1>Name of Barber's</h1>
      <button class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" data-toggle="modal" data-target="#tamBarber" style="margin-left:20px"><span>+ Add New Barber</span></buttons>
      </div>

  <!--End-breadcrumbs-->

  <!--Action boxes-->
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>List of Barber's</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th style="width:10%">No</th>
                    <th style="width:40%">Name</th>
                    <th style="width:30%">Image</th>
                    <th style="width:20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($barberman as $key => $value) {
                    ?>
                  <tr class="gradeX">
                    <td style="text-align:center"><?php echo $i; ?></td>
                    <td style="text-align:center"><?php echo $value['nama_barber']; ?></td>
                    <td style="text-align:center"><img src="<?php echo base_url();?>assets/images/barberman/<?php echo $value['foto_barber']; ?>" width="75px" height="75px"></td>
                    <td class="center" style="text-align:center">
                      
                      <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit<?php echo $value['id_barberman'] ?>"><i class="fa fa-pencil"></i> Edit </button>

                      <a href="kel_barberman/hapBarber?id=<?php echo $value['id_barberman']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove </a>
                    </td>
                  </tr>
                  <?php $i++;} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  <!--End-Chart-box-->
    </div>
  </div>
  <div class="modal fade" id="tamBarber" tabindex="-1" role="dialog" aria-labelledby="tamUserLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"?>&times</span></button>
          <h4 class="modal-title" id="tamUserLabel">Barberman Baru</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-label-left" action="kel_barberman/tamBarber" method="post" novalidate enctype="multipart/form-data">
            <p>Silahkan isi form berikut dengan data barberman baru</a>
            </p>

            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama"  required="required" type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Foto :</label>
              <div class="controls">
                <input type="file" id="foto" name="foto"  required="required">
              </div>
            </div>
        <div class="modal-footer">
          <div class="form-action">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button id="send" type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
  <?php
  $i = 1;
  foreach ($barberman as $key => $value) {
    ?>
  <div class="modal fade" id="edit<?php echo $value['id_barberman'] ?>" tabindex="-1" role="dialog" aria-labelledby="rincianLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"?>&times</span></button>
          <h4 class="modal-title" id="rincianLabel">Edit Rincian Barberman</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-label-left" action="kel_barberman/edBarber" method="post" enctype="multipart/form-data">
            <p>Silahkan isi form berikut dengan data barberman terbaru</p>
            <input type="hidden" name="id_barberman" value="<?php echo $value['id_barberman']?>">
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama" value="<?php echo $value['nama_barber']?>"  type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Foto baru :</label>
              <div class="controls">
                <input type="file" id="foto" name="foto" >
              </div>
            </div>
        <div class="modal-footer">
          <div class="form-action">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button id="send" type="submit" class="btn btn-success">Ubah</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <?php $i++;} ?>
</body>
</html>
