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
		
		<div class="edit">
      <div class="row">
<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Administrator</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="addauser.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="name" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Fullname</label>
                  <input type="fullname" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="fullname">
                </div>
				
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="name" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Password">
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