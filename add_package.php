<?php
	include 'header.php';
				$data = array();
                
				
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		
		<div class="row">
       
        <!-- /.col -->
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-12">
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="package_save.php" method="POST" enctype="multipart/form-data">
			  <div class="box-body">
                <div class="form-group">
				  <label for="sel1">Service Name</label>
				  <select class="form-control" id="sel1" name="service">
					<?php
				$sqla = "SELECT * FROM services";
                $resulta = $conn->query($sqla);
                if ($resulta->num_rows > 0){
                    while($rowa = $resulta->fetch_assoc()) {
					?>
					<option value="<?php echo $rowa["service_id"] ?>"><?php echo $rowa["service_title"]; ?></option>
					
					<?php
					}
				}
					?>
				  </select>
				</div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Desc</label>
                  <input type="type" class="form-control" id="type" name="type" placeholder="Desc" value="">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="type" class="form-control" id="price" name="price" placeholder="price" value="">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="type" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <?php
	include 'footer.php';
  ?>