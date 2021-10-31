<?php
class Wellcome extends Controller
{
  public function index()
  {
    $this->view('templates/headers/header');
    $this->view('wellcome/index');
    $this->view('templates/footers/footer');
  }
}
