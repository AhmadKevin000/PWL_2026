<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //Tab Product Details
                Tabs::make('Product Tabs')
                ->tabs([
                    Tab::make('Product Details')
                        ->icon('heroicon-o-information-circle')
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
                        ]),
                    Tab::make('Product Price & Stock')
                        ->icon('heroicon-o-shopping-cart')
                        ->schema([
                            TextEntry::make('price')
                                ->label('Product Price')
                                ->weight('bold')
                                ->color('primary')
                                ->icon('heroicon-o-currency-dollar'),
                            TextEntry::make('stock')
                                ->label('Product Stock')
                                ->badge()
                                ->formatStateUsing(fn ($state): string => ((int) $state) <= 0 ? 'Out of stock' : ((int) $state) . ' pcs')
                                ->color(fn ($state): string => match (true) {
                                    ((int) $state) <= 0 => 'danger',
                                    ((int) $state) <= 5 => 'warning',
                                    default => 'success',
                                }),
                        ]),
                    Tab::make('Image & Status')
                        ->icon('heroicon-o-photo')
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
                                ->badge()
                                ->formatStateUsing(fn ($state): string => ((int) $state) <= 0 ? 'Out of stock' : ((int) $state) . ' pcs')
                                ->color(fn ($state): string => match (true) {
                                    ((int) $state) <= 0 => 'danger',
                                    ((int) $state) <= 5 => 'warning',
                                    default => 'success',
                                })
                                ->icon('heroicon-o-archive-box'),
                            IconEntry::make('is_active')
                                ->label('Is Active')
                                ->boolean(),
                            IconEntry::make('is_featured')
                                ->label('Is Featured')
                                ->boolean(),
                        ]),
                    ])
                    ->columnSpanFull()
                    ->vertical(),
                //product info
                // Section::make('Product Info')
                //     ->description('')
                //     ->schema([
                //         TextEntry::make('name')
                //             ->label('Product Name')
                //             ->weight('bold')
                //             ->color('primary'),
                //         TextEntry::make('id')
                //             ->label('Product ID'),
                //         TextEntry::make('sku')
                //             ->label('Product SKU')
                //             ->badge()
                //             ->color(fn (string $state): string => strlen($state) >= 10 ? 'primary' : 'warning'),
                //         TextEntry::make('description')
                //             ->label('Product Description'),
                //         TextEntry::make('created_at')
                //             ->label('Product Creation Date')
                //             ->date('d M Y')
                //             ->color('info'),
                //     ])
                // ->columnSpanFull(),
                //product price n stok
                // Section::make('Product Price and Stock')
                //     ->description('')
                //     ->schema([
                //         TextEntry::make('price')
                //             ->label('Product Price')
                //             ->weight('bold')
                //             ->color('primary')
                //             ->icon('heroicon-s-currency-dollar')
                //             ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((int) $state, 0, ',', '.')),
                //         TextEntry::make('stock')
                //             ->label('Product Stock')
                //             ->icon('heroicon-o-archive-box'),
                // ])
                // ->columnSpanFull(),
                // //product image and status
                // Section::make('Product Image and Status')
                //     ->description('')
                //     ->schema([
                //         ImageEntry::make('image')
                //             ->label('Product Image')
                //             ->disk('public'),
                //         TextEntry::make('price')
                //             ->label('Product Price')
                //             ->weight('bold')
                //             ->color('primary')
                //             ->icon('heroicon-s-currency-dollar')
                //             ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((int) $state, 0, ',', '.')),
                //         TextEntry::make('stock')
                //             ->label('Product Stock')
                //             ->weight('bold')
                //             ->color('primary')
                //             ->icon('heroicon-o-archive-box'),
                //         IconEntry::make('is_active')
                //             ->label('Is Active')
                //             ->boolean(),
                //         IconEntry::make('is_featured')
                //             ->label('Is Featured')
                //             ->boolean(),
                // ])
                // ->columnSpanFull()
            ]);
    }
}
