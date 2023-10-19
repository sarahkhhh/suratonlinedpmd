<?php

class Pengajuan_track_model extends CI_Model
{
    public function insert_p_surat($data)
    {
        $query = $this->db->insert('pengajuan_surat', $data);
        if ($query) {
            return true;
            return $query;
        } else {
            return false;
        }
    }

    public function findById($id)
    {
        $query = $this->db->get_where('upload_file', ['id_user' => $id])->row_array();
        return $query;
    }

    public function showById($id)
    {
        $query = $this->db->get_where('pengajuan_surat', ['id_user' => $id])->row_array();
        return $query;
    }

    public function userIsFilled($iduser)
    {
        $result = $this->db->get_where("pengajuan_surat", ['id_user' => $iduser]);
        if ($result->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function delete_row($id)
    {
        $this->db->where("id_user", $id);
        $this->db->delete("pengajuan_surat");
        $this->db->where("id_user", $id);
        $this->db->delete("upload_file");
    }
}
