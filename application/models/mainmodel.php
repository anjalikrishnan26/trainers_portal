<?php
class mainmodel extends CI_model
{



	

  //Encrypt Password
  public function encpswd($pass)
  {
    return password_hash($pass, PASSWORD_BCRYPT);
  }
  //Add Trainers Details
  public function inreg($a,$b)
  {
    $this->db->insert("login",$b);
    $loginid=$this->db->insert_id();
    $a['loginid']=$loginid;
     $this->db->insert("add_teacher",$a);
  }
  public function updateform($id)
  {
    $this->db->select('*');
    $qry=$this->db->where("add_teacher.id",$id);
    $qry=$this->db->get("add_teacher");
    return $qry;
  }


  public function updates($a,$id)
  {
        $this->db->select('*');
        $qry=$this->db->where("id",$id);
        $qry=$this->db->update("add_teacher",$a);
        return $qry;


  }
  
  //View Trainers Details
  public function view()
  {
    $this->db->select('*');
    $this->db->join('login','login.id=reg.loginid','inner');
    $qry=$this->db->get("reg");
      return $qry;
  }

  //Trainers Leave Approve
  public function approve($id)
  {   $this->db->set('status','1');
    $qry=$this->db->where("id",$id);
    $qry=$this->db->update("leave");
    return $qry;
  }

  //Trainers leave reject
  public function reject($id)
  {   
    $this->db->set('status','2');
    $qry=$this->db->where("id",$id);
    $qry=$this->db->update("leave");
    return $qry;
  }
  //Login Function for selecting Email And Password
   public function select($email,$pass)
  {
    $this->db->select('password');
    $this->db->from("login");
    $this->db->where("email",$email);
    $qry=$this->db->get()->row('password');
    return $this->verifypass($pass,$qry);
  }

  //Verifying Password
  public function verifypass($pass)
  {
        return password_hash($pass, PASSWORD_BCRYPT);
          
    }

     //Get User ID 
  public function getuserid($email)
  {
    $this->db->select('id');
    $this->db->from("login");
    $this->db->where("email",$email);
    return $this->db->get()->row('id');
  }
  //Get User Details
  public function getuser($id)
  {
    $this->db->select('*');
    $this->db->from("login");
    $this->db->where("id",$id);
    return $this->db->get()->row();
  }

  //ADD COURSE DETAILS
  public function addcourse($a)
  {
     $this->db->insert("coursehour",$a);
  }

  //view user details
  public function views()
  {
    $this->db->select('*');
    $qry=$this->db->get("add_teacher");
        return $qry;
  }
  //delete Details
  public function deletesdetails($id)
  {
    $this->db->where("id",$id);
    $this->db->delete("add_teacher");
  }
  //leave Details
  public function leave($a)
  {
     $this->db->insert("leave",$a);
  }
  //view notification
  public function nview()
  {
    $this->db->select('*');
    $qry=$this->db->get("leave");
        return $qry;
  }
  public function nviews()
  {
    $this->db->select('*');
    $qry=$this->db->get("leave");
        return $qry;
  }
  //complaince
  public function complaint($a)
  {
     $this->db->insert("complaint",$a);
  }
  // reprt
//   public function report($a)
// {
//   $this->db->insert("dailyreport",$a);
// }
// report view
public function reportview()
{
    $this->db->select('*');
    $qry=$this->db->get("dailyreport");
    return $qry;

}
public function tdate($date)
{
  $this->db->select('date');
  $this->db->from("dailyreport");
$this->db->where("date",$date);
    return $this->db->get()->row('date');
    
}
public function selectid($tdate)
{
  $this->db->select('id');
  $this->db->from("dailyreport");
  $this->db->where("date",$tdate);
    return $this->db->get()->row('id');
   // echo"$qry";exit;
    //return $qry;
}
public function reportupdate($a,$id)
{
      $qry=$this->db->where("id",$id);
      $qry=$this->db->update("dailyreport",$a);
      return $qry;
}
//add course details
public function coure_action($a)
{
  $this->db->insert("course_details",$a);
}
public function trainersname()
    {
      $this->db->select('*');
      $qry=$this->db->get("add_teacher");
      return $qry;

    }
    public function notifymodel($n)
    {
    $this->db->insert("notification",$n);
     
    }
      public function report($a)
  {
    $this->db->insert("dailyreport",$a);
  }
  //*******************Domain
  public function domain($hr)
  {
    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('domain');
    $reduce=$qry-$hr;
    $this->db->set('domain',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;
  }
//**********************IT
  public function it($hr)
  {
    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('it');
    $reduce=$qry-$hr;
    $this->db->set('it',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;
  }
 
  public function english($hr)
  {
    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('english');
    $reduce=$qry-$hr;
    $this->db->set('english',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;
  }
  public function ss($hr)
  {
    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('ss');
    $reduce=$qry-$hr;
    $this->db->set('ss',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;
  }
  public function ojt($hr)
  {
    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('ojt');
    $reduce=$qry-$hr;
    $this->db->set('ojt',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;
  }
  public function total($hr)
  {

    $this->db->select('*');
    $this->db->from("hour");
    $this->db->where("id",'2');
    $qry= $this->db->get()->row('thr');
    $reduce=$qry-$hr;
    $this->db->set('thr',$reduce);
    $qry=$this->db->where("id",'2');
    $qry=$this->db->update("hour");
    return $qry;

  }

  ///***********************05/03/2021
  //view user details by Master Trainer 
  public function viewss()
  {
    $this->db->select('*');
    $qry=$this->db->get("add_teacher");
        return $qry;
  }

  //complaince
  public function compview()
  {
    $this->db->select('*');
    $qry=$this->db->get("complaint");
    return $qry;
  }
  //Complaints Approve/Reject
  //Trainers Leave Approve
  public function approvecom($id)
  {   $this->db->set('status','1');
    $qry=$this->db->where("id",$id);
    $qry=$this->db->update("complaint");
    return $qry;
  }

  //Trainers leave reject
  public function rejectcom($id)
  {   $this->db->set('status','2');
    $qry=$this->db->where("id",$id);
    $qry=$this->db->update("complaint");
    return $qry;
  }
  public function compstatus()
  {
    $this->db->select('*');
    $qry=$this->db->get("complaint");
    return $qry;
  }

  //total hour
  public function totalhour()
  {
    $this->db->select('*');
    $qry=$this->db->get("totalhour");
    return $qry;
  }

  //Remaining hour
  public function remhour()
  {
    $this->db->select('*');
    $qry=$this->db->get("hour");
    return $qry;
  }
  //Remaining hour DDU 
  public function dduremhour()
  {
    $this->db->select('*');
    $qry=$this->db->get("dhour");
    return $qry;
  }
  
  public function traineremains()
  {
    $this->db->select('*');
    $qry=$this->db->where("id",'6');
    $qry=$this->db->get("notification");
    return $qry;
  }
  
  //chart
  public function chart()
  {
    $this->db->select('*'); 
    $qry=$this->db->get("hour");
    return $qry;
  }
  public function charts()
  {
    $this->db->select('*'); 
    $qry=$this->db->get("dhour");
    return $qry;
  }
  //view Admin Details
    public function admindet()
  {
    $this->db->select('*');
    $qry=$this->db->where("id",'3');
    $qry=$this->db->get("add_teacher");
    return $qry;
  }

}
?>
