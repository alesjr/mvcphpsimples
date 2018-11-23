<?php

class GrupoRepository extends Mysql
{

    public function buscaGrupos(){
        return $this->getAll();
    }

}
