<?php
include 'Controller.php';

class MainController extends Controller {

  public function index($request) {
    $PAGE_STYLE = 'main';
    require_once 'public/views/index.view.php';
  }

  public function about($request) {
    $PAGE_STYLE = 'about';
    require_once 'public/views/about.view.php';
  }

  public function services($request) {
    $PAGE_STYLE = 'services';
    require_once 'public/views/services.view.php';
  }

  public function blog($request) {
    $PAGE_STYLE = 'blog';
    require_once 'public/views/blog.view.php';
  }

  public function contact($request) {
    $PAGE_STYLE = 'contact';
    require_once 'public/views/contact.view.php';
  }

}
