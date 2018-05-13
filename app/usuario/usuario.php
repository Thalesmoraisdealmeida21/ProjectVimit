<?php
/**
 * Created by PhpStorm.
 * User: thale
 * Date: 13/05/2018
 * Time: 16:57
 */

namespace App\usuario;


class Usuario
{
    private $name;
    private $message;
    private $idMensagemAtu;


    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdMensagemAtu()
    {
        return $this->idMensagemAtu;
    }

    /**
     * @param mixed $idMensagemAtu
     */
    public function setIdMensagemAtu($idMensagemAtu): void
    {
        $this->idMensagemAtu = $idMensagemAtu;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

}