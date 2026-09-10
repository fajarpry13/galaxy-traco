<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('name')
               ->required(),
                TextInput::make('description')
                ->required(),
                  TextInput::make('rating')
                  ->numeric()
                  ->maxValue(5)
                
            ]); 
    }
}
