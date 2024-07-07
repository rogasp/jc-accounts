<?php

namespace WCompetition\JcAccounts\Commands;

use Illuminate\Console\Command;

class JcAccountsCommand extends Command
{
    public $signature = 'jc-accounts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
