<?php

namespace Mk\Feed\Generators\Heureka;

use Mk, Nette;

/**
 * Class Delivery
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 */
class Delivery{

    /* Použití smartobject viz php 7.2 to nette 2.4 */
    use \Nette\SmartObject;

    CONST CESKA_POSTA = 'CESKA_POSTA',
        CESKA_POSTA_NA_POSTU = 'CESKA_POSTA_NAPOSTU_DEPOTAPI',
        CESKA_POSTA_NA_POSTU_OLD = 'CESKA_POSTA_NA_POSTU',
        CESKA_POSTA_DOPORUCENA_ZASILKA = 'CESKA_POSTA_DOPORUCENA_ZASILKA',
        CSAD_LOGISTIK_OSTRAVA = 'CSAD_LOGISTIK_OSTRAVA',
        DPD = 'DPD',
        DHL = 'DHL',
        DSV = 'DSV',
        EMS = 'EMS',
        FOFR = 'FOFR',
        GEBRUDER_WEISS = 'GEBRUDER_WEISS',
        GEIS = 'GEIS',
        GENERAL_PARCEL = 'GENERAL_PARCEL',
        GLS = 'GLS',
        HDS = 'HDS',
        HEUREKAPOINT = 'HEUREKAPOINT',
        INTIME = 'INTIME',
        PPL = 'PPL',
        RADIALKA = 'RADIALKA',
        SEEGMULLER = 'SEEGMULLER',
        TNT = 'TNT',
        TOPTRANS = 'TOPTRANS',
        UPS = 'UPS',
        ULOZENKA = 'ULOZENKA',
        VLASTNI_PREPRAVA = 'VLASTNI_PREPRAVA',
        ZASILKOVNA = 'ZASILKOVNA',
        BALIKOVNA_DEPOTAPI = 'BALIKOVNA_DEPOTAPI',
        SLOVENSKA_POSTA = 'SLOVENSKA_POSTA',
        PPL_PARCELSHOP = 'PPL_PARCELSHOP';


    static $ids = array(
        self::CESKA_POSTA,
        self::CESKA_POSTA_NA_POSTU,
        self::CESKA_POSTA_NA_POSTU_OLD,
        self::CESKA_POSTA_DOPORUCENA_ZASILKA,
        self::CSAD_LOGISTIK_OSTRAVA,
        self::DPD,
        self::DHL,
        self::DSV,
        self::EMS,
        self::FOFR,
        self::GEBRUDER_WEISS,
        self::GEIS,
        self::GENERAL_PARCEL,
        self::GLS,
        self::HDS,
        self::HEUREKAPOINT,
        self::INTIME,
        self::PPL,
        self::RADIALKA,
        self::SEEGMULLER,
        self::TNT,
        self::TOPTRANS,
        self::UPS,
        self::ULOZENKA,
        self::VLASTNI_PREPRAVA,
        self::ZASILKOVNA,
        self::BALIKOVNA_DEPOTAPI,

        self::SLOVENSKA_POSTA,
        self::PPL_PARCELSHOP
    );

    /** @var string */
    private $id;
    /** @var float */
    private $price;
    /** @var float|null */
    private $priceCod;

    /**
     * Delivery constructor.
     * @param $id
     * @param $price
     * @param null $priceCod
     */
    public function __construct($id, $price, $priceCod = null)
    {
        $this->id = (string) $id;
        $this->price = (float) $price;
        $this->priceCod = isset($priceCod) ? (float) $priceCod : null;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float|null
     */
    public function getPriceCod()
    {
        return $this->priceCod;
    }

}
