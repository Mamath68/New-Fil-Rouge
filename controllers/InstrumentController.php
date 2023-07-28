<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\InstrumentManager;
use Models\Managers\PresentationManager;
use Models\Managers\CategoryManager;
use Models\Managers\SubCategoryManager;



// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class InstrumentController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",
        ];

    }
    public function presentation()
    {
        $presentationManager = new PresentationManager();

        return [
            "view" => VIEW_DIR . "instruments/presentation.php",
            "data" => [
                "presentation" => $presentationManager->findAllInstruments(),
            ]

        ];
    }

    public function detailCategory($id)
    {
        $subCatManager = new SubCategoryManager();
        $categoryManager = new CategoryManager();

        if ($id == 1) {
            $this->redirectTo("instrument", "windInstrument", $id);
        } elseif ($id == 2) {
            $this->redirectTo("instrument", "cordInstrument", $id);
        } else {
            $this->redirectTo("instrument", "strikInstrument", $id);
        }
    }
    public function windInstrument($id)
    {
        $subCatManager = new SubCategoryManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_vents.php",
            "data" => [
                "wind" => $subCatManager->findSubcategoryById($id),
            ]
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
    public function cordInstrument($id)
    {
        $subCatManager = new SubCategoryManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_cordes/les_cordes.php",
            "data" => [
                "corde" => $subCatManager->findSubcategoryById($id),
            ]
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
    public function strikInstrument($id)
    {
        $subCatManager = new SubCategoryManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_a_percussions/les_percussions.php",
            "data" => [
                "percussion" => $subCatManager->findSubcategoryById($id),
            ]
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