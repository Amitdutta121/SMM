<?php
	include 'header.php';
	
	$uname = $_SESSION["username_main"];
	
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		
		<div class="pad row">
        <div class="col-xs-12">
		
		
<fieldset>

<!-- Form Name -->
<legend>New Order</legend>
<form class="form-horizontal" action="submit_order.php" method="POST">

<input type="hidden" name="serverce_id" value="<?php echo $id; ?>" />
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="textinputmobile">Select Package</label>  
  <div class="col-md-4">
  
  <select class="form-control" name="servic" id="select">
            <option>Select an Service</option>
            <?php

            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row["service_id"];?>"><?php echo $row["service_title"];?></option>
            <?php
                }
            }

            ?>
        </select>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputmobile">Select Package</label>  
  <div class="col-md-4">
  <div id="package">
            <select class="form-control">
				<option value="">Please Select an service First</option>
			</select>
		</div>
		
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputmobile">Link</label>  
  <div class="col-md-4">
  <input id="textinputmobile" name="link" type="text" placeholder="Link" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputmobile" >Quantity</label>  
  <div class="col-md-4">
  <input name="quantity" id="quantity"  class="form-control" type="text" autocorrect="off">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebuttonsubmit"></label>
  <div class="col-md-4">
    <button id="singlebuttonsubmit" name="singlebuttonsubmit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  
  <?php
	include 'footer.php';
  ?>
  <script>

    $('select').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        console.log(valueSelected);

        if(valueSelected){
            $.ajax({
                type: 'POST',
                url: 'data.php',
                data: 'ids=' + valueSelected,
                success: function (html) {
                    $('#package').html(html);
                }
            });
        }


    });
</script>
  