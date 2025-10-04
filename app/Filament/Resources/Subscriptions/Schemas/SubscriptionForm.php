<?php

namespace App\Filament\Resources\Subscriptions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('plan_name')
                    ->required(),
                TextInput::make('cycle')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Toggle::make('payment_status')
                    ->required(),
                Toggle::make('sub_status')
                    ->required(),
                TextInput::make('expiring_date')
                    ->required()
                    ->numeric(),
            ]);
    }
}
