<?php

namespace App\Filament\Resources;

use App\Models\AboutPage;
use Filament\{Tables, Forms};
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\{Form, Table, Resource};
use App\Filament\Resources\AboutPageResource\Pages;

class AboutPageResource extends Resource
{
    protected static ?string $model = AboutPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Pages';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                Grid::make(['default' => 0])->schema([
                    TextInput::make('name')
                        ->rules(['required', 'string'])
                        ->placeholder('Name')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('slug')
                        ->rules(['required', 'string'])
                        ->placeholder('Slug')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    TextInput::make('url')
                        ->rules(['required', 'string'])
                        ->placeholder('Url')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    RichEditor::make('description')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Description')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    FileUpload::make('featured_image')
                        ->rules(['image', 'max:1024', 'nullable'])
                        ->image()
                        ->placeholder('Featured Image')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('title_description')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Title Description')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    FileUpload::make('title_bg_image')
                        ->rules(['image', 'max:1024', 'nullable'])
                        ->image()
                        ->placeholder('Title Bg Image')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('meta_title')
                        ->rules(['required', 'string'])
                        ->placeholder('Meta Title')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('meta_keyword')
                        ->rules(['required', 'string'])
                        ->placeholder('Meta Keyword')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    Textarea::make('meta_description')
                        ->rules(['required', 'string'])
                        ->placeholder('Meta Description')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->limit(50),
                Tables\Columns\TextColumn::make('slug')->limit(50),
                Tables\Columns\TextColumn::make('url')->limit(50),
                Tables\Columns\TextColumn::make('description')->limit(50),
                /* Tables\Columns\ImageColumn::make('featured_image')->rounded(),
                Tables\Columns\TextColumn::make('title_description')->limit(50),
                Tables\Columns\ImageColumn::make('title_bg_image')->rounded(),
                Tables\Columns\TextColumn::make('meta_title')->limit(50),
                Tables\Columns\TextColumn::make('meta_keyword')->limit(50),
                Tables\Columns\TextColumn::make('meta_description')->limit(50), */
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(
                                    Builder $query,
                                    $date
                                ): Builder => $query->whereDate(
                                    'created_at',
                                    '>=',
                                    $date
                                )
                            )
                            ->when(
                                $data['created_until'],
                                fn(
                                    Builder $query,
                                    $date
                                ): Builder => $query->whereDate(
                                    'created_at',
                                    '<=',
                                    $date
                                )
                            );
                    }),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutPages::route('/'),
            /* 'create' => Pages\CreateAboutPage::route('/create'), */
            'edit' => Pages\EditAboutPage::route('/{record}/edit'),
        ];
    }
}
