<?php

interface OperacionBancaria
{
    public function consultarSaldo();

    public function depositar($monto);

    public function retirar($monto);
}

?>