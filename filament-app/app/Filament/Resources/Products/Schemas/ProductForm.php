<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Checkbox;
use Filament\Actions\Action;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Product Info')
                        ->description('Isi Informasi Produk')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('sku')
                                    ->required(),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                                ->required(),
                        ]),
                    Step::make('Product Price and Stock')
                        ->description('Isi Harga dan Stok Produk')
                        ->icon('heroicon-o-banknotes')
                        ->schema([
                            Group::make([
                                TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->minValue(1),
                                TextInput::make('stock')
                                    ->required()
                                    ->numeric(),
                            ])->columns(2),
                        ]),
                    Step::make('Product Media and Status')
                        ->description('Isi Gambar Produk')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            Group::make([
                                FileUpload::make('image')
                                    ->disk('public')
                                    ->directory('products'),
                                Checkbox::make('is_active')
                                    ->required(),
                                Checkbox::make('is_featured')
                                    ->required(),
                            ])
                        ]),
                ])
                ->columnSpanFull()
                ->submitAction(
                    Action::make('submit')
                        ->label('Simpan')
                        ->button()
                        ->color('primary')
                        ->submit('save')
                )
            ]);
    }
}
