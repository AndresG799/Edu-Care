<?php
class LoginModel extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('codeigniter_register');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified == 'yes')
                {
                    $store_password = $this->encrypt->decode($row->password);
                    if($password == $store_password)
                    {
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('name', $row->name);
                        $this->session->set_userdata('type_user', $row->type_user);
                    }
                    else
                    {
                        return 'Wrong Password';
                    }
                }
                else
                {
                return 'First verified your email address';
                }
            }
        }
        else
        {
            return 'Wrong Email Address';
        }
    }

 
    public function getRol(){

        $this->db->select('type_user');
        return $this->db->get('codeigniter_register')->row();
        /*if($query['type_user'] == 1){
            
        }*/

        /*foreach($query->result() as $row){


        }*/
    }
}


?>
