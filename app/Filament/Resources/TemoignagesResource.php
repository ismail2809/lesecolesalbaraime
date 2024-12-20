<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemoignagesResource\Pages;
use App\Filament\Resources\TemoignagesResource\RelationManagers;
use App\Models\Temoignage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;  

class TemoignagesResource extends Resource
{
    protected static ?string $model = Temoignage::class;

    protected static ?string $navigationIcon = 'vaadin-user-card';

    public static function form(Form $form): Form
    {
        return $form   
            ->schema([ 
                Group::make()
                    ->columnSpanFull()
                    ->schema([
                        Section::make('Reinscriptions')
                        ->description('Informations sur Reinscriptions')
                        ->schema([ 
                            TextInput::make('title')->label('Titre')->string()->required(), 
                            TextArea::make('description')->label('Description')->string()->required(), 
                        ])       
                    ])->columnSpan(2),
                        Section::make('Témoignages')
                        ->description('Informations sur Témoignages')
                        ->schema([ 
                            TextInput::make('nom1')->label('nom 1')->string()->required(), 
                            TextArea::make('temoignage1')->label('Témoignage 1')->string()->required(),
                            TextInput::make('nom2')->label('nom 2')->string()->required(), 
                            TextArea::make('temoignage2')->label('Témoignage 2')->string()->required(),
                            TextInput::make('nom3')->label('nom 3')->string()->required(), 
                            TextArea::make('temoignage3')->label('Témoignage 3')->string()->required(),
                            TextInput::make('nom4')->label('nom 4')->string()->required(),  
                            TextArea::make('temoignage4')->label('Témoignage 4')->string()->required(),
                        ])->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('description')->label('Description')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('nom1')->label('nom 1')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('temoignage1')->label('Témoignage 1')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('nom2')->label('nom 2')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('temoignage2')->label('Témoignage 2')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('nom3')->label('nom 3')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('temoignage3')->label('Témoignage 3')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('nom4')->label('nom 4')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('temoignage4')->label('Témoignage 4')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('created_at')->label('Date de création')->searchable()->sortable()->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTemoignages::route('/'),
            'create' => Pages\CreateTemoignages::route('/create'),
            'edit' => Pages\EditTemoignages::route('/{record}/edit'),
        ];
    }
}
