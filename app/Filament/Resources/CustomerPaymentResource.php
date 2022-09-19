<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\CustomerPayment;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput\Mask;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerPaymentResource\Pages;
use App\Filament\Resources\CustomerPaymentResource\RelationManagers;

class CustomerPaymentResource extends Resource
{
    protected static ?string $model = CustomerPayment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                Grid::make(['default' => 0])->schema([
                    TextInput::make('first_name')
                        ->rules(['required', 'string'])
                        ->placeholder('First Name')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    TextInput::make('last_name')
                        ->rules(['required', 'string'])
                        ->placeholder('Last Name')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    TextInput::make('email')
                        ->email()
                        ->rules(['required', 'string', 'email'])
                        ->placeholder('Email Address')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),

                    TextInput::make('invoice_no')
                        ->rules(['required'])
                        ->placeholder('Invoice No')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),

                    DatePicker::make('invoice_date')
                        ->rules(['required'])
                        ->placeholder('Invoice Date')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 6,
                        ]),



                    RichEditor::make('invoice_details')
                        ->rules(['required', 'string'])
                        ->placeholder('Invoice Details')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ]),


                    TextInput::make('invoice_amount')
                        ->columnSpan([
                            'default' => 12,
                            'md' => 12,
                            'lg' => 12,
                        ])
                        ->placeholder('Invoice Amount (Rs)')
                        ->rules(['required'])
                        ->mask(fn (TextInput\Mask $mask) => $mask->money('Rs ', ',', 2)),


                    FileUpload::make('invoice_file')->acceptedFileTypes(['application/pdf'])
                        ->rules(['required'])
                        ->placeholder('Invoice Document')
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
                Tables\Columns\TextColumn::make('invoice_no')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('invoice_date')->sortable(),
                Tables\Columns\TextColumn::make('first_name')->searchable(),
                Tables\Columns\TextColumn::make('last_name')->searchable(),
                Tables\Columns\TextColumn::make('invoice_amount'),
                Tables\Columns\TextColumn::make('payment_date'),
                Tables\Columns\BooleanColumn::make('payment_status')->label('Payment Status'),
            ])
            ->filters([

                Filter::make('payment_date')
                    ->form([
                        Forms\Components\DatePicker::make('payment_from'),
                        Forms\Components\DatePicker::make('payment_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['payment_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('payment_date', '>=', $date),
                            )
                            ->when(
                                $data['payment_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('payment_date', '<=', $date),
                            );
                    }),


                Filter::make('payment_status')->toggle()
                    ->label('Payment Status')
                    ->query(fn (Builder $query): Builder => $query->where('payment_status', true))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomerPayments::route('/'),
            'create' => Pages\CreateCustomerPayment::route('/create'),
            'view' => Pages\ViewCustomerPayment::route('/{record}'),
            'edit' => Pages\EditCustomerPayment::route('/{record}/edit'),
        ];
    }
}
