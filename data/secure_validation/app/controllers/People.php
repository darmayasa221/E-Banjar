<?php
class People extends Controller {
  public function index()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('people/index');
    $this->view('templates/footers/access/footerAccess');
  }
}

?>
