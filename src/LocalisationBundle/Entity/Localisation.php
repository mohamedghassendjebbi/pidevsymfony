<?php

namespace LocalisationBundle\Entity;

/**
 * Localisation
 */
class Localisation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateLoc;

    /**
     * @var string
     */
    private $adresseDebut;

    /**
     * @var string
     */
    private $adresseFin;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var int
     */
    private $idC;

    /**
     * @var int
     */
    private $idAction;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateLoc
     *
     * @param \DateTime $dateLoc
     *
     * @return Localisation
     */
    public function setDateLoc($dateLoc)
    {
        $this->dateLoc = $dateLoc;

        return $this;
    }

    /**
     * Get dateLoc
     *
     * @return \DateTime
     */
    public function getDateLoc()
    {
        return $this->dateLoc;
    }

    /**
     * Set adresseDebut
     *
     * @param string $adresseDebut
     *
     * @return Localisation
     */
    public function setAdresseDebut($adresseDebut)
    {
        $this->adresseDebut = $adresseDebut;

        return $this;
    }

    /**
     * Get adresseDebut
     *
     * @return string
     */
    public function getAdresseDebut()
    {
        return $this->adresseDebut;
    }

    /**
     * Set adresseFin
     *
     * @param string $adresseFin
     *
     * @return Localisation
     */
    public function setAdresseFin($adresseFin)
    {
        $this->adresseFin = $adresseFin;

        return $this;
    }

    /**
     * Get adresseFin
     *
     * @return string
     */
    public function getAdresseFin()
    {
        return $this->adresseFin;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Localisation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idC
     *
     * @param integer $idC
     *
     * @return Localisation
     */
    public function setIdC($idC)
    {
        $this->idC = $idC;

        return $this;
    }

    /**
     * Get idC
     *
     * @return int
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set idAction
     *
     * @param integer $idAction
     *
     * @return Localisation
     */
    public function setIdAction($idAction)
    {
        $this->idAction = $idAction;

        return $this;
    }

    /**
     * Get idAction
     *
     * @return int
     */
    public function getIdAction()
    {
        return $this->idAction;
    }
}

