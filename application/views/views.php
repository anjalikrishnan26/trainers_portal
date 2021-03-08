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
        }
        

       
	</style>
	</head>
	<body>
    	<h1>TRAINER LIST</h1>
    	<a href="<?php echo base_url()?>main/dashboard">Back</a>
		<table>
			<thead>
			  <tr>	
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>District</th>
				<th>Gender</th>
				<th>Qualification</th>
				<th>Number</th>
				<th>Email</th>
				<th>Subjects</th>
				<th>Experience</th>
				<th>Adhar</th>
				<th colspan="3">Action</th>
		       </tr>
		    </thead>
		    <tbody>
		    	<?php
			        if($n->num_rows()>0)  
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
			  					<td><?php echo $row->fname;?></td>
			  					<td><?php echo $row->lname;?></td>
			  					<td><?php echo $row->address;?></td>
			  					<td><?php echo $row->district;?></td>
			  					<td><?php echo $row->gender;?></td>
			  					<td><?php echo $row->qualification;?></td>
			  					<td><?php echo $row->number;?></td>
			  					<td><?php echo $row->email;?></td>
			  					<td><?php echo $row->subjects;?></td>
			  					<td><?php echo $row->experience;?></td>
			  					<td><?php echo $row->adhar;?></td>
			  					<td><?php echo $row->email;?></td>
			  					
			  			<td><a href="<?php echo base_url()?>main/deletedetails/<?php echo $row->id;?>">Delete</a></td>
			  			<?php
                    }
			  		}
			  		?>
		    </tbody>


				
		   </table>
	</form>
	</body>	
</html>