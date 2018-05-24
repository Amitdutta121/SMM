<?php
	include 'header.php';
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
            <form role="form" action="custom_price_save.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                <label>Service</label>
                <select class="form-control select2" style="width: 100%;" name="ser_id">
                  <option selected="selected">None</option>
                  <?php
					$sql = "SELECT * FROM services";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$n = $row["service_id"];
					?>
					
					<option value="<?php echo $n; ?>"> <?php echo $n; ?></option>
					<?php
				}}
				  ?>
                </select>
              </div>
                
                <div class="form-group">
                <label>User</label>
                <select class="form-control select2" style="width: 100%;" name="uname">
                  <option selected="selected">None</option>
                  <?php
					$sql = "SELECT * FROM user";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$n = $row["user_name"];
					?>
					
					<option value="<?php echo $n; ?>"> <?php echo $n; ?></option>
					<?php
				}}
				  ?>
                </select>
              </div>
			  
			  
			  <div class="form-group">
				<label for="">Price</label>
				<input class="form-control" type="text" name="nprice" id="" />
			  </div>
			  
			  <div class="form-group">
				<label for="">Quantity</label>
				<input class="form-control" type="text" name="quantity" id="" />
			  </div>
			  <div class="form-group">
				<label for="">Type</label>
				<input class="form-control" type="text" name="type" id="" />
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