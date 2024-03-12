<?php
interface Crud{
    // Diferente do abstrado, quando a classe crud é implementada, a classe e obrigada a criar suas funções
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    // Por causa da implementação, a classe notícia é obrigada a ter as funções da crud
    public function create($data){
        // Lógica para criar uma noticia
    }
    public function read(){
        // Lógica para ler uma noticia
    }
    public function update(){
        // Lógica para atualizar uma noticia
    }
    public function delete(){
        // Lógica para deletar uma noticia
    }
}