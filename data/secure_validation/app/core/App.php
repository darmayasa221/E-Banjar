<?php
class App
{
  protected $controller = 'wellcome';
  protected $method = 'index';
  protected $params = [];
  protected $dir;
  public function __construct()
  {
    $this->dir = dirname(__DIR__);
    $url = $this->parseURL();
    $this->router($url);
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
      if (file_exists($this->dir .'/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
    }

    require_once($this->dir . '/controllers/' . $this->controller . '.php');
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
