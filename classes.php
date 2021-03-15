<?php
    class Proizvod {
        private $id, $naziv_knjige, $ime_autora, $godina_izdanja, $grupa, $slika, $cena;
        
        function __construct($id, $naziv_knjige, $ime_autora, $godina_izdanja, $grupa, $slika, $cena){
            $this->id = $id;
            $this->naziv_knjige = $naziv_knjige;
            $this->ime_autora = $ime_autora;
            $this->godina_izdanja = $godina_izdanja;
            $this->grupa = $grupa;
            $this->slika = $slika;
            $this->cena = $cena;
        }

        function prikazi(){
            return "<div class='okvir'>
                        <img src='assets/images/$this->slika' alt='book'>
                        <h3>$this->naziv_knjige</h3>
                        <h4>$this->ime_autora</h4>
                        <h5>Cena: $this->cena</h5>
                        <a href='prikazi_detaljnije.php?id=$this->id'>details</a><br>
                        <a href='korpa_dodaj.php?id=$this->id'>stavi u korpu</a>
                    </div>";
        }

        function prikazi_detaljnije(){
            return "<div class='detaljnije'>
                        <img src='assets/images/$this->slika' alt='book'>
                        <h3>Naziv knjige: $this->naziv_knjige</h3>
                        <h4>Autor: $this->ime_autora</h4>
                        <h5>Godina izdanja: $this->godina_izdanja</h5>
                        <h5>Cena: $this->cena</h5>
                        <h5>Grupa: $this->grupa</h5>
                        <a href='korpa_dodaj.php?id=$this->id'>stavi u korpu</a><br>
                        <a href='proizvodi.php'>NAZAD</a>
                    </div>";
        }
    }

    class listaProizvoda{
        private $lista;

        function __construct ($niz){
            foreach ($niz as $i => $proiz)
                $this->lista[]= new Proizvod($proiz['id'], $proiz['naziv_knjige'], $proiz['ime_autora'], $proiz['godina_izdanja'], $proiz['grupa'], $proiz['slika'], $proiz['cena']);
        }

        function prikazi_proizvode(){
            foreach($this->lista as $knjiga){
                echo "<div class='col-4 product'>";
                echo $knjiga->prikazi();
                echo "</div>";
            }
        }

        function prikazi_detaljnije(){
            foreach($this->lista as $knjiga){
                echo "<div class='container'>";
                echo $knjiga->prikazi_detaljnije();
                echo "</div>";
            }
        }
    }
?>