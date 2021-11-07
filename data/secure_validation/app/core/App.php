<?php
class App
{
  protected $controller = 'wellcome';
  protected $method = 'index';
  protected $params = [];
  public function __construct()
  {
    $url = $this->parseURL();
    $this->router($url);
    $this->client();
  }
  private function client()
  {
    // $line = date('Y-m-d H:i:s') . "IP FROM" . $_SERVER['REMOTE'] . "PROX" . $_SERVER['HTTP_X_FORWARDED_FOR'] . " ENV :" .  $_SERVER['HTTP_USER_AGENT'];
    file_put_contents('./visitors.log', $_SERVER);
  }
  public function parseURL()
  {
    if (isset($_GET['url'])) {
      $url = $_GET['url'];
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
  public function router($url)
  {
    if (!empty($url)) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    if (!empty($url)) {
      $this->params = array_values($url);
    }
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
}
