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
    if ($this->user['login'] === true) {
      if ($this->user['access'] === 'admin') {
        if ($action == 'search') {
          $input = $this->validation()->secureValidation($_GET['keyword']);
          $data = $this->to_do->searchKegiatan($input[0]);
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('activitys/access/index', $data, $input[0]);
          $this->view('templates/footers/access/footer-access');
        } else {
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('activitys/access/index', $this->all_data);
          $this->view('templates/footers/access/footer-access');
        }
      } else {
        if ($action === 'search') {
          $input = $this->validation()->secureValidation($_GET['keyword']);
          $data = $this->to_do->searchKegiatan($input[0]);
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-user');
          $this->view('activitys/index', $data, $input[0]);
          $this->view('templates/footers/access/footer-access');
        } else {
          $this->view('templates/headers/access/header-access', $this->user['user']);
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
    if ($this->user['login'] === true) {
      if ($this->user['access'] === 'admin') {
        if (!isset($kegiatan) && !isset($id)) {
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('activitys/access/formActivity/add-activity', null, 'Masukkan Kegiatan');
          $this->view('templates/footers/access/footer-access');
        } else {
          if (is_array($this->all_data)) {
            foreach ($this->all_data as $key => $value) {
              $nama_kegiatan = str_replace(' ', '', $value['nama_kegiatan']);
              if (($value['id'] === $id) && ($nama_kegiatan === $kegiatan)) {
                $this->view('templates/headers/access/header-access', $this->user['user']);
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
              if (($value['id'] === $id) && ($nama_kegiatan === $kegiatan)) {
                $this->view('templates/headers/access/header-access', $this->user['user']);
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
    if ($this->user['login'] === true) {
      if ($this->user['access'] === 'admin') {
        switch ($action) {
          case ($action === 'update'):
            if (!$_FILES['foto_kegiatan']["size"] === 0) {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid($_FILES, $post_valid[0]);
              if ($this->to_do->updateKegiatan($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/activitys');
              };
              exit;
            } else {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid(null, $post_valid[0]);
              if ($this->to_do->updateKegiatan($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/activitys');
              };
              exit;
            };
          case ($action === 'add'):
            $post_valid = $this->validation()->secureValidation($_POST);
            $data = $this->validation()->isvalid($_FILES, $post_valid[0]);
            if ($this->to_do->addKegiatan($data) > 0) {
              header('Location: ' . BASEURL . '/activitys');
            };
            exit;
          case ($action === 'remove'):
            $id_valid = $this->validation()->secureValidation($id);
            if ($this->to_do->removeKegiatan($id_valid[0]) > 0) {
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
