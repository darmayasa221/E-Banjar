<?php
class People extends Controller
{
  private $data;
  private $updateData;
  private function fetchData($params)
  {
    $this->data = $this->model($params)->getAllUser();
  }
  public function index()
  {
    $this->fetchData('User_masyarakat_model');
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('people/index', $this->data);
    $this->view('templates/footers/access/footerAccess');
  }
  public function adminIndex()
  {
    $this->fetchData('User_masyarakat_model');
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuAdmin');
    $this->view('people/access/index', $this->data);
    $this->view('templates/footers/access/footerAccess');
  }

  public function people($ktp = null, $nama = null)
  {
    if (isset($ktp) && isset($nama)) {
      $this->fetchData('User_masyarakat_model');
      if (is_array($this->data)) {
        foreach ($this->data as $key => $value) {
          $nama_masyarakat = str_replace(' ', '', $value['nama']);
          if (($value['ktp'] == $ktp) && ($nama_masyarakat == $nama)) {
            $this->view('templates/headers/access/headerAccess');
            $this->view('templates/menu/sideLeftMenuAdmin');
            $this->view('profile/access/editProfile', $this->data[$key]);
            $this->view('templates/footers/access/footerAccess');
          }
        }
      }
    } else {
      $this->view('templates/headers/access/headerAccess');
      $this->view('templates/menu/sideLeftMenuAdmin');
      $this->view('profile/access/addProfile');
      $this->view('templates/footers/access/footerAccess');
    }
  }
  public function result()
  {
    $data = $this->validation()->isvalid($_FILES, $_POST);
    if ($this->model('User_masyarakat_model')->addMasyarakat($data) > 0) {
      header('Location: ' . BASEURL . '/people/adminIndex');
    };
  }
  public function updateData()
  {
    if (!$_FILES['avatar']["size"] == 0) {
      $this->updateData = $this->validation()->isvalid($_FILES, $_POST);
      if ($this->model('User_masyarakat_model')->updateMasyarakat($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/people/adminIndex');
      };
    } else {
      $this->updateData = $this->validation()->isvalid(null, $_POST);
      if ($this->model('User_masyarakat_model')->updateMasyarakat($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/people/adminIndex');
      };
    }
  }
  public function remove($ktp)
  {
    if ($this->model('User_masyarakat_model')->removeMasyarakat($ktp) > 0) {
      header('Location: ' . BASEURL . '/people/adminIndex');
    };
  }
}
