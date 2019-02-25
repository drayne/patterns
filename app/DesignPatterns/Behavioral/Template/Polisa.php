<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.12.2018.
 * Time: 22:08
 */

namespace App\DesignPatterns\Behavioral\Template;


abstract class Polisa
{
    protected $premija;
    private $brojPolise; /* ne zeilm da je podklase mogu mijenjati */
    protected $vrstaOsiguranja;

    /*
     * template metoda
     */
    final function izdajPolisu()
    {
        $this->vrstaOsiguranja();
        $this->brojPolise('123123');
        $this->premija();

        if($this->valuta() == 'EUR'){
            $this->premija = $this->premija / 2;
        }

        return $this->stampajPolisu();

    }

    abstract function vrstaOsiguranja();

    abstract function premija();

    /*
     * final stavljamo i za metode koje ne zelimo da mijenjaju podklase ... ne samo za template metodu
     */
    final function brojPolise($brojPolise)
    {
        $this->brojPolise = $brojPolise;
    }

    final function stampajPolisu()
    {
        return "Broj polise: " . $this->brojPolise . ", vrsta osiguranja: " . $this->vrstaOsiguranja . '. Premija: ' . $this->premija ;
    }

    /*
     * hook na osnovu koga se mijenja izvrsavanje algoritma (prikazuje se drugi iznos)
     */
    protected function valuta()
    {
        return 'KM';
    }
}