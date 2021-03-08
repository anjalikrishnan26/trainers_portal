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


  
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

             

 <style>
 
body{
background-image: url("../img/9.jpg");
background-size: cover;
background-attachment: fixed;
}
form
{
  margin-left: 260px;
}


</style>
</head>
  <body class="overhidden">
  
 <!-------------------------------------------------------------------------------------------->
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
              <i class="material-icons">notifications</i>
              <p>View Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/complaint">
              <i class="material-icons">content_paste</i>
              <p>View complaints</p>
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
    <form action="<?php echo base_url()?>main/report_action" method="POST">
<section class="text-center py-5 ">

  <div class="container ">
    
  <table class="table">
    <thead>
      <tr>
        <th>BATCH</th>
        <th>DATE</th>
        <th>DAY</th>
        <th>SUBJECTS</th>
        
        <th>DAILY HOUR</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><select name="batch" id="batch" class="form-control ">
                  <option value="yuva">YUVA-KERALAM</option>
                  <option value="ddugky">DDUGKY</option>
                </select>
            </td>
            <td><input type="date" name="date" placeholder="DATE" class="form-control"></td>
            
            <td><input type="text" name="day" placeholder="day" class="form-control"></td>
            <td><select name="subject" id="subject" class="form-control ">
                  <option value="domain">Domain</option>
                   <option value="it">It</option>
                    <option value="english">English</option>
                     <option value="ss">SS</option>
                    <option value="ojt">OJT</option>
                </select>
            </td>
            <td><input type="text" name="thr" placeholder="daily Hour" class="form-control"></td>
            <td><label>8</label></td>
          </tr>





      </tbody>
  </table>
</div>
</div>
<div class="container text-center">
<input type="submit" name="update" value="update" class="btn btn-primary w-50 mt-3  mb-3">
</div>






</section>
</form>
</section>
</body>
</html>