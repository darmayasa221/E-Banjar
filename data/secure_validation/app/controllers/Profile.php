<?php
class Profile extends Controller
{
  public function index()
  {
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-user');
    $this->view('profile/index');
    $this->view('templates/footers/access/footer-access');
  }
  public function profile()
  {
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-admin');
    $this->view('profile/access/index');
    $this->view('templates/footers/access/footer-access');
  }
}
