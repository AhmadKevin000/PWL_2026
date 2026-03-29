<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use App\Models\Category;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ── KIRI: 2/3 lebar (columnSpan 2 dari 3) ──────────────────
                Group::make([

                    // Section 1 – Post Details (2 kolom untuk field utama)
                    Section::make('Post Details')
                        ->description('Isi informasi utama dari postingan')
                        ->icon('heroicon-o-document-text')
                        ->schema([
                            TextInput::make('title')
                                ->label('Judul')
                                ->rules(['required', 'min:5', 'max:10'])
                                ->columnSpanFull(),

                            TextInput::make('slug')
                                ->label('Slug')
                                ->rules(['required', 'min:3', 'max:50'])
                                ->unique()
                                ->validationMessages([
                                    "unique" => "Slug must be unique"
                                ]),

                            Select::make('category_id')
                                ->label('Kategori')
                                ->relationship('category', 'name')
                                ->options(Category::all()->pluck('name', 'id'))
                                ->required()
                                //->preload()
                                ->searchable(),

                            ColorPicker::make('color')
                                ->label('Warna Label'),

                            RichEditor::make('content')
                                ->label('Konten')
                                ->required()
                                ->columnSpanFull(),
                        ])
                        ->columns(2), // ← 2 kolom untuk field utama

                    // Section 2 – Image Upload
                    Section::make('Gambar')
                        ->description('Unggah gambar unggulan untuk postingan')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Gambar Unggulan')
                                ->required()
                                ->disk('public')
                                ->directory('posts')
                                ->image()
                                ->imageEditor()
                                ->columnSpanFull(),
                        ]),

                ])->columnSpan(2), // ← 2/3 dari total 3 kolom


                // ── KANAN: 1/3 lebar (columnSpan 1 dari 3) ─────────────────
                Group::make([

                    // Section 3 – Publikasi
                    Section::make('Publikasi')
                        ->description('Atur status dan jadwal postingan')
                        ->icon('heroicon-o-rocket-launch')
                        ->schema([
                            Checkbox::make('published')
                                ->label('Publikasikan Sekarang'),

                            DateTimePicker::make('published_at')
                                ->label('Jadwal Publikasi')
                                ->native(false),
                        ]),

                    // Section 4 – Meta / Tags
                    Section::make('Meta & Tag')
                        ->description('Tambahkan tag untuk SEO dan kategorisasi')
                        ->icon('heroicon-o-tag')
                        ->schema([
                            Select::make('tags')
                                ->label('Tag')
                                ->relationship('tags', 'name')
                                ->multiple()
                                ->searchable()
                                ->preload(),
                        ]),

                ])->columnSpan(1), // ← 1/3 dari total 3 kolom

            ])->columns(3); // ← Grid 3 kolom sebagai dasar layout
    }
}