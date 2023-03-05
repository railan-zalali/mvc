<?php

class Perpustakaan extends Controller
{
	public function index()
	{
		$data['judul'] = 'Daftar Data Perpus';
		$data['prps'] = $this->model('Perpus_model')->getPerpusByKeterangan();
		$this->view('templates/header', $data);
		$this->view('perpustakaan/index', $data);
		$this->view('templates/footer');
	}
	public function detail($id)
	{
		$data['judul'] = 'Detail Data Perpus';
		$data['prps'] = $this->model('Perpus_model')->getPerpusById($id);
		$this->view('templates/header', $data);
		$this->view('perpustakaan/detail', $data);
		$this->view('templates/footer');
	}
	public function tambah()
	{
		// var_dump($_POST);
		if ($this->model('Perpus_model')->tambahDataPerpus($_POST) > 0) {
			Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
			header('Location: '. BASEURL .'/perpustakaan');
			exit;
		} else{
			Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
			header('Location: '. BASEURL . '/perpustakaan');
			exit;
		}
	}
	public function hapus($id)
	{
		// var_dump($_POST);
		if ($this->model('Perpus_model')->hapusDataPerpus($id) > 0) {
			Flasher::setFlash('Berhasil', 'Dihapus', 'success');
			header('Location: '. BASEURL .'/perpustakaan');
			exit;
		} else{
			Flasher::setFlash('Gagal', 'Dihapus', 'error');
			header('Location: '. BASEURL . '/perpustakaan');
			exit;
		}
	}
}
