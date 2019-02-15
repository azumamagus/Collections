<?php 

class TocadorMusica{

    private $musicas;

    public function __construct()
    {
        //Atribuindo uma lista ligada
        $this->musicas = new SplDoublyLinkedList();   
        $this->musicas->rewind();
    }

    public function adicionarMusicas(SplFixedArray $musicas){

        //metodo rewind faz voltar o ponteiro do array para o inicio do array
        // metodo valid intera até as posições exisiter, se ela não existir, volta false
        for($musicas->rewind(); $musicas->valid(); $musicas->next() ){
            $this->musicas->push($musicas->current());
        }
        $this->musicas->rewind();
    }

    public function tocarMusica()
    {
        if($this->musicas->count() === 0 ){
            echo "Nenhuma música no Tocador!" ;  
        }else{
            echo "Tocando música: " . $this->musicas->current();
        }        
    }
    public function adicionarMusica($musica)
    {
        $this->musicas->push($musica);
    }

    /*public function avancarMusica()
    {
        $this->musicas->next();

        if(!$this->musicas->valid()){
            $this->musicas-rewind();
        }
    }

    public function voltarMusica()
    {
        $this->musicas->prev();
        if(!$this->musicas->valid()){
            $this->musicas-rewind();
        }
    }*/
    
}