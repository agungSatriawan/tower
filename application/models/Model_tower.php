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
    public function get_jenis_pekerjaan()
    {
        return $this->db->query("
       SELECT 
        SUM(CASE WHEN pekerjaan = 'B2S' THEN 1 ELSE 0 END) as pembangunan,
        SUM(CASE WHEN pekerjaan = 'perkuatan' THEN 1 ELSE 0 END) as perkuatan
        FROM sites;
    ")->row();
    }
    public function total_per_site()
    {
        return $this->db->query("
      SELECT
        SUM(IF(pekerjaan = 'B2S', max_photo, 0)) jumlah_pembangunan,
        SUM(IF(pekerjaan = 'Perkuatan', max_photo, 0)) jumlah_perkuatan
        FROM
        (
            SELECT
            section.pekerjaan,
            section.`name` AS progress,
            photo_categories.`name` AS detail_photo,
            photo_categories.max_photo
            FROM
            photo_categories
            LEFT JOIN section ON section.id = photo_categories.section_id
        ) AS a
    ")->row();
    }
    public function total_progress_per_pekerjaan()
    {
        return $this->db->query("
     SELECT
  SUM(CASE WHEN pekerjaan = 'B2S' THEN 1 ELSE 0 END) AS progress_pembangunan,
  SUM(CASE WHEN pekerjaan = 'perkuatan' THEN 1 ELSE 0 END) AS progress_perkuatan
FROM
  (
    SELECT
      section.pekerjaan,
      photos.site_id,
      photos.file_path
    FROM
      photos
      LEFT JOIN photo_categories ON photo_categories.id = photos.category_id
      LEFT JOIN section ON section.id = photo_categories.section_id
  ) AS a
    ")->row();
    }
}
