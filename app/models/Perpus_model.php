<?php 

class Perpus_model {
	private $table = 'pinjaman';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}


	public function getAllPerpus()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getPerpusById($id)
	{
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id_pinjam=:id_pinjam');
		$this->db->bind('id_pinjam', $id);
		return $this->db->single();
	}
	public function getPerpusByKeterangan($keterangan = 'dipinjam')
	{
		$this->db->query('SELECT * FROM '.$this->table.' WHERE keterangan=:keterangan');
		$this->db->bind('keterangan', $keterangan);
		return $this->db->resultSet();
	}
	public function tambahDataPerpus($data)
	{
		$query = "INSERT INTO pinjaman
					VALUES 
						('', null, null, :tanggal, :nama_siswa, :kelas, :abjad, :nama_buku, :jumlah_pinjam, null, 'dipinjam')";
		$this->db->query($query);
		$this->db->bind('tanggal', $data['tanggal']);
		$this->db->bind('nama_siswa', $data['nama_siswa']);
		$this->db->bind('kelas', $data['kelas']);
		$this->db->bind('abjad', $data['abjad']);
		$this->db->bind('nama_buku', $data['nama_buku']);
		$this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);

		$this->db->execute();

		return $this->db->rowCount();
		
	}
	public function hapusDataPerpus($id)
	{
		$query = "DELETE FROM pinjaman WHERE id_pinjam = :id_pinjam";
		$this->db->query($query);
		$this->db->bind('id_pinjam', $id);
		
		$this->db->execute();
		
		return $this->db->rowCount();
	}
}