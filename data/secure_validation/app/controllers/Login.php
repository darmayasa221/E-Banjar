<?php 
class Login extends Controller { 
  public function index()
  {
    $this->view('templates/headers/header');
    $this->view('login/index');
    $this->view('templates/footers/footer');
  }
}

?>
