<?php

namespace App\Filament\Resources\PostResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\{Form, Table};
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Tables\Filters\MultiSelectFilter;
use Filament\Resources\RelationManagers\HasManyRelationManager;

class GalleriesRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'galleries';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(['default' => 0])->schema([
                BelongsToSelect::make('project_id')
                    ->rules(['nullable', 'exists:projects,id'])
                    ->relationship('project', 'title')
                    ->searchable()
                    ->placeholder('Project')
                    ->columnSpan([
                        'default' => 12,
                        'md' => 12,
                        'lg' => 12,
                    ]),

                BelongsToSelect::make('product_id')
                    ->rules(['nullable', 'exists:products,id'])
                    ->relationship('product', 'name')
                    ->searchable()
                    ->placeholder('Product')
                    ->columnSpan([
                        'default' => 12,
                        'md' => 12,
                        'lg' => 12,
                    ]),

                TextInput::make('name')
                    ->rules(['required', 'max:255', 'string'])
                    ->placeholder('Name')
                    ->columnSpan([
                        'default' => 12,
                        'md' => 12,
                        'lg' => 12,
                    ]),

                RichEditor::make('description')
                    ->rules(['nullable', 'max:255', 'string'])
                    ->placeholder('Description')
                    ->columnSpan([
                        'default' => 12,
                        'md' => 12,
                        'lg' => 12,
                    ]),

                Toggle::make('status')
                    ->rules(['required', 'boolean'])
                    ->default('1')
                    ->columnSpan([
                        'default' => 12,
                        'md' => 12,
                        'lg' => 12,
                    ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('post.title')->limit(50),
                Tables\Columns\TextColumn::make('project.title')->limit(50),
                Tables\Columns\TextColumn::make('product.name')->limit(50),
                Tables\Columns\TextColumn::make('name')->limit(50),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\BooleanColumn::make('status'),
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

                MultiSelectFilter::make('post_id')->relationship(
                    'post',
                    'title'
                ),

                MultiSelectFilter::make('project_id')->relationship(
                    'project',
                    'title'
                ),

                MultiSelectFilter::make('product_id')->relationship(
                    'product',
                    'name'
                ),
            ]);
    }
}
