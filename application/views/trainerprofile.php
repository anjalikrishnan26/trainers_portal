<!DOCTYPE html>
<html>
<head>
<title>TRAINERS PORTAL</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

             

 <style>
 
  .top{
background-color:#5c00e6;
}
background-size: cover;
}
.imgs{
background-image: url("../img/9.jpg");
background-size: cover;
background-attachment: fixed;
}


</style>
</head>
<body class="imgs">
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">View Details</h3>
<form  method="post" action="<?php echo base_url()?>main/updatedetails1" class=" ">
<?php
            
    if(isset($user_data))
    { 
        foreach($user_data->result() as $row1)
        {
            ?>

<fieldset>


<label class=>First Name:</label>
<input type="text" name="fname" value="<?php echo $row1->fname;?>" required maxlength="25" pattern="[a-zA-Z]+" class="form-control">

<label class="">Last Name:</label>
<input type="text" name="lname"  value="<?php echo $row1->lname;?>" required maxlength="25" pattern="[a-zA-Z]+" class="form-control">

<label class="form-label">Address:</label>
<textarea name="address"  required  class="form-control" placeholder="Address"><?php echo $row1->address;?></textarea>

<label class="form-label">District:</label>
<input list="district" name="district" value="<?php echo $row1->district;?>" required class="form-control" placeholder="District">
<datalist id="district">
<option value="kollam">
<option value="Trivandrum">
<option value="kottayam">
<option value="Alapuzha">
<option value="Idukki">
</datalist>


<label >Gender:</label>
                    <select name="gender">
                        <option>
                            <?php echo $row1->gender;?>
                        </option>
                        <option>male</option>
                        <option>female</option>
                    </select><br>


<label class="">Qualification:</label>
<input type="text" name="qualification"  value="<?php echo $row1->qualification;?>" required maxlength="25" pattern="[a-zA-Z]+" class="form-control">


<label class="">Phone number:</label>
<input type="text" name="number" value="<?php echo $row1->number;?>"  required  pattern="[7-9]{1}[0-9]{9}" class="form-control">


<label class="">Email:</label>
<input type="Email" name="email" value="<?php echo $row1->email;?>" required class="form-control">

<label class="">Course:</label>
<input type="text" name="subjects"  value="<?php echo $row1->subjects;?>" required class="form-control">

<label class="">Experiences:</label>
<input type="text" name="experience" value="<?php echo $row1->experience;?>"  required   class="form-control">

<label class="">Aadhar Number:</label>
<input type="text" name="adhar" value="<?php echo $row1->adhar;?>"  required   class="form-control">



<div class="container text-center">

<input type="submit" name="update" value="update" class="btn btn-primary w-50 mt-3  mb-3">
</div>

<?php
        }
    }
    ?>

</fieldset>
<a href="<?php echo base_url()?>main/trainerdashboard">back</a>


</form>
</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >


</body>
</html>
