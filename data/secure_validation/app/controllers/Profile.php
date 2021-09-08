<?php 
class Profile extends Controller {
  public function index()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('profile/index');
    $this->view('templates/footers/access/footerAccess');
  }
}
?>