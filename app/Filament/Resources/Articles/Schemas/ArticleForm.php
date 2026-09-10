<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\ArticleStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                Select::make('status')
                    ->options(ArticleStatus::class)
                    ->default('pending')
                    ->required(),

                Repeater::make('selection')
                ->schema([
                    TextInput::make('heading')
                    ->required(),
                TextInput::make('content')
                    ->required(),
                ])
            ]);

    }

}
