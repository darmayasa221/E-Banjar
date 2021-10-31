<?php

class Activitys extends Controller
{
  private $updateData;
  private $data;
  private function fetchData($params)
  {
    $this->data = $this->model($params)->getAllKegiatan();
  }
  public function index()
  {
    $this->fetchData('Kegiatan_model');
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('activitys/index', $this->data);
    $this->view('templates/footers/access/footerAccess');
  }

  public function activity($kegiatan = null, $id = null)
  {
    if (isset($kegiatan) && isset($id)) {
      $this->fetchData('Kegiatan_model');
      if (is_array($this->data)) {
        foreach ($this->data as $key => $value) {
          $nama_kegiatan = str_replace(' ', '', $value['nama_kegiatan']);
          if (($value['id'] == $id) && ($nama_kegiatan == $kegiatan)) {
            $this->view('templates/headers/access/headerAccess');
            $this->view('templates/menu/sideLeftMenuUser');
            $this->view('activitys/activity/index', $this->data[$key]);
            $this->view('templates/footers/access/footerAccess');
          }
        }
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }

  public function adminActivitys()
  {
    $this->fetchData('Kegiatan_model');
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuAdmin');
    $this->view('activitys/access/index', $this->data);
    $this->view('templates/footers/access/footerAccess');
  }
  public function adminFormActivity($kegiatan = null, $id = null)
  {;
    if (isset($kegiatan) && isset($id)) {
      $this->view('templates/headers/access/headerAccess');
      $this->view('templates/menu/sideLeftMenuAdmin');
      $this->view('activitys/access/formActivity/index');
      $this->view('templates/footers/access/footerAccess');
    } else {
      $this->fetchData('Kegiatan_model');
      if (is_array($this->data)) {
        foreach ($this->data as $key => $value) {
          $nama_kegiatan = str_replace(' ', '', $value['nama_kegiatan']);
          if (($value['id'] == $id) && ($nama_kegiatan == $kegiatan)) {
            $this->view('templates/headers/access/headerAccess');
            $this->view('templates/menu/sideLeftMenuAdmin');
            $this->view('activitys/access/formActivity/update', $this->data[$key]);
            $this->view('templates/footers/access/footerAccess');
          }
        }
      }
    }
  }
  public function updateData()
  {
    if (!$_FILES['foto_kegiatan']["size"] == 0) {
      $this->updateData = $this->validation()->isvalid($_FILES, $_POST);
      if ($this->model('Kegiatan_model')->updateKegiatan($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/activitys/adminActivitys');
      };
    } else {
      $this->updateData = $this->validation()->isvalid(null, $_POST);
      if ($this->model('Kegiatan_model')->updateKegiatan($this->updateData) > 0) {
        header('Location: ' . BASEURL . '/activitys/adminActivitys');
      };
    }
  }
  public function remove($id)
  {
    if ($this->model('Kegiatan_model')->removeKegiatan($id) > 0) {
      header('Location: ' . BASEURL . '/activitys/adminActivitys');
    };
  }
  public function result()
  {
    $data = $this->validation()->isvalid($_FILES, $_POST);
    if ($this->model('Kegiatan_model')->addKegiatan($data) > 0) {
      header('Location: ' . BASEURL . '/activitys/adminActivity');
    };
  }
}
