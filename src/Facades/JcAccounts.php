<?php

namespace WCompetition\JcAccounts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WCompetition\JcAccounts\JcAccounts
 */
class JcAccounts extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WCompetition\JcAccounts\JcAccounts::class;
    }
}
