<?php

class ScontoNonValidoException extends Exception
{
    public function __construct($messaggio)
    {
        parent::__construct($messaggio);
    }
}
