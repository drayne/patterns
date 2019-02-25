<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:02
 */

namespace App\DesignPatterns\Behavioral\State;


class ContextBad
{
    protected $prijava = 1;
    protected $obrada = 2;
    protected $odbijena= 3;
    protected $odobrena = 4;
    protected $rezervisana = 5;
    protected $placena = 6;

    protected $status;

    public function __construct()
    {
        $this->status = $this->prijava; //inicijalni status
    }

    //primjer funkcije
    //za svaku mogucu akciju, ponavljali bismo isti kod if else if
    public function platiStetu()
    {
        if ($this->status == $this->prijava) {
            echo "Potrebno je prethodno obraditi stetu";
        } elseif ($this->status == $this->odbijena) {
            echo "Ne moze se platiti odbijena steta";
        //potreban IF za svaki status
        } elseif ($this->status == $this->rezervisana) {
            echo "Uspjesno placena steta";
            $this->setStatus($this->placena);
        }
    }

    public function setStatus($noviStatus)
    {
        $this->status = $noviStatus;
    }

}
