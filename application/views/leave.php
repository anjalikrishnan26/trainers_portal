
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>trainer/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>trainer/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TRAINERPROTAL
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>trainer/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>trainer/assets/demo/demo.css" rel="stylesheet" />


	
</head>
<style>
    body
    {
        font-family: Arial, Helvetica, sans-serif;
            background-image:url("../img/9.jpg");
background-size:cover;
    }
     form{
        padding: 20px;
        font-size: 15px;

    }
    fieldset
    {
        background-color: rgba();
        width:90px;
      margin-left: 300px;
    }
  </style>
<body>
	<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>trainer/assets/img/sidebar-1.jpg">
      

      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        TRAINER
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url()?>main/trainerdashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/dailyreport">
              <i class="material-icons">content_paste</i>
              <p>Dailyhour</p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/dailyreport">
              <i class="material-icons">content_paste</i>
              <p>Daiyreport</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>Additional Activities</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/trainerprofile">
              <i class="material-icons">person</i>
              <p>Profile Update</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/leave_req">
              <i class="material-icons">bubble_chart</i>
              <p>Leave Request</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>Warning</p>
            </a>
          </li>
           
          
        </ul>
      </div>
    </div>
	<fieldset>
	<h3>Leave Form</h3>
	<form action="add_leave" method="post">
		<input type="text" name="name"><br><br>
		<input type="date" name="cdate" placeholder="Enter Current Date"><br><br>
		<input type="date" name="ldate" placeholder="Enter Current Date"><br><br>
		<textarea name="reason" style="width: 250px;" placeholder="Enter The reason "></textarea><br><br>
		<button type="submit">Leave here</button>
	</form>
	</fieldset>
	<?php
			  		if($n->num_rows()>0)
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  					<?php
			  						if($row->status==1)
			  						{
			  							?>
			  							<td>Approved</td>
			  							<?php
			  						}
			  						elseif($row->status==2)
			  						{
			  							?>
			  							<td>Rejected</td>
			  							<?php
			  						}
			  						else
			  						{
			  							?>
			  					<?php
			  				}
			  				?>
			                </tr>
			                <?php
			            }
			        }?>
			  				</tr>

			  	 		<?php
			            
			        ?>
			        <a href="<?php echo base_url()?>main/trainerdashboard">Back</a>
</body>
</html>