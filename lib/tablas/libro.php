<?php



    class Libro extends Tabla
    {
        const TABLA = 'libros';

        function __construct()
        {
            parent::__construct(self::TABLA);

        }



        function existeLibro($nombre,$descripcion,$autor,$editorial,$id='')
        {
            $opt = [];
            
            $opt['select']['nombre']     = '';
            $opt['where']['nombre']      = $nombre;
            $opt['where']['descripcion'] = $descripcion;
            $opt['where']['autor']       = $autor;
            $opt['where']['editorial']   = $editorial;

            if(!empty($id))
                $opt['notwhere']['id'] = $id;
      
        
        
            $resultado = $libro->seleccionar($opt);

            return $resultado->num_rows;
            
        }
    }