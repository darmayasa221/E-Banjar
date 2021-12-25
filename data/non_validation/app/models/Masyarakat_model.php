<?php

class Masyarakat_model
{
  private $tabel = 'tb_data_masyarakat';
  private $db;
  public function __construct()
  {
    $this->db = new Databases;
  }
  public function access()
  {
    $this->db->query("SELECT * FROM user_access");
    return $this->db->resultSet();
  }
  public function getAllUser()
  {
    $this->db->query("SELECT * FROM {$this->tabel}");
    return $this->db->resultSet();
  }
  public function removeMasyarakat($ktp)
  {
    $query = "DELETE FROM {$this->tabel} WHERE ktp = :ktp";
    $this->db->query($query);
    $this->db->bind('ktp', $ktp);

    $this->db->execute();
    return $this->db->rowCount();
  }
  public function addMasyarakat($data)
  {
    var_dump($data);
    $query = "INSERT INTO {$this->tabel} VALUES 
      (:ktp, :nama, :alamat, :kelamin, :tgl_lahir, :no_hp, :email, :avatar, :role_id, :date_created)";
    $date_created =  date("y-m-d h:i:s");
    $date = date("y-m-d", strtotime($data['tgl_lahir']));
    $generet_ktp = gmp_init($data['ktp']);
    $generet_no_hp = gmp_init($data['no_hp']);
    $ktp = gmp_intval($generet_ktp);
    $no_hp = gmp_intval($generet_no_hp);
    $this->db->query($query);
    $this->db->bind('ktp', $ktp);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('kelamin', $data['kelamin']);
    $this->db->bind('tgl_lahir', $date);
    $this->db->bind('no_hp', $no_hp);
    $this->db->bind('email', $data['email']);
    $this->db->bind('avatar', $data['avatar']);
    $this->db->bind('role_id', $data['role_id']);
    $this->db->bind('date_created', $date_created);

    $this->db->execute();
    return $this->db->rowCount();
  }
  public function updateMasyarakat($data)
  {
    $file_foto = '';
    if (isset($data['avatar'])) {
      $file_foto = $data['avatar'];
    } else {
      $file_foto = $data['avatar_before'];
    }
    $query = "UPDATE {$this->tabel} SET nama = :nama, alamat = :alamat, kelamin = :kelamin, tgl_lahir = :tgl_lahir, no_hp = :no_hp, email = :email, avatar = :avatar, role_id = :role_id, date_created = :date_created WHERE ktp = :ktp";
    $date_created =  date("y-m-d h:i:s", strtotime($data['date_created']));
    $date = date("y-m-d", strtotime($data['tgl_lahir']));
    $generet_ktp = gmp_init($data['ktp']);
    $generet_no_hp = gmp_init($data['no_hp']);
    $ktp = gmp_intval($generet_ktp);
    $no_hp = gmp_intval($generet_no_hp);
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('kelamin', $data['kelamin']);
    $this->db->bind('tgl_lahir', $date);
    $this->db->bind('no_hp', $no_hp);
    $this->db->bind('email', $data['email']);
    $this->db->bind('avatar', $file_foto);
    $this->db->bind('role_id', $data['role_id']);
    $this->db->bind('date_created', $date_created);
    $this->db->bind('ktp', $ktp);

    $this->db->execute();
    return $this->db->rowCount();
  }
  public function searchMasyarakat($data)
  {
    $query = "SELECT * FROM {$this->tabel} WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$data%");
    return $this->db->resultSet();
  }
}
