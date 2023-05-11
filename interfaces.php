<?php
interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create($data){
        //logica para criar uma noticia
    }
    public function read(){
        //logica para ler uma noticia
    }
    public function update(){
        //logica para atualiar uma noticia
    }
    public function delete(){
        //logica para deletar uma noticia
    }
}