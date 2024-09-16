<?php

namespace App\Repositories\horarios;


interface DisponibilidadRepository
{
    /*
    public function obtenerTodasDisponibilidades();
    public function obtenerDisponibilidadPorId($id);
    public function horaPrevia($id_h_p_d);
    public function modulosRepartidos($modulos_semanales,$moduloPrevio,$id_dm,$id_comision,$id_aula,$diaInstituto);
    public function guardarDisponibilidad($params);
    public function actualizarDisponibilidad($params);
    public function  eliminarDisponibilidadPorId($id);

    */

    //------------------------------------------------------------------------------------------------------------------
    // swagger
    public function obtenerTodasDisponibilidades();
    public function obtenerDisponibilidadPorId($id);
    public function guardarDisponibilidad($params);
    public function actualizarDisponibilidad($params, $id);
    public function  eliminarDisponibilidadPorId($id);
}
