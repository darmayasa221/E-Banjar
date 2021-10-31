<?php
class Validation
{

  private $newData = [];
  private $regex = '';

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
    $error_msg = "<p>ukuran file lebih besar dari 2mb<p>";
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
        if ($key == 'size') {
          if ($value > 2000000) {
            return $error_msg;
          }
        }
        if ($key == 'tmp_name') {
          if (strlen($value) < 0) {
            return;
          } else {
            $generateFile = uniqid();
            move_uploaded_file($value, "../public/img/avatar/{$generateFile}.png");
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
