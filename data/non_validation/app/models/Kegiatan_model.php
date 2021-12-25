 <?php

  class Kegiatan_model
  {
    private $tabel = 'tb_kegiatan_masyarakat';
    private $db;
    public function __construct()
    {
      $this->db = new Databases;
    }
    public function getAllKegiatan()
    {
      $this->db->query("SELECT * FROM {$this->tabel}");
      return $this->db->resultSet();
    }
    public function removeKegiatan($id)
    {
      $query = "DELETE FROM {$this->tabel} WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function addKegiatan($data)
    {
      $query = "INSERT INTO {$this->tabel} VALUES 
      (null, :waktu_kegiatan, :nama_kegiatan, :deskripsi, :foto_kegiatan)";
      $date = date("y-m-d", strtotime($data['waktu_kegiatan']));
      $this->db->query($query);
      $this->db->bind('waktu_kegiatan', $date);
      $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
      $this->db->bind('deskripsi', $data['deskripsi']);
      $this->db->bind('foto_kegiatan', $data['foto_kegiatan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function updateKegiatan($data)
    {
      $file_foto = '';
      if (isset($data['foto_kegiatan'])) {
        $file_foto = $data['foto_kegiatan'];
      } else {
        $file_foto = $data['foto_kegiatan_before'];
      }
      $query = "UPDATE {$this->tabel} SET waktu_kegiatan = :waktu_kegiatan, nama_kegiatan = :nama_kegiatan, deskripsi = :deskripsi, foto_kegiatan = :foto_kegiatan WHERE id = :id";
      $id = (int)$data['id'];
      $date = date("y-m-d", strtotime($data['waktu_kegiatan']));
      $this->db->query($query);
      $this->db->bind('waktu_kegiatan', $date);
      $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
      $this->db->bind('deskripsi', $data['deskripsi']);
      $this->db->bind('foto_kegiatan', $file_foto);
      $this->db->bind('id', $id);
      $this->db->execute();

      return $this->db->rowCount();
    }
    public function searchKegiatan($data)

    {
      $query = "SELECT * FROM {$this->tabel} WHERE nama_kegiatan LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$data%");
      return $this->db->resultSet();
    }
  }
