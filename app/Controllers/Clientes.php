<?php 

namespace App\Controllers;
use App\Models\ClientesModel;


Class Clientes extends BaseController{

    Public function index():string{

        $cliente =new ClientesModel();
        $datos['datos']=$cliente->findAll();

        //clientes es la vista que muestr los clientes
        return view ('clientes',$datos);
}

    public function agregarClientes(): string{

        $datos=[
            'clientes_id' => $this->request->getVar('txtId'),
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
        return"";
    }


    public function nuevoCliente(): string{

        return view('clientes_nuevos');

    }
}
?>
