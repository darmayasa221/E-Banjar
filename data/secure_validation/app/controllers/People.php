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
    $this->fetchData('Masyarakat_model');
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-user');
    $this->view('people/index', $this->data);
    $this->view('templates/footers/access/footer-access');
  }
  public function peoples()
  {
    $this->fetchData('Masyarakat_model');
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-admin');
    $this->view('people/access/index', $this->data);
    $this->view('templates/footers/access/footer-access');
  }

  public function form($ktp = null, $nama = null)
  {
    if (!isset($ktp) && !isset($nama)) {
      $this->view('templates/headers/access/header-access');
      $this->view('templates/menu/side-left-menu-admin');
      $this->view('people/access/formPeople/add-people', null, 'Tambah Masyarakat');
      $this->view('templates/footers/access/footer-access');
    } else {
      $this->fetchData('Masyarakat_model');
      if (is_array($this->data)) {
        foreach ($this->data as $key => $value) {
          $nama_masyarakat = str_replace(' ', '', $value['nama']);
          if (($value['ktp'] == $ktp) && ($nama_masyarakat == $nama)) {
            $this->view('templates/headers/access/header-access');
            $this->view('templates/menu/side-left-menu-admin');
            $this->view('people/access/formPeople/edit-people', $this->data[$key], 'Update Data Masyarakat');
            $this->view('templates/footers/access/footer-access');
          }
        }
      }
    }
  }
  public function update()
  {
    if (!$_FILES['avatar']["size"] == 0) {
      $this->updateData = $this->validation()->isvalid($_FILES, $_POST);
      if ($this->model('Masyarakat_model')->updateMasyarakat($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/people/peoples');
      };
    } else {
      $this->updateData = $this->validation()->isvalid(null, $_POST);
      if ($this->model('Masyarakat_model')->updateMasyarakat($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/people/peoples');
      };
    }
  }
  public function remove($ktp)
  {
    if ($this->model('Masyarakat_model')->removeMasyarakat($ktp) > 0) {
      header('Location: ' . BASEURL . '/people/peoples');
    };
  }
  public function add()
  {
    $data = $this->validation()->isvalid($_FILES, $_POST);
    if ($this->model('Masyarakat_model')->addMasyarakat($data) > 0) {
      header('Location: ' . BASEURL . '/people/peoples');
    };
  }
  public function search()
  {
    $this->data = $this->model('Masyarakat_model')->searchMasyarakat();
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-user');
    $this->view('people/index', $this->data);
    $this->view('templates/footers/access/footer-access');
  }
}
