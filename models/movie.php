<?php


//Creao la classe movie
class Movie{

    //Definisco delle variabili d'istanza nella classe movie e ne specifico il tipo
    public string $title;
    public string $director;
    public string $genre;
    public string $description;
    public string $cast;
    public float $rating;
    public float $duration;

    
    // Definisco un costruttore e richiedo al costruttore alcuni dati che gli devono essere passati obbligatoriamente
    function __construct($_title, $_description){
        //definisco nel costruttore i dati da ricevere

        $this->title = $_title;
        $this->description = $_description;
        // $this->duration = $_duration;
    }


    //creo un metodo che controlla se esiste una descrizione e un titolo per il film

    function getInfo(){
        if (!isset($this->title) && !isset($this->description)){
            return "Titolo e descrizione mancanti";
        }
    }

}
