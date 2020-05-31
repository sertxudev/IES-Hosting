<?php
include 'Controller.php';

class PrivateAreaController extends Controller {

  public function __construct() {
    if(!isset($_SESSION['logged'])) header('Location: /login');
  }

  public function index($request) {
    $PAGE_STYLE = 'contact';
    $clientes = Cliente::query()->all();
    require_once 'public/views/private/index.view.php';
  }

  public function show($request, $id) {
    $PAGE_STYLE = 'contact';
    $cliente = Cliente::query()->find($id);
    $plan = Plan::query()->find($cliente->plan_hosting);
    require_once 'public/views/private/show.view.php';
  }

  public function edit($request, $id) {
    $PAGE_STYLE = 'contact';
    $cliente = Cliente::query()->find($id);
    $planes = Plan::query()->all();
    require_once 'public/views/private/edit.view.php';
  }

  public function postEdit($request, $id) {
    $cliente = Cliente::query()->find($id);

    $cliente->dni = $request->dni;
    $cliente->nombre = $request->nombre;
    $cliente->apellidos = $request->apellidos;
    $cliente->email = $request->email;
    $cliente->telefono = $request->telefono;
    $cliente->direccion = $request->direccion;
    $cliente->localidad = $request->localidad;
    $cliente->codigo_postal = $request->codigo_postal;
    $cliente->pais = $request->pais;
    $cliente->dominio = $request->dominio;
    $cliente->ip_address = $request->ip_address;
    $cliente->fecha_alta = $request->fecha_alta;
    $cliente->plan_hosting = $request->plan;

    $cliente->save();
    header('Location: /private');
  }

  public function new($request) {
    $PAGE_STYLE = 'contact';
    $planes = Plan::query()->all();
    require_once 'public/views/private/new.view.php';
  }

  public function postNew($request) {
    $cliente = new Cliente();

    $cliente->dni = $request->dni;
    $cliente->nombre = $request->nombre;
    $cliente->apellidos = $request->apellidos;
    $cliente->email = $request->email;
    $cliente->telefono = $request->telefono;
    $cliente->direccion = $request->direccion;
    $cliente->localidad = $request->localidad;
    $cliente->codigo_postal = $request->codigo_postal;
    $cliente->pais = $request->pais;
    $cliente->dominio = $request->dominio;
    $cliente->ip_address = $request->ip_address;
    $cliente->fecha_alta = $request->fecha_alta;
    $cliente->plan_hosting = $request->plan;

    $cliente->save();
    header('Location: /private');
  }

  public function delete($request, $id) {
    $cliente = Cliente::query()->find($id);
    $cliente->delete();
    header('Location: /private');
  }

}
