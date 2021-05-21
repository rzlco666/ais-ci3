<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$name)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'name'=>$name
		);
		$this->db->insert('user',$data_user);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('name',$data_user->name);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }

    public function getById($id)
    {
        return $this->db->get_where('project', ["id_project" => $id])->row();
    }
}
?>