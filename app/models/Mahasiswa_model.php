<?php

class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaByID($id){
    	$this->db->query('SELECT * FROM '. $this->table.' WHERE id=:id');
    	$this->db->bind('id', $id);
    	return $this->db->single();
	}
	
	public function tambahDataMhs($data){
		$query = "INSERT INTO mahasiswa
					VALUES 
					('', :nama, :nrp, :email, :jurusan)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();

	}

	public function hapusDataMhs($id){
		$query = "DELETE FROM mahasiswa WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataMhs($data){
		$query = "UPDATE mahasiswa SET 
					nama = :nama, 
					nrp = :nrp,
					email = :email,
					jurusan = :jurusan
				 WHERE id = :id ";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariDataMahasiswa(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM mahasiswa WHERE nama LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

}