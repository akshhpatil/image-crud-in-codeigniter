
<?php
    class image_model extends CI_Model
    {
        //insert
        function adddata($data)
        {
            $this->db->insert("code_image",$data);
            return true;
        }
        
        //Select query 
        function fetchuserdata()
        {
            $this->db->select('*');
            $this->db->from('code_image');
            $query = $this->db->get();
            return $query->result();
        }

        /* Fetch data id wise for update */
         public function fetcheditiddata($id)
         {
            $this->db->select('*');
            $this->db->from('code_image');
            $this->db->where('Id',$id);
            $query= $this->db->get();
            return $query->row();
            
         } 

         /* Update query */
         public function updatedata($data,$id)
         {
            $this->db->where('Id',$id);
            $this->db->update('code_image',$data);
            return true;
         }

        

         public function deletedata($where)
         {
           $this->db->where($where);
           $this->db->delete('code_image');
           return true;
          }
      

     
}
?>