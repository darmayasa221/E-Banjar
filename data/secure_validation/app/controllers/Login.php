<?php
class Login extends Controller
{
  private $access;
  public function __construct()
  {
    $this->access = $this->model('Masyarakat_model')->access();
  }
  public function index($error = null)
  {
    $this->view('templates/headers/header');
    $this->view('login/index', $error);
    $this->view('templates/footers/footer');
  }
  public function auth()
  {
    $user = $_POST;
    $users = $this->model('Masyarakat_model')->getAllUser();
    $valid = $this->validation()->validationLogin($user, $users);
    if ((int)$valid) {
      foreach ($this->access as $value) {
        if ($valid['role_id'] == (int)$value['id']) {
          session_start();
          $_SESSION = array('access' => '', 'login' => false, 'user' => '');
          if ($value['access'] == 'admin') {
            $_SESSION['access'] = $value['access'];
            $_SESSION['login'] = true;
            $_SESSION['user'] = $valid['user'];
            header('Location: ' . BASEURL . '/home');
          } else {
            $_SESSION['access'] = $value['access'];
            $_SESSION['login'] = true;
            $_SESSION['user'] = $valid['user'];
            header('Location: ' . BASEURL . '/home');
          }
        }
      }
    } else {
      $error_msg = $valid;
      $this->index($error_msg);
    }
  }
}
