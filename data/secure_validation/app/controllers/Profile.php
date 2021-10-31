<?php
class Profile extends Controller
{
  private $data;
  private function fetchData($params)
  {
    $this->data = $this->model($params)->getAllUser();
  }
  public function index()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('profile/index');
    $this->view('templates/footers/access/footerAccess');
  }
  public function adminProfile()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuAdmin');
    $this->view('profile/access/adminProfile/index');
    $this->view('templates/footers/access/footerAccess');
  }
  // public function editProfile($ktp = null, $nama = null)
  // {
  //   if (isset($ktp) && isset($nama)) {
  //     $this->fetchData('User_masyarakat_model');
  //     if (is_array($this->data)) {
  //       foreach ($this->data as $key => $value) {
  //         $nama_masyarakat = str_replace(' ', '', $value['nama']);
  //         if (($value['ktp'] == $ktp) && ($nama_masyarakat == $nama)) {
  //           $this->view('templates/headers/access/headerAccess');
  //           $this->view('templates/menu/sideLeftMenuAdmin');
  //           $this->view('profile/access/editProfile', $this->data[$key]);
  //           $this->view('templates/footers/access/footerAccess');
  //         }
  //       }
  //     }
  //   } else {
  //     $this->view('error/pageNotFound');
  //   }
  // }
  // public function result()
  // {
  //   $data = $this->validation()->isvalid($_FILES, $_POST);
  //   if ($this->model('User_masyarakat_model')->addMasyarakat($data) > 0) {
  //     header('Location: ' . BASEURL . '/people/adminIndex');
  //   };
  // }
}
