<?php
	include 'header.php';
	$id = $_GET["admin"];
	$data = Array();
	$sql = "SELECT * FROM user where user_id='$id'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					$data["name"] = $row["user_name"];
					$data["email"] = $row["user_email"];
					$data["fname"] = $row["user_full_name"];
					$data["user_password"] = $row["user_password"];
				}}
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
		
		<div class="edit">
      <div class="row">
<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Administrator</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="edit_admin_submit.php" method="POST">
			<input type="hidden" name="ids" value="<?php echo $id; ?>" />
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="name" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?php echo $data["name"] ; ?>">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Fullname</label>
                  <input type="fullname" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="fullname" value="<?php echo $data["fname"]; ?>">
                </div>
				
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="name" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php $data["email"]; ?>">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Password" value="<?php echo $data["user_password"]; ?>">
                </div>
                <div class="form-group">
				  <label for="sel1">Select list:</label>
				  <select class="form-control" id="sel1" name="role">
					<option>Admininistrator</option>
					<option>User</option>
				  </select>
				</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-danger" type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
		  </div>
        <!-- /.col -->
      </div>
	  </div>

    </section>
    <!-- /.content -->
  </div>
  <?php
	include 'footer.php';
  ?>