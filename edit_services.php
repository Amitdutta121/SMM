<?php
	include 'header.php';
	
		$ids = $_GET["serid"];
		
				$data = array();
                $sql = "SELECT * FROM services where service_id='$ids'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $data["id"] = $row["service_id"];
                        $data["service_title"] = $row["service_title"];
                        $data["service_type"] = $row["service_type"];
                        $data["service_image"] = $row["service_image"];
					}
				}
				
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
            <form role="form" action="service_save.php" method="POST" enctype="multipart/form-data">
			  <div class="box-body">
                <div class="form-group">
                  <label for="serviceName">Service Name</label>
                  <input type="serviceName" class="form-control" class="serviceName" id="serviceName" name="service_name" placeholder="Enter service name" value="<?php echo $data["service_title"]; ?>">
				  
				  <input type="hidden" name="ser_id" value="<?php echo $data["id"]; ?>" />
                </div>
                
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Type</label>
                  <input type="type" class="form-control" id="type" name="type" placeholder="type" value="<?php echo $data["service_type"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Package Image</label>
                  <img width="200px" src="../smm/uploads/<?php echo $data["service_image"]; ?>" alt="" />
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