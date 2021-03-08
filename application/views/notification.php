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

                                                                                                                                                                                                                                                                                                                                                                                                        

   
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

             

 <style>
 
  .top{
background-color:#5c00e6;
}
.bi
{
  background-image: url("../img/b2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
form
{
  margin-left: 270px;
}


</style>
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>trainer/assets/img/sidebar-1.jpg">
      

      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        MASTERTRAINER
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url()?>main/masterdashboard">
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
              <p>View Dailyreport</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">content_paste</i>
              <p>Additional Activities</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/leave_req">
              <i class="material-icons">bubble_chart</i>
              <p>Leave Approval</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/viewcomplaint">
              <i class="material-icons">content_paste</i>
              <p>View complaints</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();
  ?>main/notification">
              <i class="material-icons">content_paste</i>
              <p>Warning</p>
            </a>
          </li>
           
          
        </ul>
      </div>
    </div>
  <body class="overhidden">
    <form action="<?php echo base_url()?>main/notify_action" method="POST">
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Notification</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="<?php echo base_url()?>">
                     <div class="row">
                      <div class="col-md-6 mt-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Trainer Name</label>
                          <select name="fname" class="form-select">
                              <?php 
                                 if($n->num_rows()>0)
                                  {
                                     foreach($n->result() as $row)
                                        {
                               ?>
                
                                  <option value="<?php echo $row->id;?>" name="fname">
                                    <?php echo $row->fname?>
          
                                    </option>

                                    <?php
                                            }
                                                    }
                                                       ?>
                                                       </select>
                        </div>
                      </div>
                      <div class="col-md-6 mt-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Batch</label>
                          <select name="batch" id="batch" class="form-select ">
                                    <option value="yuva">YUVA-KERALAM</option>
                                    <option value="ddugky">DDUGKY</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mt-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Message</label>
                          <textarea name="message" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-primary pull-right">submit</button>
                  
                    <div class="clearfix"></div>
                  </form>
                </body>
                </html>

