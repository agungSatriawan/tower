<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_tower extends CI_Model
{
    public function loadMaster(){
      
        $result = $this->db->get('sites');
        return $result->result_array();
    }
}
