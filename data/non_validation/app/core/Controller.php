<?php
class Controller
{
  public function view($view, $data = [], $param = null)
  {
    require_once '../app/views/' . $view . '.php';
  }
  public function model($data)
  {
    require_once "../app/models/{$data}.php";
    return new $data;
  }
  public function sesion()
  {
    session_start();
    return $_SESSION;
  }
  public function validation()
  {
    require_once "../app/validation/validation.php";
    return new Validation;
  }
}
