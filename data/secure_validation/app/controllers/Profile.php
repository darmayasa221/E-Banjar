<?php
class Profile extends Controller
{

  public function index()
  {
    $user = $this->sesion();
    if ($user['login'] == true) {
      if ($user['access'] == 'admin') {
        $this->view('templates/headers/access/header-access', $user['user']);
        $this->view('templates/menu/side-left-menu-admin');
        $this->view('profile/access/index', $user['user']);
        $this->view('templates/footers/access/footer-access');
      } else {
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
