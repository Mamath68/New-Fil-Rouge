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

        if ($id == 1) {
            $this->redirectTo("instrument", "windInstrument", $id);
        } elseif ($id == 2) {
            $this->redirectTo("instrument", "cordInstrument", $id);
        } elseif ($id == 3) {
            $this->redirectTo("instrument", "strikInstrument", $id);
        } else {
            $this->redirectTo("instrument", "index");
        }
    }
    public function detailWind($id)
    {

        if ($id == 7) {
            $this->redirectTo("instrument", "woodInstrument", $id);
        } elseif ($id == 8) {
            $this->redirectTo("instrument", "cuivreInstrument", $id);
        } elseif ($id == 9) {
            $this->redirectTo("instrument", "electronInstrument", $id);
        } elseif ($id == 10) {
            $this->redirectTo("instrument", "mecaInstrument", $id);
        } else {
            $this->redirectTo("instrument", "index");
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
    public function mecaInstrument($id)
    {
        $instrumentManager = new InstrumentManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_mecaniques.php",
            "data" => [
                "mecanique" => $instrumentManager->findInstrumentById($id),
            ]
        ];
    }

    public function cuivreInstrument($id)
    {
        $instrumentManager = new InstrumentManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_cuivres.php",
            "data" => [
                "cuivre" => $instrumentManager->findInstrumentById($id),
            ]
        ];
    }
    public function electronInstrument($id)
    {
        $instrumentManager = new InstrumentManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_electronique.php",
            "data" => [
                "electronique" => $instrumentManager->findInstrumentById($id),
            ]
        ];

    }
    public function woodInstrument($id)
    {
        $instrumentManager = new InstrumentManager();
        return [
            "view" => VIEW_DIR . "instruments/instruments_à_vents/les_bois.php",
            "data" => [
                "bois" => $instrumentManager->findInstrumentById($id),
            ]
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