<?php
require_once "models/Empleado.php";
class EmpleadoController {
    public function listar() {
        $empleado = new Empleado();                      
        $empleados = $empleado->obtenerTodos();          
        include "views/listar.php";                     
    }
    public function registrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"] ?? '';
            $salario_base = $_POST["salario_base"] ?? 0;
            $comision_pct = $_POST["comision_pct"] ?? 0;
            $empleado = new Empleado();
            $empleado->guardar($nombre, $salario_base, $comision_pct);
            header("Location: index.php?action=listar");
        } else {
            include "views/registrar.php"; 
        }
    }
}
