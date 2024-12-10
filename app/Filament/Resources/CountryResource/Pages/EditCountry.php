<?php

namespace App\Filament\Resources\CountryResource\Pages;

use App\Filament\Resources\CountryResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditCountry extends EditRecord
{
    protected static string $resource = CountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Country Name')
                ->required()
                ->maxLength(255)
                ->columnSpan('full'), 
            TextInput::make('code')
                ->label('Country Code')
                ->required()
                ->maxLength(255)
                ->columnSpan('full'), 
            TextInput::make('phonecode')
                ->label('Phone Code')
                ->required()
                ->maxLength(255)
                ->columnSpan('full'), 
        ]);
    }
}
