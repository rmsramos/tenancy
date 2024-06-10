<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Hospital;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterHospital extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register hospital';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug'),
            ]);
    }

    protected function handleRegistration(array $data): Hospital
    {
        $hospital = Hospital::create($data);

        $hospital->members()->attach(auth()->user());

        return $hospital;
    }
}
