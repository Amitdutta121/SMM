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

		<?php
			 	$price ="";
				$uid = $_SESSION["username_main"];
				$sql = "SELECT * FROM services";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id= $row["service_id"];
						
						$idd = $row["service_id"];
						
						
						$title = $row["service_title"];
						$image = $row["service_image"];
						$type = $row["service_type"];
						
						
						
						
		?>
		
        <div class="cus col-md-3 col-sm-6 col-xs-12">
          <div class="services" style="
">
			<div class="imgs" style="
    float: left;
">
				<img width="150px" src="../SMM/uploads/<?php echo $image; ?>" alt="">
			</div>
			<div class="info" style="">
			<div class="title">
				<h3 style="margin-left: 49%;"><?php echo $title; ?></h3>
			</div>
			<div class="quantity" style="
    margin-left: 50%;
    margin-top: 3%;
">
				
				
				<input type="hidden" name="data" value="<?php echo htmlentities(serialize($serdata)); ?>" />
			</div>
			<div class="order" style="
    margin-left: 50%;
    margin-top: 14%;
">
				<a href="order.php?ids=<?php echo $id; ?>"><button class="btn btn-success">Order Now</button></a>
			</div>
			</div>
		  </div>
        </div>
		
		<?php
				}
				}
		?>
		
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <?php
	include 'footer.php';
  ?>