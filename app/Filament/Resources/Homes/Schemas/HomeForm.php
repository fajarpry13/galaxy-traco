<?php

namespace App\Filament\Resources\Homes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Background')
                    ->schema([
                        FileUpload::make('video_background')
                            ->label('Video Background')
                            ->multiple()
                            ->disk('public')
                            ->helperText('Upload a video file for the background.'),
                        FileUpload::make('image_background')
                            ->label('Image Background')
                            ->disk('public')
                            ->helperText('Upload an image file for the background.'),
                    ]),
            ]);
    }
}
