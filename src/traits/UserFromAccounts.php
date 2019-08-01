<?php

namespace RlGroup\ShareSession\Traits;

trait UserFromAccounts
{
    public function __construct()
    {
         $this->connection = 'accounts';
    }
}
