<?php 

namespace App\Controllers;
use App\Models\LineasModel;
Class Lineas extends BaseController{

    Public function index():string{

        $linea =new LineasModel();
        $datos['datos']=$linea->findAll();
        return view ('lineas',$datos);
}
}
?>
