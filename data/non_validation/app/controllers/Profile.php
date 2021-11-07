<?php
class Profile extends Controller
{
  private $all_data;
  public function __construct()
  {
    $this->all_data = $this->model('Masyarakat_model')->getAllUser();
  }
  public function index()
  {
    $user['login'] = false;
    $user = $this->sesion();
    if ($user['login'] == true) {
      if ($user['access'] == 'admin') {
        $this->view('templates/headers/access/header-access', $user['user']);
        $this->view('templates/menu/side-left-menu-admin');
        $this->view('profile/access/index', $user['user']);
        $this->view('templates/footers/access/footer-access');
      } else {
        // var_dump($user);
        $this->view('templates/headers/access/header-access', $user['user']);
        $this->view('templates/menu/side-left-menu-user');
        $this->view('profile/index', $user['user']);
        $this->view('templates/footers/access/footer-access');
      }
    } else {
      $this->view('error/pageNotFound');
    }
  }
}
