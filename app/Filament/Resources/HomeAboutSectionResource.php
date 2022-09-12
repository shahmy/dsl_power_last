<?php

namespace App\Filament\Resources;

use App\Models\HomeAboutSection;
use Filament\{Tables, Forms};
use Filament\Resources\{Form, Table, Resource};
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HomeAboutSectionResource\Pages;

class HomeAboutSectionResource extends Resource
{
    protected static ?string $model = HomeAboutSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $recordTitleAttribute = 'heading';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                Grid::make(['default' => 0])->schema([
                    TextInput::make('heading')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Heading')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('sub_heading')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Sub Heading')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    RichEditor::make('description')
                        ->rules(['required', 'string'])
                        ->placeholder('Description')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    FileUpload::make('image')
                        ->rules(['nullable', 'image', 'max:1024'])
                        ->image()
                        ->placeholder('Image')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('image_title')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Image Title')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('button_name')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Button Name')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    TextInput::make('button_link')
                        ->rules(['nullable', 'string'])
                        ->placeholder('Button Link')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('heading')->limit(50),
                Tables\Columns\TextColumn::make('sub_heading')->limit(50),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\ImageColumn::make('image')->rounded(),
                Tables\Columns\TextColumn::make('image_title')->limit(50),
                Tables\Columns\TextColumn::make('button_name')->limit(50),
                Tables\Columns\TextColumn::make('button_link')->limit(50),
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
            'index' => Pages\ListHomeAboutSections::route('/'),
            'create' => Pages\CreateHomeAboutSection::route('/create'),
            'edit' => Pages\EditHomeAboutSection::route('/{record}/edit'),
        ];
    }
}
