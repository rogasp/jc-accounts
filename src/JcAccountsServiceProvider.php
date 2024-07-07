<?php

namespace WCompetition\JcAccounts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WCompetition\JcAccounts\Commands\JcAccountsCommand;

class JcAccountsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('jc-accounts')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_jc-accounts_table')
            ->hasCommand(JcAccountsCommand::class);
    }
}
