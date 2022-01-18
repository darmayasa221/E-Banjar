<?php
class Wellcome extends Controller
{
  public function index($action = null)
  {
    if ($action == 'search') {
      $input = $this->validation()->secureValidation($_GET['keyword']);
      $data = $this->model('Kegiatan_model')->searchKegiatan($input[0]);
      $this->view('templates/headers/header');
      $this->view('wellcome/index', $data, $input[0]);
      $this->view('templates/footers/footer');
    } else {
      $data = $this->model('Kegiatan_model')->getAllKegiatan();
      $this->view('templates/headers/header');
      $this->view('wellcome/index', $data);
      $this->view('templates/footers/footer');
    }
  }
}
