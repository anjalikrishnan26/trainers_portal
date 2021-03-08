<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>master/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>master/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TRAINERPROTAL
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>master/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>master/assets/demo/demo.css" rel="stylesheet" />

	<title>Add Course Details</title>
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
        width:100px;
        margin-left: 300px;
      
    }
</style>
<body>
    
    <fieldset>
	<h1>course</h1>
    <a href="<?php echo base_url()?>main/masterdashboard">Back To Dashboard</a>
	<form action="<?php echo base_url()?>main/add_courses" method="post">
		<input list="batch" name="batch" placeholder="Batch Name"><br>
          <datalist id="batch">
                <option value="Yuva Keralam">
                <option value="DDU-GKY">
         
            </datalist>
         </br>
         <input type="text" name="name" placeholder="Trainee Name"></br><br>
         <input list="subjects" name="subjects" placeholder="Subject Name"><br>
          <datalist id="subjects">
            <option value="subjects">
                <option value="Domain">
                <option value="ET">
                <option value="IT">
                <option value="English">
                <option value="Soft Skill">
                <option value="OJT">
            </option>
            </datalist>
         </br>
         <input type="text" name="hour" placeholder="Enter Total Hours" required=""></br><br>
		 <input type="text" name="day" placeholder="Enter Total Days" required=""></br><br>
		 <button type="submit" name="submit" value="submit">SUBMIT</button><br>
	</form>


 </fieldset>
</body>
</html>