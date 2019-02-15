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
            echo "Tocando música: " . $this->musicas->current() . "<br>";
        }        
    }
    public function adicionarMusica($musica)
    {
        $this->musicas->push($musica);
    }

    public function avancarMusica()
    {
        $this->musicas->next();

        $this->validaSeTemMusica();
    }

    public function voltarMusica()
    {
        $this->musicas->prev();
        $this->validaSeTemMusica();
    }
    
    public function validaSeTemMusica()
    {
        if(!$this->musicas->valid()){
            $this->musicas-rewind();
        }
    }

    public function exibirMusicas()
    {
        for($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()){
            echo "Música: " . $this->musicas->current() . "<br>";
        }
    }

    public function exibirQuantidadeMusicas()
    {
        echo "Existem " . $this->musicas->count() . " músicas no tocador.";
    }

    public function adicionarMusicaNoComecoDaPlaylist($musica)
    {
        $this->musicas->unshift($musica);
    }

    public function removerMusicaComecoPlayList()
    {
        $this->musicas->shift();
    }

    public function removerMusicaFinalPlayList()
    {
        $this->musicas->pop();
    }
}