<?php
class Home extends Controller
{
  public function index()
  {
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-user');
    $this->view('home/index');
    $this->view('templates/footers/access/footer-access');
  }
  public function admin()
  {
    $this->view('templates/headers/access/header-access');
    $this->view('templates/menu/side-left-menu-admin');
    $this->view('home/index');
    $this->view('templates/footers/access/footer-access');
  }
}
