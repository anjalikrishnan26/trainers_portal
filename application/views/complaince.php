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

                                                                                                                                                                                                                                                                                                                                                                                                        

   
      <title>STUDENT GREIVANCE</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    </head>
    <style>
    body
    {
        font-family: Arial, Helvetica, sans-serif;
            background-image:url("../img/9.jpg");
background-size:cover;
margin-left: 300px;
    }
  </style>
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
            <a class="nav-link" href="./typography.html">
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
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">content_paste</i>
              <p>Warning</p>
            </a>
          </li>
           
          
        </ul>
      </div>
    </div>

 <div class="container">
  <br />
  <h3 align="center">Student Grievance </h3>
  <div class="panel panel-default">
   <div class="panel-heading">Request here</div>
 </br>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url()?>main/new">
      <div class="form-group">
      <label>Enter Trainer Name</label>
      <input type="text"  name="tname" class="form-control w-50" value=" " />
      <span class="text-danger"><?php echo form_error('tname'); ?></span>
     </div>
     </br>
     <div class="form-group">
      <label>Enter Student Name</label>
      <input type="text" name="sname" class="form-control w-50" value="" />
      <span class="text-danger"><?php echo form_error('sname'); ?></span>
     </div>
     </br>
     <div class="form-group">
      <label>Enter Batch</label>
     <select name="batch" id="batch">
      <option value="JSD-YUVAKERALA">JSD-YUVAKERALA</option>
      <option value="JSD-DDUGKY">JSD-DDUGKY</option>
    </select>
     </div>
     </br>
     <div class="form-group">
      <label>Grievance</label><br>
      <textarea class="w-60" id="grievance" name="grievance" rows="4" cols="100"></textarea>
     </div>
     </br>
     <div class="form-group">
      <input type="submit" name="submit" value="Submit Grievance" class="btn btn-info" />
     </div>
     
    </form>
   </div>
  </div>
 </div>
        <!---ajax--->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
          <!---Jquery--->
          <script
            src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">
          </script>

          <!---Popper---->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
          </script>

          <!---Custom Js-->
          <script src="js/script.js"></script>
         
</body>
</html>
