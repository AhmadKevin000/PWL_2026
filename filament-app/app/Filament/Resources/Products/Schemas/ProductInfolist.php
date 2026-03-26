<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Support\Icons\Heroicon;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //product info
                Section::make('Product Info')
                    ->description('')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Product Name')
                            ->weight('bold')
                            ->color('primary'),
                        TextEntry::make('id')
                            ->label('Product ID'),
                        TextEntry::make('sku')
                            ->label('Product SKU')
                            ->badge()
                            ->color(fn (string $state): string => strlen($state) >= 10 ? 'primary' : 'warning'),
                        TextEntry::make('description')
                            ->label('Product Description'),
                        TextEntry::make('created_at')
                            ->label('Product Creation Date')
                            ->date('d M Y')
                            ->color('info'),
                    ])
                ->columnSpanFull(),
                //product price n stok
                Section::make('Product Price and Stock')
                    ->description('')
                    ->schema([
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->weight('bold')
                            ->color('primary')
                            ->icon('heroicon-s-currency-dollar')
                            ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((int) $state, 0, ',', '.')),
                        TextEntry::make('stock')
                            ->label('Product Stock')
                            ->icon('heroicon-o-archive-box'),
                ])
                ->columnSpanFull(),
                Section::make('Product Image and Status')
                    ->description('')
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Product Image')
                            ->disk('public'),
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->weight('bold')
                            ->color('primary')
                            ->icon('heroicon-s-currency-dollar')
                            ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((int) $state, 0, ',', '.')),
                        TextEntry::make('stock')
                            ->label('Product Stock')
                            ->weight('bold')
                            ->color('primary')
                            ->icon('heroicon-o-archive-box'),
                        IconEntry::make('is_active')
                            ->label('Is Active')
                            ->boolean(),
                        IconEntry::make('is_featured')
                            ->label('Is Featured')
                            ->boolean(),
                ])
                ->columnSpanFull()
            ]);
    }
}
