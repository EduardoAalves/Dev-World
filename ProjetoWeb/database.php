<?php

class Conexao
{
    private $host;
    private $port;
    private $name;
    private $user;
    private $password;
    private $charSet;

    public function __construct($host, $port, $name, $user, $password, $charSet)
    {
        $this->host = $host;
        $this->port = $port;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
        $this->charSet = $charSet;
    }

    public function Conectar()
    {
        $conecta = new mysqli($this->host,$this->user,$this->password,$this->name,$this->port);
        $conecta->set_charset($this->charSet);
        return $conecta;
    }

}