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
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Services List</h3>
			  <a href="add_news.php"><button class="btn btn-success">Add News</button></a>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>News ID</th>
                  <th>News Title</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$data = array();
                $sql = "SELECT * FROM news";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $data["id"] = $row["news_id"];
                        $data["title"] = $row["news_title"];
				
				?>
                <tr>
                  <td><?php echo $data["id"] ?></td>
                  <td><?php echo $data["title"] ?></td>
				  <td>
				  
				  <a href="delete_news.php?nid=<?php echo $data["id"] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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