<?php 


class Sekolah extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_sekolah');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('v_tampil');
	}

	function jenjang($nip){
		$where = array('jenjang' => $nip);
		$data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
		$data['kab'] = $this->m_sekolah->tampil_kab()->result();
                $data['kec'] = $this->m_sekolah->tampil_kec()->result();
                $this->load->view('v_tam_jenjang',$data);
	}
        function  kecamatan()
        {
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $this->load->view('v_kecamatan',$data);
        }
        
        function sd($i)
        {
            $where = array('jenjang' => 'SD');
            $data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $data['i'] = $i;
            $this->load->view('v_tam_sekolah',$data);
        }
        function SMP($i)
        {
            $where = array('jenjang' => 'SMP');
            $data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $data['i'] = $i;
            $this->load->view('v_tam_sekolah',$data);
        }
        function MTS($i)
        {
            $where = array('jenjang' => 'MTS');
            $data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $data['i'] = $i;
            $this->load->view('v_tam_sekolah',$data);
        }
        function MA($i)
        {
            $where = array('jenjang' => 'MA');
            $data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $data['i'] = $i;
            $this->load->view('v_tam_sekolah',$data);
        }
        function SMA($i)
        {
            $where = array('jenjang' => 'SMA');
            $data['sekolah'] = $this->m_sekolah->cari_data_jenjang($where,'profil')->result();
            $data['kab'] = $this->m_sekolah->tampil_kab()->result();
            $data['kec'] = $this->m_sekolah->tampil_kec()->result();
            $data['i'] = $i;
            $this->load->view('v_tam_sekolah',$data);
        }

}