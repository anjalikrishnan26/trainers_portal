<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
        }
        	
	</style>
	</head>
	<body>
		
		<form method="post" action="">
			<table>
			<thead>
			  <tr>

				<th>Trainee Name</th>
				<th>Student Name</th>
				<th>Batch</th>
				<th>Grievance</th>
				<th colspan="2">Status</th>
				</tr>	
			 	<?php
			  		if($n->num_rows()>0)
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
								<td><?php echo $row->tname;?></td>
			  					<td><?php echo $row->sname;?></td>
			  					<td><?php echo $row->batch;?></td>
			  					<td><?php echo $row->grievance;?></td>
			  					<?php
			  						if($row->status==1)
			  						{
			  							?>
			  							<td>Accepted</td>
			  							<td><a href="<?php echo base_url()?>main/rejectcom/<?php echo $row->id;?>">Reject</a></td>
			  							<?php
			  						}
			  						elseif($row->status==2)
			  						{
			  							?>
			  							<td>Rejected</td>
			  							<td><a href="<?php echo base_url()?>main/approvecom/<?php echo $row->id;?>">Accept</a></td>
			  							<?php
			  						}
			  						else
			  						{
			  							?>

			  					<td><a href="<?php echo base_url()?>main/approvecom/<?php echo $row->id;?>">Accept</a></td>
			  					<td><a href="<?php echo base_url()?>main/rejectcom/<?php echo $row->id;?>">Reject</a></td>
			  					
			  					<?php
			  				}
			  				?>
			                </tr>
			                <?php
			            }
			        }?>
			  				</tr>
			        <a href="<?php echo base_url()?>main/masterdashboard">Back</a>
			  	</tr>
			</thead>
		</table>
	</form>
	</body>	
</html>  