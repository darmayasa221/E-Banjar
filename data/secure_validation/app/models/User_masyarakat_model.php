<?php

class User_masyarakat_model
{
  private $tabel = 'tb_data_masyarakat';
  private $db;
  public function __construct()
  {
    $this->db = new Databases;
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
    $query = "INSERT INTO {$this->tabel} VALUES 
      (:ktp, :nama, :alamat, :kelamin, :tgl_lahir, :no_hp, :email, :avatar)";
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
    $query = "UPDATE {$this->tabel} SET nama = :nama, alamat = :alamat, kelamin = :kelamin, tgl_lahir = :tgl_lahir, no_hp = :no_hp, email = :email, avatar = :avatar WHERE ktp = :ktp";
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
    $this->db->bind('ktp', $ktp);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
