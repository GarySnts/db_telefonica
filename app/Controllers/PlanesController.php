<?php 

namespace App\Controllers;
use App\Models\PlanesModel;
Class PlanesController extends BaseController{

    Public function index():string{

        $planes = new PlanesModel();

        $datos['datos']=$planes->findAll();// = select * from planes
        return view ('planes',$datos);
}




    public function nuevoPlan(){
        return view('planes_nuevos');
    }

    public function agregarPlan(){

        $datos = [
            'plan_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request ->getVar('txtNombre'),
            'pago_mensual' => $this->request ->getVar('txtPago'),
            'cantidad_minutos' => $this->request ->getVar('txtminutos'),
            'cantidad_mensajes' => $this->request ->getVar('txtMensajes')

        ];

        $planes = new PlanesModel();
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('ver_planes');
    }

    //funcion eliminar

    public function eliminarPlan($id=null){
        //echo "id o código: " .$id;
        $planes = new PlanesModel();
        $planes->delete($id);
        return redirect()->route('ver_planes');
    }

    //buscar funcion

    public function buscarPlan($id=null){
        //echo "codigo " . $id;
        $planes = new PlanesModel();
        //select* from planes where plan_id=4id;
        $datos['datos']=$planes->where('plan_id',$id)->first();
        //print_r($datos); = codigo de prueba
        return view('form_modificar_plan',$datos);
    }

    public function modificarPlan(){
        $datos = [
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'pago_mensual' =>$this->request->getVar('txtPago'),
            'cantidad_minutos' =>$this->request->getVar('txtminutos'),
            'cantidad_mensajes' =>$this->request->getVar('txtMensajes')
        ];
        //print_r($datos);
        $planes = new PlanesModel();
        //update(primaryKey, campos y datos)
        $planes->update($datos['plan_id'],$datos);
        return redirect()->route('ver_planes');
    }
}
?>
