<?php

    class korpa{
        function __construct(){
            if(!isset($_SESSION['stavke_korpe']))
                $_SESSION['stavke_korpe'] = [
                    //['id'=>1, 'kolicina'=>1, 'cena'=>1000, 'naziv'=>'Zlocin i kazna' ],
                    //['id'=>2, 'kolicina'=>2, 'cena'=>1200, 'naziv'=>'Rat i mir']
                ];
        }

        function dodaj_proizvod_u_korpu($id, $kol, $cena, $naziv){
            array_push($_SESSION['stavke_korpe'], 
                ['id'=>$id, 'kolicina'=>$kol, 'cena'=>$cena, 'naziv'=>$naziv]);
        }
        
        function dodaj_kolicinu($id, $kol){
            for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                $_SESSION['stavke_korpe'][$i]['kolicina'] += $kol; 
        }
        
        function da_li_postoji_proizvod($id){
            for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                    return true;
            return false;
        }
        
        function __toString(){
           return json_encode($_SESSION['stavke_korpe']); 
        }

        function obrisi_proizvod($id){
            for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                if($_SESSION['stavke_korpe'][$i]['id'] === $id){
                    if($_SESSION['stavke_korpe'][$i]['kolicina']==1)
                        unset($_SESSION['stavke_korpe'][$i]);
                    else
                        $_SESSION['stavke_korpe'][$i]['kolicina']-=1;
                }
        }

        function obrisi_korpu(){
            for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
                $_SESSION['stavke_korpe'][$i] = [];
            }

        }
    }

    $korpa = new korpa();
    //dodaj_proizvod_u_korpu(3, 2, 200,'naziv');
    //promeni_kolicinu(3, 5);
    //dodaj_kolicinu(3, 5);
    //obrisi_proizvod(11);
    //echo json_encode($_SESSION['stavke_korpe']);
?>