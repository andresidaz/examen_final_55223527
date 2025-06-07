<?php
require_once "config/db.php";
class Empleado {
    private $db;
    public function __construct() {
        $this->db = DB::connect();  
    }
    public function obtenerTodos() {
        $query = $this->db->query("SELECT *, salario_base + (salario_base * comision_pct / 100) AS salario_total FROM empleados");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function guardar($nombre, $salario_base, $comision_pct) {
        $stmt = $this->db->prepare("INSERT INTO empleados(nombre, salario_base, comision_pct) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $salario_base, $comision_pct]);
    }
}
