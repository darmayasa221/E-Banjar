<?php

use phpDocumentor\Reflection\Types\This;

class Validation
{
  private $isUser = false;
  private $newData = [];
  private $valid;
  private $tabel_log = 'log';
  private $tabel_masyarakat = 'tb_data_masyarakat';
  private $db;
  public function __construct()
  {
    $this->db = new Databases;
  }

  public function addLog()
  {
    $msg_log = date('Y-m-d H:i:s') . " IP FROM :" . $_SERVER['SERVER_ADDR']  . " ENV : " .  $_SERVER['HTTP_USER_AGENT'];
    $query = "INSERT INTO {$this->tabel_log} VALUES 
      (null, :log)";
    $this->db->query($query);
    $this->db->bind('log', $msg_log);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function securePost($data)
  {
    $newData = $data;
    $log_count = 0;
    foreach ($data as $key => $value) {
      $newData[$key] = htmlspecialchars($value);
      if ($newData[$key] !== $data[$key]) {
        $log_count = $log_count + $this->addLog();
      }
    }
    return [$newData, $log_count];
  }
  public function secureGet($data)
  {
    $newData = $data;
    $log_count = 0;
    $newData = htmlspecialchars($data);
    if ($newData !== $data) {
      $log_count = $log_count + $this->addLog();
    }
    return [$newData, $log_count];
  }
  public function secureValidation($data)
  {
    $value = [];
    if (is_array($data)) {
      $value = $this->securePost($data);
    } else {
      $value = $this->secureGet($data);
    }
    return $value;
    // $newData = $data;
    // $log_count = 0;
    // if (is_array($data)) {
    //   foreach ($data as $key => $value) {
    //     $newData[$key] = htmlspecialchars($value);
    //     if ($newData[$key] !== $data[$key]) {
    //       $log_count = $log_count + $this->addLog();
    //     }
    //   }
    // } else {
    //   $newData = htmlspecialchars($data);
    //   if ($newData !== $data) {
    //     $log_count = $log_count + $this->addLog();
    //   }
    // }
    // return [$newData, $log_count];
  }

  public function validSesion($data)
  {
    $pervSesion =  $_SESSION['user'];
    $file_foto = '';
    if (isset($data['avatar'])) {
      $file_foto = $data['avatar'];
    } else {
      $file_foto = $data['avatar_before'];
    }
    $newData = array('ktp' => 0, 'nama' => '', 'alamat' => '', 'kelamin' => '', 'tgl_lahir' => '', 'no_hp' => 0, 'email' => '', 'avatar' => '', 'role_id' => '', 'date_created' => '');
    foreach ($newData as $key => $value) {
      if (isset($data[$key])) {
        $newData[$key] = $data[$key];
      } else {
        $newData[$key] = $file_foto;
      }
    }

    foreach ($pervSesion as $sKey => $sValue) {
      if ($sKey === 'ktp') {
        if ($data[$sKey] === $sValue) {
          $_SESSION['user'] = $newData;
        }
      }
    }
  }
  public function validationLogin($user = null)
  {
    $query = "SELECT * FROM {$this->tabel_masyarakat} WHERE ktp = :ktp";
    $this->db->query($query);
    $this->db->bind('ktp', $user[0]['username']);
    $result = $this->db->single();
    $row = $this->db->rowCount();
    if ($row === 1) {
      if ($result['ktp'] === $user[0]['password']) {
        return $result;
      } else {
        return null;
      }
    } else {
      return null;
    }
  }
  private function validationInput($array)
  {
    foreach ($array as $key =>  $value) {
      $this->newData[$key] = $value;
      if ($key == 'no_hp') {
        $first = substr($value, 0, 1);
        if ($first == 0) {
          $length = strlen($value);
          $whitout_firts = substr($value, 1, $length - 1);
          $no_hp = "62{$whitout_firts}";
          $this->newData[$key] = $no_hp;
        } else if ($key === 'password' || $key === 'email') {
          $this->newData[$key] = $value;
        } else {
          $this->newData[$key] = htmlspecialchars($value);
        }
      }
    }
    return $this->newData;
  }
  private function validationFile($array)
  {
    $file_type = ['jpg', 'jpeg', 'png'];
    $file_name = "default.png";
    $error_msg = "<p>ukuran file lebih besar dari 2mb</p>";
    foreach ($array as $keys => $new_value) {
      foreach ($new_value as $key => $value) {
        if ($key == 'error') {
          if ($value == 4) {
            return array($keys => $file_name);
          }
        }
        if ($key === 'name') {
          $split_name = explode('.', $value);
          $type = strtolower(end($split_name));
          if (!in_array($type, $file_type)) {
            return array($keys => $file_name);
          } else {
            $file_name = $value;
          }
        }
        if ($key === 'size') {
          if ($value > 2000000) {
            return $error_msg;
          }
        }
        if ($key === 'tmp_name') {
          if (strlen($value) < 0) {
            return;
          } else {
            $generateFile = uniqid();
            move_uploaded_file($value, "../public/img/src/{$generateFile}.png");
            $file_name = "{$generateFile}.png";
            $result = array($keys => $file_name);
            return $result;
          }
        }
      }
    }
  }
  public function isvalid($file = null, $data)
  {
    $input_data =  $this->validationInput($data);
    $result = [];
    foreach ($input_data as $key => $value) {
      $result[$key] = $value;
    }
    if (!is_null($file)) {
      $input_file =  $this->validationFile($file);
      foreach ($input_file as $key => $value) {
        $result[$key] = $value;
      }
    }
    return $result;
  }
}
