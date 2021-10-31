<?php
class Home extends Controller
{
  public function index()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('home/index');
    $this->view('templates/footers/access/footerAccess');
  }
  public function admin()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuAdmin');
    $this->view('home/index');
    $this->view('templates/footers/access/footerAccess');
  }
}
