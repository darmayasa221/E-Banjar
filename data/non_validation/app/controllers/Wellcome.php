<?php
class Wellcome extends Controller
{
  public function index($action = null)
  {
    if ($action == 'search') {
      $data = $this->model('Kegiatan_model')->searchKegiatan();
      $this->view('templates/headers/header');
      $this->view('wellcome/index', $data);
      $this->view('templates/footers/footer');
    } else {
      $data = $this->model('Kegiatan_model')->getAllKegiatan();
      $this->view('templates/headers/header');
      $this->view('wellcome/index', $data);
      $this->view('templates/footers/footer');
    }
  }
}
