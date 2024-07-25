<?php 

namespace App\Controllers;
use App\Models\ClientesModel;
use Cliente;

Class ClientesController extends BaseController{

    Public function index():string{

        $clientes =new ClientesModel();
        $datos['datos']=$clientes->findAll();

        //clientes es la vista que muestr los clientes
        return view ('clientes',$datos);
}

    public function agregarClientes(){

        $datos=[
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getvar('txtNombre'),
            'apellido'=> $this->request->getvar('txtApellido'),
            'correo_electronico' => $this->request->getvar('txtCorreo'),
            'calle_avenida' => $this->request->getvar('txtCalleAvenida'),
            'no_casa' => $this->request->getvar('txtNoCasa'),
            'zona' => $this->request->getvar('txtZona')
        ];
        

        //crear objeto de tipo clientesModel
        $clientes = new ClientesModel();
        $clientes->insert($datos);
        echo "datos guardados";
        return redirect()->route('ver_clientes');
    }


    public function nuevoCliente(){

        return view('clientes_nuevos');

    }

    public function eliminarCliente($id=null){
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('ver_clientes');
    }

    public function buscarCliente($id=null){
        $clientes =new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('form_modificar_cliente',$datos);
    }

    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'calle_avenida'=>$this->request->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request->getVar('txtNoCasa'),
            'zona'=>$this->request->getVar('txtZona')
        ];

        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('ver_clientes');
    }
}
?>
