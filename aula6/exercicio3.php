<?php

class Livro{

    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $pags;

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of pags
     */
    public function getPags()
    {
        return $this->pags;
    }

    /**
     * Set the value of pags
     */
    public function setPags($pags): self
    {
        $this->pags = $pags;

        return $this;
    } 
}



$l = new Livro();
$l->setTitulo(readline("Qual o título do Livro?"));
$l->setAutor(readline("Quem é o autor do Livro?"));
$l->setGenero(readline("Qual o genero do livro?"));
$l->setPags(readline("Quantas paginas tem o livro?"));



$l2 = new Livro();
$l2->setTitulo(readline("Qual o título do Livro?"));
$l2->setAutor(readline("Quem é o autor do Livro?"));
$l2->setGenero(readline("Qual o genero do livro?"));
$l2->setPags(readline("Quantas paginas tem o livro?"));



$l3 = new Livro();
$l3->setTitulo(readline("Qual o título do Livro?"));
$l3->setAutor(readline("Quem é o autor do Livro?"));
$l3->setGenero(readline("Qual o genero do livro?"));
$l3->setPags(readline("Quantas paginas tem o livro?"));
