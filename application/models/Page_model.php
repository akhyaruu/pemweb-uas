<?php

class Page_model extends CI_Model {
   public function tampil_data(){
		return $this->db->get('paket_umrah');
	}

	public function edit_data($where, $table) {
      return $this->db->get_where($table, $where);
   } 


}