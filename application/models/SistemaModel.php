<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** 
 * @author Luis Francisco Jimenez Vigueras
*/
class SistemaModel extends CI_Model{

    public function listar(){
        
        return $this->db->get('producto')->result();
    }

    public function listarCat(){
        
        return $this->db->get('categoria')->result();
    }


    public function obtener_dato($id){
        
        $this->db->where('idProducto', $id);
        return $this->db->get('producto')->row();
    }

    public function obtener_datos($nombre){
        
        $this->db->like('Nombre', $nombre);
        return $this->db->get('producto')->result();
    }


    public function agregar($data){
        return $this->db->insert('producto',$data);
    }

    public function actualizar($data, $id){
        $this->db->where('idProducto', $id);
        return $this->db->update('producto',$data);
    }


    public function eliminar($id){
        $this->db->where('idProducto', $id);
        return $this->db->delete('producto');
    }
} 