<?php
header('content-type: application/json; charset=utf-8');//HEADER PARA JSON
include_once 'puntos.php';
$ac = isset($_POST["tipo"])?$_POST["tipo"]:"x"; //PARAMETRO PARA DETERMINAR LA ACCION

switch ($ac) {
    case "mostrar":
        $p = new Puntos();
        $exito = $p->mostrar($_POST["titulo"], $_POST["cx"], $_POST["cy"]);
        if($exito)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = "Se muestra Correctamente";
        }
        else
        {
            $r["estado"] = "error";
            $r["mensaje"] = "error al mostrar!";
        }
    break;

    case "listar":
        $p = new Puntos();
        $resultados = $p->listar_todo();
        if(sizeof($resultados)>0)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = $resultados;
        }
        else
        {
            $r["estado"] = "error";
            $r["mensaje"] = "No hay registros";
        }
    break;

    default:
        $r["estado"] = "error";
        $r["mensaje"] = "datos no válidos";
    break;
}
echo json_encode($r);//IMPRIMIR JSON
?>