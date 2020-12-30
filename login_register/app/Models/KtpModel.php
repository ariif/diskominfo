<?php

namespace App\Models;

use CodeIgniter\Model;

class KtpModel extends Model
{
    protected $table = 'ktp';

    public function get_all_ktp()
    {
        $builder = $this->db->table('ktp');
        return $builder->get();
    }

    public function get_ktp($id = false)
    {
        // return $this->db->table('tbl_departemen')->get()->getResultArray();



        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['ktp_id' => $id]);
        }
    }

    public function insert_ktp($data)
    {
        return $this->db->table('ktp')->insert($data);
    }

    public function edit_ktp($ktp_id)
    {
        return $this->db->table('ktp')->where('ktp_id', $ktp_id)->get()->getRowArray();
    }

    public function update_ktp($data, $ktp_id)
    {
        return $this->db->table('ktp')->update($data, array('ktp_id' => $ktp_id));
    }

    public function delete_ktp($ktp_id)
    {
        return $this->db->table('ktp')->delete(array('ktp_id' => $ktp_id));
    }
}
