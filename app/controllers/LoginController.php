<?php
include 'Controller.php';

class LoginController extends Controller {

  public function login($request) {
    $email = trim(htmlspecialchars($request->email));
    $password = trim(htmlspecialchars($request->password));

    $usuario = Usuario::query()->where(['email', $email])[0];
    if (password_verify($password, $usuario->password)) {
      $_SESSION['logged'] = [ 'id' => $usuario->id, 'email' => $usuario->email];
      header('Location: /private');
    } else {
      $errores['password'] = "El usuario o la contraseña son incorrectas";
    }

    $PAGE_STYLE = 'contact';
    require_once 'public/views/login.view.php';

//    $usuario = new Usuario();
//    $usuario->email = "sergioperis2@gmail.com";
//    $usuario->password = password_hash("qwe123", PASSWORD_DEFAULT);
//    $usuario->save();
  }

  public function showLoginForm($request) {
    $PAGE_STYLE = 'contact';
    require_once 'public/views/login.view.php';
  }

  public function logout($request) {
    session_destroy();
    header('Location: /login');
  }

}
