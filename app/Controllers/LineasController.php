<?php 

namespace App\Controllers;
use App\Models\LineasModel;
Class LineasController extends BaseController{

    Public function index():string{

        $lineas = new LineasModel();
        $datos['datos']=$lineas->findAll();
        return view ('lineas',$datos);
}

    public function nuevaLinea():string{
        return view('lineas_nuevas');
    }

    public function agregarLinea(){
        $datos = [
            'no_telefono' => $this->request->getvar('txtTelefono'),
            'fecha_pago' => $this->request->getvar('txtFechPago'),
            'meses_atraso'=> $this->request->getvar('txtAtraso'),
            'plan_id'=> $this->request->getvar('txtPlan'),
            'cliente_id'=> $this->request->getvar('txtCliente'),
        ];

        $lineas = new LineasModel();
        $lineas->insert($datos);
        echo 'Datos guardados';
        return redirect()->route('ver_lineas');
    }

    public function eliminarLinea($id=null){
        $lineas = new LineasModel();
        $lineas->delete($id);
        return redirect()->route('ver_lineas');
    }

    public function buscarLinea($id=null){
        $lineas = new LineasModel();
        $datos['datos']=$lineas->where('no_telefono',$id)->first();
        return view('form_modificar_linea',$datos);
    }

    public function modificarLinea(){
        $datos=[
            'no_telefono'=>$this->request->getVar('txtTelefono'),
            'fecha_pago'=>$this->request->getVar('txtFechPago'),
            'meses_atraso'=>$this->request->getVar('txtAtraso'),
            'plan_id'=>$this->request->getVar('txtPlan'),
            'cliente_id'=>$this->request->getVar('txtCliente')
        ];

        $lineas = new LineasModel();
        $lineas->update($datos['no_telefono'],$datos);
        return redirect()->route('ver_lineas');
    }

}
?>
