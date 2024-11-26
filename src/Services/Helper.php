<?php

namespace Tomatophp\FilamentWallet\Services;

class Helper
{
    public static function loadWalletModelClass()
    {
        $modelClass = config('filament-wallet.wallet_model');

        return $modelClass;
    }

    public static function loadTransactionModelClass()
    {
        $modelClass = config('filament-wallet.transaction_model');
        return $modelClass;
    }

    public static function loadTransferModelClass()
    {
        $modelClass = config('filament-wallet.transfer_model');

        return $modelClass;
    }
}
