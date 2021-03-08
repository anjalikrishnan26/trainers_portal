<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>dashboards/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>dashboards/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TRAINERPROTAL
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>dashboards/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>dashboards/assets/demo/demo.css" rel="stylesheet" />
</head>
	
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
		}
		body
        {
            background-image: url(../img/9.jpg);
            background-size:cover;
            width: 400px;
            margin-left: 250px;
        }
        	
	</style>
	</head>
	<body>
		<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>dashboards/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          ADMIN
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url()?>main/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/reg">
              <i class="material-icons">person</i>
              <p>Add Master Trainer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/user_view">
              <i class="material-icons">content_paste</i>
              <p>View Trainer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>View Hours</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/nview">
              <i class="material-icons">bubble_chart</i>
              <p>Leave Approval</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
		
		<form method="post" action="">
			<table>
			<thead>
			  <tr>	
				<th>Trainee Name</th>
				<th>Current Date</th>
				<th>Leave On Date</th>
				<th colspan="2">Option</th>
				</tr>	
			 	<?php
			  		if($n->num_rows()>0)
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
								<td><?php echo $row->name;?></td>
			  					<td><?php echo $row->cdate;?></td>
			  					<td><?php echo $row->ldate;?></td>
			  					<?php
			  						if($row->status==1)
			  						{
			  							?>
			  							<td>Approved</td>
			  							<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
			  							<?php
			  						}
			  						elseif($row->status==2)
			  						{
			  							?>
			  							<td>Rejected</td>
			  							<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
			  							<?php
			  						}
			  						else
			  						{
			  							?>

			  					<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
			  					<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
			  					
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
			        
			  	</tr>
			</thead>
		</table>
	</form>
	</body>	
</html>  