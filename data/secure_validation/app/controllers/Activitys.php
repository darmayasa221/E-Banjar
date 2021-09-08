<?php
class Activitys extends Controller {
  public function index()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('activitys/index');
    $this->view('templates/footers/access/footerAccess');
  }

  public function activity ()
  {
    $this->view('templates/headers/access/headerAccess');
    $this->view('templates/menu/sideLeftMenuUser');
    $this->view('activitys/activity/index');
    $this->view('templates/footers/access/footerAccess');
  } 
}
?>

