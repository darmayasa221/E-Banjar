<?php

class Activitys extends Controller
{
  private $user;
  private $updateData;
  private $to_do;
  private $all_data;
  public function __construct()
  {
    $this->user = $this->sesion();
    $this->all_data = $this->model('Kegiatan_model')->getAllKegiatan();
    $this->to_do = $this->model('Kegiatan_model');
  }

  public function index($action = null)
  {
    if ($this->user['login'] == true) {
      if ($this->user['access'] == 'admin') {
        $this->view('templates/headers/access/header-access');
        $this->view('templates/menu/side-left-menu-admin');
        $this->view('activitys/access/index', $this->all_data);
        $this->view('templates/footers/access/footer-access');
      } else {
        if ($action == 'search') {
          $data = $this->to_do->searchKegiatan();
          $this->view('templates/headers/access/header-access');
          $this->view('templates/menu/side-left-menu-user');
          $this->view('activitys/index', $data);
          $this->view('templates/footers/access/footer-access');
        } else {
          $this->view('templates/headers/access/header-access');
          $this->view('templates/menu/side-left-menu-user');
          $this->view('activitys/index', $this->all_data);
          $this->view('templates/footers/access/footer-access');
        }
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }

  public function activity($kegiatan = null, $id = null)
  {
    if ($this->user['login'] == true) {
      if ($this->user['access'] == 'admin') {
        if (!isset($kegiatan) && !isset($id)) {
          $this->view('templates/headers/access/header-access');
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('activitys/access/formActivity/add-activity', null, 'Masukkan Kegiatan');
          $this->view('templates/footers/access/footer-access');
        } else {
          if (is_array($this->all_data)) {
            foreach ($this->all_data as $key => $value) {
              $nama_kegiatan = str_replace(' ', '', $value['nama_kegiatan']);
              if (($value['id'] == $id) && ($nama_kegiatan == $kegiatan)) {
                $this->view('templates/headers/access/header-access');
                $this->view('templates/menu/side-left-menu-admin');
                $this->view('activitys/access/formActivity/edit-activity', $this->all_data[$key], 'Update Kegiatan');
                $this->view('templates/footers/access/footer-access');
              }
            }
          }
        }
      } else {
        if (isset($kegiatan) && isset($id)) {
          if (is_array($this->all_data)) {
            foreach ($this->all_data as $key => $value) {
              $nama_kegiatan = str_replace(' ', '', $value['nama_kegiatan']);
              if (($value['id'] == $id) && ($nama_kegiatan == $kegiatan)) {
                $this->view('templates/headers/access/header-access');
                $this->view('templates/menu/side-left-menu-user');
                $this->view('activitys/activity/index', $this->all_data[$key]);
                $this->view('templates/footers/access/footer-access');
              }
            }
          }
        } else {
          $this->view('error/pageNotFound');
        }
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }

  public function toDo($action, $id = null)
  {
    if ($this->user['login'] == true) {
      if ($this->user['access'] == 'admin') {
        switch ($action) {
          case ($action == 'update'):
            if (!$_FILES['foto_kegiatan']["size"] == 0) {
              $this->updateData = $this->validation()->isvalid($_FILES, $_POST);
              if ($this->to_do->updateKegiatan($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/activitys');
              };
            } else {
              $this->updateData = $this->validation()->isvalid(null, $_POST);
              if ($this->to_do->updateKegiatan($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/activitys');
              };
            };
          case ($action == 'add'):
            $data = $this->validation()->isvalid($_FILES, $_POST);
            if ($this->to_do->addKegiatan($data) > 0) {
              header('Location: ' . BASEURL . '/activitys');
            };
          case ($action == 'remove'):
            if ($this->to_do->removeKegiatan($id) > 0) {
              header('Location: ' . BASEURL . '/activitys');
            };
          default:
            $this->view('error/pageNotFound');
        }
      } else {
        $this->view('error/pageNotFound');
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }
}
