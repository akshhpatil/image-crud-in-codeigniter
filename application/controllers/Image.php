<?php
class Image extends CI_controller
{ 
		  
      public function __construct()
	   {
	   parent::__construct();
	   $this->load->helper('url','form'); /*load base url*/
     $this->load->library('upload');
     $this->load->model('image_model');
	    }

    //Function for display data 
        public function DisplayData()
        {
          $data["fetch_userdata"]=$this->image_model->fetchuserdata();
          $this->load->view('display_images',$data);
        }


       //save data
        public function savedata()
	      {
		   $this->load->view('image_view');
	     if($this->input->post('submit'))
		  {

       $userprofile=$_FILES['userprofile']['name'];
			 $config['upload_path']='./assets/uploads/';
       $config['allowed_types']='jpg|jpeg|png|gif';
       $this->load->library('upload');
       $this->upload->initialize($config);
       if ($this->upload->do_upload('userprofile'))
       {
         $image=$this->upload->data();
         $data=array(
        'Name'=>$this->input->post('name'),
        'Email'=>$this->input->post('email'),
        'profile'=>$userprofile
                    );


       $success=$this->image_model->adddata($data);
       if ($success)
           {
             redirect('Image/displaydata');
         // echo "Data added successfully..!!";
           }
           else
           {
           echo"Error while adding data..!!";
           }          

     
       }
           else
           {
           echo"Error while adding data..!!";
           }

      }
   }

        //update data 
        public function UpdateData($id)
      {

           if($this->input->post("submit")) 
             {
                $userprofile= $_FILES['userprofile']['name'];
                $config['upload_path']='./assets/uploads';
                $config['allowed_types']='jpg|jpeg|png|gif';
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userprofile'))
                {
                $image=$this->upload->data();
                $data= array(
              'Name'=>$this->input->post('name'),
              'Email'=>$this->input->post('email'),
              'profile'=>$userprofile
                             );
                   
            $success = $this->image_model->updatedata($data, $id);
            if ($success)
            {
             redirect('Image/displaydata');
             // echo "Data updated ";
            }
             else
            {
             echo "Error while updating data..";
             }
    
          }
             else
           {
           $data=array(
          'Name'=>$this->input->post('name'),
          'Email'=>$this->input->post('email'),
                       );


       $success=$this->image_model->updatedata($data,$id);
      if ($success)
          {
          echo "Data updated successfully..!!";
          redirect('Image/displaydata');
           }
          else
          {
           echo "Error while updating data ";
          }
      }
    }
            
 


 // fetch a sinle record 
    $data["fetch_useriddata"]=$this->image_model->fetcheditiddata($id);
    $this->load->view("image_update",$data);
    }





       public function DeleteData($id,$profile)
        {
          $path='./assets/uploads/';
          @unlink($path.$profile);

          $where=array ('id'=>$id);
          $this->image_model->deletedata($where);
          redirect('Image/displaydata');

        }

   
}
?>
			
		

	
     


































