<?php
	include 'header.php';
	
		if(isset($_GET["st"])){
			echo '<script language="javascript">';
			echo 'alert("Successfully added")';
			echo '</script>';
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
            <form role="form" action="news_add.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="serviceName">News Title</label>
                  <input type="serviceName" class="form-control" class="serviceName" id="serviceName" name="title" placeholder="Enter news title">
                </div>
                
				
				<div class="form-group">
                  <label for="exampleInputPassword1">News Decription</label>
                  <textarea class="form-control" id="type" name="des" rows="4" placeholder="Enter ..."> </textarea>
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