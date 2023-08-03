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

    const WIND_INSTRUMENT_ID = 1;
    const CORD_INSTRUMENT_ID = 2;
    const STRIK_INSTRUMENT_ID = 3;

    public function detailCategory($id)
    {
        if ($id == self::WIND_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "windInstrument", $id);
        } elseif ($id == self::CORD_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "cordInstrument", $id);
        } elseif ($id == self::STRIK_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "strikInstrument", $id);
        } else {
            $this->redirectTo("Instrument", "index");
        }
    }

    const FRAPP_INSTRUMENT_ID = 1;
    const FROTTE_INSTRUMENT_ID = 2;
    const PINCE_INSTRUMENT_ID = 3;

    public function detailCord($id)
    {
        if ($id == self::FRAPP_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "frapInstrument", $id);
        } elseif ($id == self::FROTTE_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "frotInstrument", $id);
        } elseif ($id == self::PINCE_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "pinceInstrument", $id);
        } else {
            $this->redirectTo("Instrument", "index");
        }
    }

    const ELECTRO_INSTRUMENT_ID = 4;
    const IDIO_INSTRUMENT_ID = 5;
    const MEMBRO_INSTRUMENT_ID = 6;

    public function detailStrik($id)
    {
        if ($id == self::ELECTRO_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "electroInstrument", $id);
        } elseif ($id == self::IDIO_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "idioInstrument", $id);
        } elseif ($id == self::MEMBRO_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "membraInstrument", $id);
        } else {
            $this->redirectTo("Instrument", "index");
        }
    }


    const WOOD_INSTRUMENT_ID = 7;
    const CUIVRE_INSTRUMENT_ID = 8;
    const ELECTRON_INSTRUMENT_ID = 9;
    const MECA_INSTRUMENT_ID = 10;

    public function detailWind($id)
    {
        if ($id == self::WOOD_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "woodInstrument", $id);
        } elseif ($id == self::CUIVRE_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "cuivreInstrument", $id);
        } elseif ($id == self::ELECTRON_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "electronInstrument", $id);
        } elseif ($id == self::MECA_INSTRUMENT_ID) {
            $this->redirectTo("Instrument", "mecaInstrument", $id);
        } else {
            $this->redirectTo("Instrument", "index");
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
}