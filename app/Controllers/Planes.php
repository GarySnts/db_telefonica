<?php 

namespace App\Controllers;
use App\Models\PlanesModel;
Class Planes extends BaseController{

    Public function index():string{

        $plan =new PlanesModel();
        $datos['datos']=$plan->findAll();
        return view ('planes',$datos);
}

    public function nuevoPlan(){
        return view('planes_nuevos');
    }

    public function agregarPlan(){
        $id = $this->request->getVar('txtId');
        //echo " <br>  Id = " . $id;
        $nombre=$this->request->getVar('txtNombre');
        //echo " <br>  nombre = " . $nombre;
        $pago=$this->request->getVar('txtPagosMensual');
        //echo " <br>  Pago = " . $pago;
        $minutos=$this->request->getVar('txtCantidadMinutos');
       // echo " <br>  >Minutos = " . $minutos;
        $mensajes=$this->request->getVar('txtCantidadMensajes');
       // echo " <br>  Mensajes = " . $mensajes;

        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
}
?>
