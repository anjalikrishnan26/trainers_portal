<!DOCTYPE html>
<html>
<head>
<title>VIEW REPORT</title>
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
  background-image: url("../img/9.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
/*body{
background-image: url("../img/im2a.png");
background-size: cover;
background-attachment: fixed;
}*/


</style>
</head>
  <body class="overhidden">
 <div class="container ">
<label><h3>YUVA-KERALAM</h3></label>
  <table class="table">
    <thead>
      <tr>
        <th>BATCH</th>
        <th>DATE</th>
        <th>DAY</th>
        <th>DOMAIN</th>
        <th>IT</th>
        <th>ENGLISH</th>
        <th>SS</th>
        <th>OJT</th>
        <th>Remaining HOUR</th>
        
      </tr>
    </thead>
      <?php 
      if($n->num_rows()>0)
      {
          foreach($n->result() as $row)
          {
            if($row->batch=='yuva')
            {
      ?>

            <tr>
              <td><?php echo $row->domain;?></td>
              <td><?php echo $row->it;?></td>
              <td><?php echo $row->english;?></td>
              <td><?php echo $row->ss;?></td>
              <td><?php echo $row->ojt;?></td>
              <td><?php echo $row->thr;?></td>
              
            </tr>
        
      <?php
        }
      }
    }
      ?>

    </tbody>
  </table>

<label><h3>DDUGKY</h3></label>
   <table class="table">
    <thead>
      <tr>
        <th>BATCH</th>
        <th>DATE</th>
        <th>DAY</th>
        <th>DOMAIN</th>
        <th>ET</th>
        <th>IT</th>
        <th>ENGLISH</th>
        <th>SS</th>
        <th>OJT</th>
        <th>DAILY HOUR</th>
        
      </tr>
    </thead>
      <?php 
      if($n->num_rows()>0)
      {
          foreach($n->result() as $row)
          {
            if($row->batch=='ddugky')
            {
      ?>

            <tr>
              <td><?php echo $row->batch;?></td>
              <td><?php echo $row->date;?></td>
              <td><?php echo $row->day;?></td>
              <td><?php echo $row->domain;?></td>
              <td><?php echo $row->et;?></td>
              <td><?php echo $row->it;?></td>
              <td><?php echo $row->eng;?></td>
              <td><?php echo $row->ss;?></td>
              <td><?php echo $row->ojt;?></td>
              <td><?php echo $row->thr;?></td>
              
            </tr>
        
      <?php
        }
      }
    }
      ?>

    </tbody>
  </table>
  <a href="<?php echo base_url()?>main/masterdashboard">back</a>
</div>
</section>
</body>
</html>