<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\InstrumentManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class InstrumentController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",
        ];

    }
    public function findAllInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/presentation.php",
        ];
    }

    public function windInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_vents.php",
        ];
    }
    public function mecaInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_mecaniques.php",
        ];
    }
    public function cuivreInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_cuivres.php",
        ];
    }
    public function electronInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_electronique.php",
        ];
    }
    public function woodInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_bois.php",
        ];
    }
    public function cordInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_cordes/les_cordes.php",
        ];
    }
    public function frapInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_cordes/cordes_frappees.php",
        ];
    }
    public function frotInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_cordes/cordes_frottees.php",
        ];
    }
    public function pinceInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_cordes/cordes_pincees.php",
        ];
    }
    public function strikInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_percussions/les_percussions.php",
        ];
    }
    public function electroInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_percussions/les_electrophones.php",
        ];
    }
    public function idioInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_percussions/les_idiophones.php",
        ];
    }
    public function membraInstrument()
    {
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_percussions/les_membraphones.php",
        ];
    }
    // public function findInstrumentById($id)
    // {


    // }

}