<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tugasakhir extends CI_Controller {

	public function index($page=0)
	{
		
		$start= ($page+1)*1;
		$data['no'] = $start;
		$data['c_tugasakhir'] = $this->m_tugasakhir->tampil_data(3,$start)->result();
		$config['base_url'] = 'http://localhost/tugasakhir/c_tugasakhir/index';
		$config['total_rows'] = 10;
		$config['per_page'] = 2;
		$choice				= $config["total_rows"] / $config['per_page'];

		$config["num_links"]	= 1;
		$config['full_tag_open']   = '<ul class="pagination pagination-md m-t-xs m-b-xs">';
        $config['full_tag_close']  = '</ul>';

        $config['first_link']      = 'First';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link']       = 'Last';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';

        $config['next_link']       = ' <i class="glyphicon glyphicon-menu-right"></i> ';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = ' <i class="glyphicon glyphicon-menu-left"></i> ';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';


		$this->pagination->initialize($config);

		$data['link'] = $this->pagination->create_links();
        
		$this->load->view('template/footer');
		$this->load->view('v_tugasakhir', $data);
		$this->load->view('template/header');
	}

    public function tambah_aksi(){
		$this->form_validation->set_rules('');
		if ($this->form_validation->run() == false){
			$th_angkatan	= $this->input->post('th_angkatan');
			$konsentrasi	= $this->input->post('konsentrasi');
			$nim			= $this->input->post('nim');
			$judul			= $this->input->post('judul');
			$pembimbing		= $this->input->post('pembimbing');
			$waktu			= $this->input->post('waktu');
			$dokumen		= $_FILES['dokumen'];
		if ($dokumen=''){}else{
			$config['upload_path'] 		= './uploads';
			$config['allowed_types']	= 'pdf';
			$config['encrypt_name']		= TRUE;

			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('dokumen')){
				redirect('c_tugasakhir');
			}else{
				$dokumen=$this->upload->data('file_name');
			}
		}
		$status			= $this->input->post('status');

		$data = array(
			'th_angkatan'		=> $th_angkatan,
			'konsentrasi'		=> $konsentrasi,
			'nim'				=> $nim,
			'judul'				=> $judul,
			'pembimbing'		=> $pembimbing,
			'waktu'				=> $waktu,
			'dokumen'			=> $dokumen,
			'status'			=> $status,

		);

	}
		$this->m_tugasakhir->input_data($data,'ta_tbl');
		redirect('c_tugasakhir');
	}
		

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $this->m_tugasakhir->hapus_data($where, 'ta_tbl');
        redirect('c_tugasakhir');
    }

	public function update($id)
    {
        
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
			$data = $this->input->post();
			$dokumen		= $_FILES['dokumen'];
			if ($dokumen){
				$config['upload_path'] 		= './uploads';
				$config['allowed_types']	= 'pdf';
				$config['encrypt_name']		= TRUE;

				$this->load->library('upload');
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('dokumen')){
					echo "Upload Gagal"; die();
				}else{
					$dokumen=$this->upload->data('file_name');
				}
			}else{
				unset($data['dokumen']);
			}
            

           $this->m_tugasakhir->update($id,$data);

            redirect('c_tugasakhir');
        }else{
        $data['ta'] = $this->db->get_where('ta_tbl',['id'=> $id])->row();
        $this->load->view('template/header');
		$this->load->view('update',$data);
		$this->load->view('template/footer');
	
        }
        
    }

	public function search($page=0)
	{
		$keyword = $this->input->post('keyword');
		$data['c_tugasakhir']=$this->m_tugasakhir->get_keyword($keyword);
		$start= ($page+1)*1;
		$config['base_url'] = 'http://localhost/tugasakhir/c_tugasakhir/index';
		$config['total_rows'] = 5;
		$config['per_page'] = 2;

		$config["num_links"]	= 1;
		$config['full_tag_open']   = '<ul class="pagination pagination-md m-t-xs m-b-xs">';
        $config['full_tag_close']  = '</ul>';

        $config['first_link']      = 'First';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link']       = 'Last';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';

        $config['next_link']       = ' <i class="glyphicon glyphicon-menu-right"></i> ';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = ' <i class="glyphicon glyphicon-menu-left"></i> ';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';

		$this->pagination->initialize($config);

		$data['link'] = $this->pagination->create_links();

		$this->load->view('template/footer');
		$this->load->view('v_tugasakhir', $data);
		$this->load->view('template/header');
	}

	
}
