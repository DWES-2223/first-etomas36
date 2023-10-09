<?php

/**
 *
 */
class Treballaor
{

    private $dni;
    private $nom;

    /**
     * @param $dni
     * @param $nom
     */
    public function __construct($dni, $nom)
    {
        $this->dni = $dni;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni): void
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


}