<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_tower extends CI_Model
{
    public function loadMaster(){
      
        $result = $this->db->get('sites');
        return $result->result_array();
    }

    public function save_image($siteId, $imageName)
    {
        // Contoh: Update kolom 'image' di tabel 'sites'
        $this->db->insert('photos', ['file_path' => $imageName, 'site_id' => $siteId]);
    }
}
