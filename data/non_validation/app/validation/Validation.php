<?php
class Validation
{
  private $isUser = false;
  private $newData = [];
  private $valid;

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
  public function validationLogin($user = null, $users = null,)
  {
    $error = array('username' => '', 'password' => '');
    foreach ($users as $value_users) {
      if ($user['email'] === '' &&  $user['password'] === '') {
        $error['password'] = "Password Kosong !";
        $error['username'] = "Username Kosong !";
      }
      if ($user['email'] !== $value_users['email']) {
        $error['username'] = "Username Tidak Terdaftar !";
      }
      if ($user['password'] !== $value_users['ktp']) {
        $error['password'] =  "Sassword Salah !";
      }
      if ($user['email'] === $value_users['email'] && $user['password'] === $value_users['ktp']) {
        $this->valid = array('user' => $value_users, 'role_id' => (int)$value_users['role_id']);
        $this->isUser = true;
      }
    }
    if ($this->isUser == true) {
      return $this->valid;
    } else {
      return $error;
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
        } else {
          $this->newData[$key] = $value;
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
