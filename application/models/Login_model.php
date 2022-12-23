<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends MY_Model {

    protected $table = 'user';

    public function getDefaultValues() {
        return [
            'email' => '',
            'password' => ''
        ];
    }

    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ]
        ];
        return $validationRules;
    }

    public function run($input){
        $query = $this->where('email',strtolower($input->email))
                      ->where('is_active',1)
                      ->first();
        if(!empty($query)&& hashEncryptVerify($input->password,$query->password)){
            $sess_data=[
                'id' => $query->id,
                'name' => $query->name,
                'email' => $query->email,
                'role' => $query->role,
                'is_login' => true
            ];
            $this->session->set_userdata($sess_data);
            return true;
        }


    }
    

}

/* End of file ModelName.php */
