<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    /*

    ****
  //    ****
 // *
 // * @function:dashboard
 // * @function:loading admindashboard
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
    ****
    */


    // admin dashboard
    public function dashboard()
    {
        $this->load->view('dashboard');
    }

  //    ****
 // *
 // * @function:reg
 // * @function:loading mastertrainer registeration
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
   
    //trainer Registration
    public function reg()
    {
        $this->load->view('reg');
    }
    //    ****
 // *
 // * @function:masterdashboard
 // * @function:loading masterdashboard
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
       
     
 //      ****
    //master dashboard
     public function masterdashboard()
    {
        $this->load->view('masterdashboard');
    }
     
 
 //     ****
 
 // * @function:masterreg
 // * @function:loading registeration
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
    //trainer trainer
     public function masterreg()
    {
        $this->load->view('masterreg');
    }
     //    ****
 // *
 // * @function:trainerprofile
 // * @function:loading trainerdashboard
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
    //trainer dashboard
     public function trainerdashboard()
    {
        $this->load->view('trainerdashboard');
    }
    // //// Registration validation
    // public function trainer_registration()
    // {
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules("fname","fname",'required');
    //     $this->form_validation->set_rules("lname","lname",'required');
    //     $this->form_validation->set_rules("address","address",'required');
    //     $this->form_validation->set_rules("district","district",'required');
    //     $this->form_validation->set_rules("gender","gender",'required');
    //     $this->form_validation->set_rules("qualification","qualification",'required');
    //     $this->form_validation->set_rules("number","number",'required');
    //     $this->form_validation->set_rules("email","email",'required');
    //     $this->form_validation->set_rules("subjects","subjects",'required');
    //     $this->form_validation->set_rules("experience","experience",'required');
    //     $this->form_validation->set_rules("adhar","adhar",'required');
    //     $this->form_validation->set_rules("password","password",'required');
    //     if($this->form_validation->run())
    //     {
    //     $this->load->model('mainmodel');
    //     $pass=$this->input->post("password");
    //     $encpass=$this->mainmodel->encpswd($pass);
    //     $a=array("fname"=>$this->input->post("fname"),
    //             "lname"=>$this->input->post("lname"),
    //             "address"=>$this->input->post("address"),
    //             "district"=>$this->input->post("district"),
    //             "gender"=>$this->input->post("gender"),
    //             "qualification"=>$this->input->post("qualification"),
    //             "number"=>$this->input->post("number"),
    //             "email"=>$this->input->post("email"),
    //              "subjects"=>$this->input->post("subjects"),
    //              "experience"=>$this->input->post("experience"),
    //              "adhar"=>$this->input->post("adhar"),
    //              "password"=>$this->input->post("password"));
    //    $b=array("email"=>$this->input->post("email"),
    //             "password"=>$encpass,
    //             "usertype"=>'1');
    //     $this->mainmodel->inreg($a,$b);  
    //     redirect(base_url().'main/masterdashboard');
    //     }
    // }
     //    ****
 //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     //    ****
 // *
 // * @function:trainerprofile
 // * @function:loading trainer profile
 // * @author  Anjali krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
   
//trainer profile update
public function trainerprofile()

{

$this->load->model('mainmodel');
$id=$this->session->id;
$data['user_data']=$this->mainmodel->updateform($id);
$this->load->view('trainer_profile',$data);

}
 //    ****
 // *
 // * @function:updatedetails1
 // * @function:updating the trainer profile
 // * @author  Anjali krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
//trainer profile updates
    public function updatedetails1()
    {

        $a=array("fname"=>$this->input->post("fname"),
        "lname"=>$this->input->post("lname"),
        "address"=>$this->input->post("address"),
        "district"=>$this->input->post("district"),
        "gender"=>$this->input->post("gender"),
        "qualification"=>$this->input->post("qualification"),
        "number"=>$this->input->post("number"),
        "email"=>$this->input->post("email"),
        "subjects"=>$this->input->post("subjects"),
        "experience"=>$this->input->post("experience"),
        "adhar"=>$this->input->post("adhar"));
        $this->load->model('mainmodel');

        if($this->input->post("update"))
        {
           
        $id=$this->session->id;
        $this->mainmodel->updates($a,$id);
        redirect('main/trainerprofile','refresh');
        }
    }
 //    ****
 
 // *
 // * @function:index
 // * @function:loading loginpage
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
 public function index()
    {    
       $this->load->view('index');
    }
      //    ****
  //    ****
 // *
 // * @function:logins
 // * @function:loading logins
 // * @author  Arya k Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
     public function logins()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
            if($this->form_validation->run())
            {
                $this->load->model('mainmodel');
                $email=$this->input->post("email");
                $pass=$this->input->post("password");

                $rslt=$this->mainmodel->select($email,$pass);
             
                if($rslt)
                {
                    $id=$this->mainmodel->getuserid($email);
                    $user=$this->mainmodel->getuser($id);
                    $this->load->library(array('session'));
                    $this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
                    if($_SESSION['status']=='0' && $_SESSION['usertype']=='1')
                    {
                                redirect(base_url().'main/trainerdashboard');
                    }
                    else if($_SESSION['status']=='0' && $_SESSION['usertype']=='0')
                    {
                            redirect(base_url().'main/masterdashboard');
                    }
                    else if($_SESSION['status']=='0' && $_SESSION['usertype']=='2')
                    {
                            redirect(base_url().'main/dashboard');
                    }
                   else
                    {
                        echo "Waiting for Approval";
                    }
                }
                    else
                    {
                         redirect(base_url().'main/logins');
                        
                    }
                }
            else
            {
                redirect('main/strlogin','refresh');
            }
        }


    //  // View User Details
    //  public function view()
    // {
    //     $this->load->model('mainmodel');
    //     $data['n']=$this->mainmodel->view();
    //     $this->load->view('view',$data);
    // }  
     //    ****
  //    ****
 // *
 // * @function:Approve
 // * @function:loading leave approve
 // * @author  Arya k Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****    

     // Approve the user
    public function approve()
    {
        $this->load->model('mainmodel');
       
        $id=$this->uri->segment(3);
        $this->mainmodel->approve($id);
        redirect('main/nview','refresh');
    }  
//     ****
 // *
 // * @function:Reject
 // * @function:loading leave reject
 // * @author  Arya k Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
     //    ****
 
   

    //Reject the user
    public function reject()
    {
        $this->load->model('mainmodel');
       
        $id=$this->uri->segment(3);
        $this->mainmodel->reject($id);
        redirect('main/nview','refresh');
    }  

    // //View Master Dashboard
    // public function master_board()
    // {    
    //     $this->load->view('masterdash');
    // }

    //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     //    ****
 // *
 // * @function:add_traview
 // * @function:loading trainer view
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //view Trainers By Admin

    public function add_traview()
    {    
        $this->load->view('add_traview');
    }

     //    ****
 // *
 // * @function:trainer_registration
 // * @function:loading trainer registeration
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //Add Trainers By Admin
    public function trainer_registration()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("qualification","qualification",'required');
        $this->form_validation->set_rules("number","number",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("subjects","subjects",'required');
        $this->form_validation->set_rules("experience","experience",'required');
        $this->form_validation->set_rules("adhar","adhar",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpswd($pass);
        $a=array("fname"=>$this->input->post("fname"),
                "lname"=>$this->input->post("lname"),
                "address"=>$this->input->post("address"),
                "district"=>$this->input->post("district"),
                "gender"=>$this->input->post("gender"),
                "qualification"=>$this->input->post("qualification"),
                "number"=>$this->input->post("number"),
                "email"=>$this->input->post("email"),
                 "subjects"=>$this->input->post("subjects"),
                 "experience"=>$this->input->post("experience"),
                 "adhar"=>$this->input->post("adhar"),
                 "password"=>$this->input->post("password"));
       $b=array("email"=>$this->input->post("email"),
                "password"=>$encpass,
                "usertype"=>'1');
        $this->mainmodel->inreg($a,$b);  
        redirect(base_url().'main/masterreg');
        }
    }

     //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     //    ****
 // *
 // * @function:user_view
 // * @function:loading trainer view
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //view Trainer Details
     public function user_view()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->views();
        $this->load->view('views',$data);
    }
     //    ****
 // *
 // * @function:deletedetails
 // * @function:delete trainer account
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //Delete Trainers Details
     public function deletedetails()
    {    
            $this->load->model('mainmodel');
            $id=$this->uri->segment(3);
            $this->mainmodel->deletesdetails($id);
    }
    //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     //    ****
 // *
 // * @function:add_course
 // * @function:adding cousre
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****


    //Add Course Details
    public function add_course()
    {
        $this->load->view('addcourse');
    }
     //    ****
 // *
 // * @function:add_courses
 // * @function:adding cousre
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****


    //Add Course Details
    public function add_courses()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("batch","batch",'required');
        $this->form_validation->set_rules("name","name",'required');
        $this->form_validation->set_rules("subjects","subjects",'required');
        $this->form_validation->set_rules("hour","hour",'required');
        $this->form_validation->set_rules("day","day",'required');
       
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');

        $a=array("batch"=>$this->input->post("batch"),
                "name"=>$this->input->post("name"),
                "subjects"=>$this->input->post("subjects"),
                "hour"=>$this->input->post("hour"),
               "day"=>$this->input->post("day"));
        $this->mainmodel->addcourse($a);
        redirect(base_url().'main/add_course');
        }
    }    

    //************TRAINERS DETAILS
    // public function trainer_dash()
    // {
    //     $this->load->view('teacher_dashboard');
    // }


    // //PHONE NOTIFICATION  
    // public function message()
    // {
    //     /*load registration view form*/
    //     $this->load->view('msg');
   
    //     /*Check submit button */
    //     if($this->input->post('save'))
    //     {
    //         $phone=$this->input->post('phone');
    //         $user_message=$this->input->post('message');
    //                 /*Your authentication key*/
    //         $authKey = "3456655757gEr5a019b18";
    //         /*Multiple mobiles numbers separated by comma*/
    //         $mobileNumber = $phone;
    //         /*Sender ID,While using route4 sender id should be 6 characters long.*/
    //         $senderId = "ABCDEF";
    //         /*Your message to send, Add URL encoding here.*/
    //         $message = $user_message;
    //         /*Define route */
    //         $route = "route=4";
    //         /*Prepare you post parameters*/
    //         $postData = array(
    //         'authkey' => $authKey,
    //         'mobiles' => $mobileNumber,
    //         'message' => $message,
    //         'sender' => $senderId,
    //         'route' => $route
    //         );
    //         /*API URL*/
    //         $url="https://control.msg91.com/api/sendhttp.php";
    //         /* init the resource */
    //         $ch = curl_init();
    //         curl_setopt_array($ch, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_POST => true,
    //         CURLOPT_POSTFIELDS => $postData
    //         /*,CURLOPT_FOLLOWLOCATION => true*/
    //         ));
    //         /*Ignore SSL certificate verification*/
    //         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //         /*get response*/
    //         $output = curl_exec($ch);
    //         /*Print error if any*/
    //         if(curl_errno($ch))
    //         {
    //         echo 'error:' . curl_error($ch);
    //         }
    //         curl_close($ch);
                         
    //                 echo "Message Sent Successfully !";
    //         }
    //     }
     //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     //    ****
 // *
 // * @function:leave_req
 // * @function:request leave
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //Trainers Leave Request
    public function leave_req()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->nviews();
        $this->load->view('leave',$data);
    }
      //    ****
 // *
 // * @function:leave_req
 // * @function:loading request leave
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
    //Leave ADD
    public function add_leave()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name","name",'required');
        $this->form_validation->set_rules("cdate","cdate",'required');
        $this->form_validation->set_rules("ldate","ldate",'required');
        $this->form_validation->set_rules("reason","reason",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $a=array("name"=>$this->input->post("name"),
                "cdate"=>$this->input->post("cdate"),
                "ldate"=>$this->input->post("ldate"),
               "reason"=>$this->input->post("reason"));
        $this->mainmodel->leave($a);
        redirect(base_url().'main/leave_req');
        }
    }
 //    ****
 // * @function:notification view
 // * @function:view leave nofication
 // * @author  Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //Admin View Leave Request
    public function nview()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->nview();
        $this->load->view('viewleave',$data);
    }
//    ****
 // * @function:complaince
 // * @function:adding complaince
 // * @author  Remya R
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****
    //***************Complaince
     public function complaint()
    {
        $this->load->view('complaince');
    }
    //    ****
 // * @function:new
 // * @function:loading adding complaince
 // * @author  Remya R
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
     
 //      ****

    //insert complaint
      public function new()
      {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("tname","Teacher Name",'required');
        $this->form_validation->set_rules("sname","Student Name",'required');
        $this->form_validation->set_rules("batch","Batch Name",'required');
        $this->form_validation->set_rules("grievance","Grievance",'required');
       
        if($this->form_validation->run())
        {
            $this->load->model('mainmodel');
            $a=array("tname"=>$this->input->post("tname"),
                    "sname"=>$this->input->post("sname"),
                    "batch"=>$this->input->post("batch"),
                   "grievance"=>$this->input->post("grievance"));
            $this->mainmodel->complaint($a);
            redirect(base_url().'main/leave_req');
        }
    }

     //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
 //    ****
 // *
 // * @function:dailyreport
 // * @function:adding dailyreport
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
 //      ****
   
    public function dailyreport()
{
$this->load->view('dailyreport');
}
//    ****
 // *
 // * @function:dailyreport
 // * @function:adding dailyreport
 // * @author  Anjali krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
 //      ****
   

public function report_action()
{
    $this->load->library('form_validation');
        $this->form_validation->set_rules("batch","batch",'required');
        $this->form_validation->set_rules("date","date",'required');
        $this->form_validation->set_rules("day","day",'required');
        $this->form_validation->set_rules("subject","subject",'required');
        $this->form_validation->set_rules("thr","thr",'required');
       
            $this->load->model('mainmodel');

            $a=array("batch"=>$this->input->post("batch"),
            "date"=>$this->input->post("date"),
            "day"=>$this->input->post("day"),
            "subject"=>$this->input->post("subject"),
            "thr"=>$this->input->post("thr"));
            $this->mainmodel->report($a);

            $hr=$this->input->post("thr");
            $sub=$this->input->post("subject");
            if($sub =='domain')
            {
                $q=$this->mainmodel->domain($hr);
               
            }
            else if($sub =='it')
            {
                $q=$this->mainmodel->it($hr);
               
            }
            else if($sub =='english')
            {
                $q=$this->mainmodel->english($hr);
               
            }
            else if($sub =='ss')
            {
                $q=$this->mainmodel->ss($hr);
               
            }
            else if($sub =='ojt')
            {
                $q=$this->mainmodel->ojt($hr);
               
            }
            $this->mainmodel->total($hr);
            redirect(base_url().'main/dailyreport');
    }


     //// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
     
 //    ****
 // *
 // * @function:reportview
 // * @function:view dailyreport
 // * @author  Anjali Krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
 //      ****

    public function reportview()
    {

        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->reportview();
        $this->load->view('reportview',$data);
    }

   /****
 // *
 // * @function:course_details
 // * @function:load course details view page
 // * @author  Anjali Krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
      ****/

    public function course_details()
    {
        $this->load->view('course_details');
    }

  /****
 // *
 // * @function:course_action
 // * @function:add course details 
 // * @author  Anjali Krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:04/03/2021
      ****/
    public function course_action()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("name","name",'required');
$this->form_validation->set_rules("batch","batch",'required');
$this->form_validation->set_rules("course","course",'required');
$this->form_validation->set_rules("hours","hours",'required');

if($this->form_validation->run())
{

$this->load->model('mainmodel');

$a=array("name"=>$this->input->post("name"),
"batch"=>$this->input->post("batch"),
"course"=>$this->input->post("course"),
"hours"=>$this->input->post("hours"));
$this->mainmodel->coure_action($a);
redirect(base_url().'main/course_details');

   }
}
//// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:05/03/2021
     
 //    ****
 // *
 // * @function:notification
 // * @function:add notification
 // * @author  Anjali Krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:05/03/2021
 //      ****

//notification
public function notification()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->trainersname();
        $this->load->view('notification',$data);
       
    }
    
 // *
 // * @function:notify_action
 // * @function:load notification
 // * @author  Anjali Krishnan
 // * @link    http:'http://localhost/trainerport/'
 // * @date:05/03/2021
 //      ****
    public function notify_action()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("batch","batch",'required');
        $this->form_validation->set_rules("message","message",'required');

        if($this->form_validation->run())
        {

           
            $this->load->model('mainmodel');

            $n=array("fname"=>$this->input->post("fname"),
                "notification"=>$this->input->post("message"),
                "id"=>$this->input->post("tid"));
            $this->mainmodel->notifymodel($n);
            redirect('main/notification','refresh');
        }  
    }//// *
 // * @ UI design $ connection : Radhika L
 // * @link    http:'http://localhost/trainerport/'
 // * @date:05/03/2021
     
 //    ****
 // *
 // * @function:trainer_noti
 // * @function:view notification
 // * @author  Arya K Raj
 // * @link    http:'http://localhost/trainerport/'
 // * @date:05/03/2021
 //      ****



    public function trainer_noti()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->trainer_noti();
        $this->load->view('notify_table_view',$data);
    }

    ///**************************05/03/2021

    //view Trainers Details By Master Trainer

    public function users_view()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewss();
        $this->load->view('viewss',$data);
    }

    //View Complaints By MAster Trainee
    public function comp_view()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->compview();
        $this->load->view('viewcomplaints',$data);
    }
    //Approve /Reject Student Complaints
     // Approve the user
    public function approvecom()
    {
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        $this->mainmodel->approvecom($id);
        redirect('main/comp_view','refresh');
    }   

    //Reject the user 
    public function rejectcom()
    {
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        $this->mainmodel->rejectcom($id);
        redirect('main/comp_view','refresh');
    }
    //View Complaint Status
    public function complaint_status()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->compstatus();
        $this->load->view('complaince',$data);   
    }

    //View Report - Total Hours
     public function totalhour()
    {
        $this->load->model('mainmodel');
        $data['nt']=$this->mainmodel->totalhour();
        $data['nr']=$this->mainmodel->remhour();
        $data['dr']=$this->mainmodel->dduremhour();
        $this->load->view('totalhour',$data);   
    }
    public function totalhours()
    {
        $this->load->model('mainmodel');
        $data['nt']=$this->mainmodel->totalhour();
        $data['nr']=$this->mainmodel->remhour();
        $data['dr']=$this->mainmodel->dduremhour();
        $this->load->view('totalhours',$data);   
    }
    
    //View Report - Remaining Hours by trainee
     public function traine_remains()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->traineremains();
        $this->load->view('traineremains',$data);   
    }

    //View Warning By Trainee From Master Trainee
    public function warning_view()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->warning();
        $this->load->view('warning',$data);   
    }
    
    //View Chart
    public function chart()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->chart();
        $this->load->view('chart',$data);   
    }
     public function charts()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->charts();
        $this->load->view('charts',$data);   
    }

    //Admin View details in his databoard

    public function admin_det()
    {
       $this->load->model('mainmodel');
        $data['user_data']=$this->mainmodel->admindet();
        $this->load->view('admindet',$data);   
    }

   
}