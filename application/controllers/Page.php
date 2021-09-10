<?php

class Page extends CI_Controller {

   public function user()
	{
      $this->load->view('backend/layouts/header');
      $this->load->view('backend/layouts/sidebar');
      $this->load->view('backend/user');
      $this->load->view('backend/layouts/footer');
   }

   public function hotel()
	{
      $this->load->view('backend/layouts/header');
      $this->load->view('backend/layouts/sidebar');
      $this->load->view('backend/hotel');
      $this->load->view('backend/layouts/footer');
   }

   public function editHotel()
	{
      $this->load->view('backend/layouts/header');
      $this->load->view('backend/layouts/sidebar');
      $this->load->view('backend/edit_hotel');
      $this->load->view('backend/layouts/footer');
   }

   public function ajax()
	{
      // $this->load->view('backend/layouts/header');
      // $this->load->view('backend/layouts/sidebar');
      // $this->load->view('backend/detail_travel');
      // $this->load->view('backend/layouts/footer');
      $array_percobaan = array('nama' => 'Ilham Akhyar', 'umur' => 12);
      echo json_encode($array_percobaan);
   }






   

   public function paketUmrah(){
      // $data['paketumrah'] = $this->Page_model->tampil_data()->result();
      $this->load->view('frontend/paket_umrah');
   }

   public function ajaxRequestPost(){
      $array_percobaan = array('nilai' =>  $this->input->post('nilai'));
      echo json_encode($array_percobaan);
   }


   public function dapatkanData(){
      $this->db->select('*');
      $this->db->from('paket_umrah');
      $this->db->like('NAMA_PAKET_UMROH', $this->input->post('nilai'), 'after');
      $array_percobaan = $this->db->get()->result();
      // var_dump($query);
      echo json_encode($array_percobaan);
   }




   // public function apalah()
   // {
   //    // $detail = $this->m_mahasiswa->detail_data($myvar, 'paket_umrah');
   //    // echo json_encode($myvar);
   //    // $array_percobaan = array($myvar);
   //    $where = array('NAMA' => $this->input->post('nama'));
   //    $data = $this->Page_model->edit_data($where, 'user')->result();
   //    echo json_encode($data);  
   // }

}