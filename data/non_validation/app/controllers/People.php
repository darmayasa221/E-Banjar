<?php
class People extends Controller
{
  private $user;
  private $updateData;
  private $to_do;
  private $all_data;
  public function __construct()
  {
    $this->user = $this->sesion();
    $this->all_data = $this->model('Masyarakat_model')->getAllUser();
    $this->to_do = $this->model('Masyarakat_model');
  }
  public function index($action = null)
  {
    if ($this->user['login'] == true) {
      if ($this->user['access'] == 'admin') {
        if ($action == 'search') {
          $input = $this->validation()->secureValidation($_GET['keyword']);
          $data = $this->to_do->searchMasyarakat($input[0]);
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('people/access/index', $data, $input[0]);
          $this->view('templates/footers/access/footer-access');
        } else {
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-admin');
          $this->view('people/access/index', $this->all_data);
          $this->view('templates/footers/access/footer-access');
        }
      } else {
        if ($action == 'search') {
          $input = $this->validation()->secureValidation($_GET['keyword']);
          $data = $this->to_do->searchMasyarakat($input[0]);
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-user');
          $this->view('people/index', $data, $input[0]);
          $this->view('templates/footers/access/footer-access');
        } else {
          $this->view('templates/headers/access/header-access', $this->user['user']);
          $this->view('templates/menu/side-left-menu-user');
          $this->view('people/index', $this->all_data);
          $this->view('templates/footers/access/footer-access');
        }
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }

  public function people($ktp = null, $nama = null)
  {
    if (!isset($ktp) && !isset($nama)) {
      $this->view('templates/headers/access/header-access', $this->user['user']);
      $this->view('templates/menu/side-left-menu-admin');
      $this->view('people/access/formPeople/add-people', null, 'Tambah Masyarakat');
      $this->view('templates/footers/access/footer-access');
    } else {
      if (is_array($this->all_data)) {
        foreach ($this->all_data as $key => $value) {
          $nama_masyarakat = str_replace(' ', '', $value['nama']);
          if (($value['ktp'] == $ktp) && ($nama_masyarakat == $nama)) {
            $this->view('templates/headers/access/header-access', $this->user['user']);
            $this->view('templates/menu/side-left-menu-admin');
            $this->view('people/access/formPeople/edit-people', $this->all_data[$key], 'Update Data Masyarakat');
            $this->view('templates/footers/access/footer-access');
          }
        }
      }
    }
  }

  public function toDo($action, $ktp = null)
  {
    if ($this->user['login'] === true) {
      if ($this->user['access'] === 'admin') {
        switch ($action) {
          case ($action === 'update'):
            if (!$_FILES['avatar']["size"] == 0) {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid($_FILES, $post_valid[0]);
              $this->validation()->validSesion($this->updateData);
              if ($this->to_do->updateMasyarakat($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/people');
              };
              exit;
            } else {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid(null, $post_valid[0]);
              $this->validation()->validSesion($this->updateData);
              if ($this->to_do->updateMasyarakat($this->updateData) > 0) {
                header('Location: ' . BASEURL . '/people');
              };
              exit;
            }
          case ($action === 'add'):
            $post_valid = $this->validation()->secureValidation($_POST);
            $data = $this->validation()->isvalid($_FILES, $post_valid[0]);
            if ($this->to_do->addMasyarakat($data) > 0) {
              header('Location: ' . BASEURL . '/people');
              exit;
            };
          case ($action === 'remove'):
            if ($this->to_do->removeMasyarakat($ktp) > 0) {
              header('Location: ' . BASEURL . '/people');
            };
          default:
            $this->view('error/pageNotFound');
        }
      } else {
        switch ($action) {
          case ($action === 'update'):
            if (!$_FILES['avatar']["size"] === 0) {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid($_FILES, $post_valid[0]);
              if ($this->to_do->updateMasyarakat($this->updateData) > 0) {
                $this->validation()->validSesion($this->updateData);
                header('Location: ' . BASEURL . '/profile');
              };
              exit;
            } else {
              $post_valid = $this->validation()->secureValidation($_POST);
              $this->updateData = $this->validation()->isvalid(null, $post_valid[0]);
              if ($this->to_do->updateMasyarakat($this->updateData) > 0) {
                $this->validation()->validSesion($this->updateData);
                header('Location: ' . BASEURL . '/profile');
              };
              exit;
            }
          default:
            $this->view('error/pageNotFound');
        }
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }
}
