<?php

namespace App\Models;

use App\Core\Model;

class HubyObsah extends Model
{
    protected $id;
    protected $nazov;
    protected $jedlost;
    protected $popis;
    protected $obrazok;
    /**
     * Article constructor.
     * @param $id
     * @param $nazov
     * @param $jedlost;
     * @param $popis;
     * @param $obrazok;
     */
    public function __construct($nazov = "", $jedlost = "", $popis = "", $obrazok= "")
    {

        $this->nazov = $nazov;
        $this->jedlost = $jedlost;
        $this->popis = $popis;
        $this->obrazok = $obrazok;
    }


    public function getId()
    {
        return $this->id;
    }



    public function getNazov()
    {
        return $this->nazov;
    }


    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }

    public function getJedlost()
    {
        return $this->jedlost;
    }

    public function setJedlost($jedlost): void
    {
        $this->jedlost = $jedlost;
    }


    public function getPopis()
    {
        return $this->popis;
    }

    public function setPopis($popis): void
    {
        $this->popis = $popis;
    }

    public function getObrazok()
    {
        return $this->obrazok;
    }


    public function setObrazok($obrazok): void
    {
        $this->obrazok = $obrazok;
    }


    static public function setDbColumns()
    {
        return ['id','nazov','jedlost','popis','obrazok'];
    }

    static public function setTableName()
    {
        return 'huby';
    }
}