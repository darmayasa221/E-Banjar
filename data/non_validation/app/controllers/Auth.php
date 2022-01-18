<?php
class Auth extends Controller
{
  private $access;
  public function __construct()
  {
    $this->access = $this->model('Masyarakat_model')->access();
  }
  public function index($user = null)
  {
    $this->view('templates/headers/header');
    $this->view('login/index', $user);
    $this->view('templates/footers/footer');
  }
  public function Login()
  {
    $data = $this->validation()->secureValidation($_POST);
    $valid = $this->validation()->validationLogin($data);

    if (is_array($valid)) {
      foreach ($this->access as $value) {
        if ($valid['role_id'] === $value['id']) {
          session_start();
          if ($value['access'] === 'admin') {
            $_SESSION['access'] = $value['access'];
            $_SESSION['login'] = true;
            $_SESSION['user'] = $valid;
            header('Location: ' . BASEURL . '/home');
          } else {
            $_SESSION['access'] = $value['access'];
            $_SESSION['login'] = true;
            $_SESSION['user'] = $valid;
            header('Location: ' . BASEURL . '/home');
          }
        }
      }
    } else {
      $this->index($data[0]);
    }
  }
  public function Logout()
  {
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header('Location: ' . BASEURL . '/wellcome');
  }
}
