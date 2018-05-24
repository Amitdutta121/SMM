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
		
		<div class="pad row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Order_ID</th>
                  <th>Package ID</th>
                  <th>Clint</th>
                  <th>Total</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$data = array();
                $sql = "SELECT * FROM service_order";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
						$data["ids"] = $row["order_id"];
                        $data["order_id"] = $row["service_id"];
                        $data["package_id"] = $row["package_id"];
                        $data["user_name"] = $row["user_id"];
                        $data["total"] = "$".$row["total"];
						$data["link"] = $row["link"];
						$data["status"] = $row["status"];
				
				?>
                <tr>
                  <td><?php echo $data["order_id"] ?></td>
                  <td><?php echo $data["package_id"] ?></td>
                  <td><?php echo $data["user_name"] ?></td>
                  <td> <?php echo $data["total"] ?></td>
                  <td> <?php echo $data["link"] ?></td>
				  
                  
				  
                  <td> 
					<?php echo $data["status"] ?>
					<form action="updateDeliveryStatus.php" method="POST">
					<div class="fl form-group">
					<input type="hidden" name="orderId" value="<?php echo $data["ids"]; ?>"/>
					  <select class="form-control" id="sel1" name="status_value">
						<option <?php if($data["status"]=="processing"){ echo "selected";} ?>>Processing</option>
						<option <?php if($data["status"]=="processing"){ echo "Processed";} ?>>Processed</option>
						<option <?php if($data["status"]=="processing"){ echo "Shipping";} ?>>Shipping</option>
						<option <?php if($data["status"]=="processing"){ echo "Delivered";} ?>>Delivered</option>
					  </select>
					</div>
					<button class="btn btn-primary btn-cons" type="submit">Update</button>
					</form>
				  </td>
				  <td>
				  <a href="delete_order.php?order_id=<?php echo $data["ids"] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
				  </td>
                </tr>
				<?php
						}
					}
				?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

    </section>
    <!-- /.content -->
  </div>
  <?php
	include 'footer.php';
  ?>