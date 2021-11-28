<?php
class User_model extends CI_model
{
    function create($formArray)
    {
        $this->db->insert('curd_t', $formArray);
    }
    function all()
    {
        return $users = $this->db->get('curd_t')->result_array();
    }
    function getUser($userID){
        $this->db->where('user_id', $userID);
        return $this->db->get('curd_t')->row_array();
    }
    function updateUser($userID, $formArray){
        $this->db->where('user_id',$userID);
        $this->db->update('curd_t',$formArray);
    }
    function deleteUser($userID){
        $this->db->where('user_id', $userID);
        $this->db->delete('curd_t');
    }
}
