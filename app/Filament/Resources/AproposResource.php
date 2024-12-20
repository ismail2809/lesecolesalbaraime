<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AproposResource\Pages;
use App\Filament\Resources\AproposResource\RelationManagers;
use App\Models\Apropos;
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

class AproposResource extends Resource
{
    protected static ?string $model = Apropos::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([ 
                Group::make()
                    ->columnSpanFull()
                    ->schema([
                        Section::make('A propos du landing page')
                        ->description('Informations sur A propos')
                        ->schema([ 
                            TextInput::make('title')->label('Titre')->string()->required(), 
                            TextArea::make('description')->label('Description')->string()->required(), 
                            TextInput::make('quote')->label('Quote')->string()->required(),  
                        ])->columnSpan(2),

                        Section::make('Services du landing page')
                        ->description('Informations sur a Services')
                        ->schema([ 
                            TextInput::make('title_service1')->label('Service 1')->string()->required(), 
                            TextInput::make('text_service1')->label('Text du service 1')->string()->required(),  
                            TextInput::make('title_service2')->label('Service 2')->string()->required(), 
                            TextInput::make('text_service2')->label('Text du service 2')->string()->required(), 
                            TextInput::make('qualite')->label('Qualité')->string()->required(), 
                            Toggle::make('is_published') 
                                    ->label('Statut')
                                    ->default(true)
                                    ->inline(false)
                                    ->onColor('success')
                                    ->offColor('danger'),
                        ])->columnSpan(2) 
                                       
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('qualite')->label('Qualité')->searchable()->sortable(),
            Tables\Columns\IconColumn::make('is_published')
                    ->label('Statut')
                    ->boolean()
                    ->sortable()
                    ->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime($format = 'd-m-Y')->label('Date Création')->searchable()->sortable()->toggleable(),

        ])
        ->defaultSort('created_at', 'desc')
        ->filters([
            // Add filters if needed
        ])
        ->actions([
            Tables\Actions\ActionGroup::make([
                Tables\Actions\EditAction::make()
                    ->tooltip('Modifier cette apropos'),
                Tables\Actions\DeleteAction::make()
                    ->tooltip('Supprimer cette apropos')
            ])
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make()
                    ->tooltip('Supprimer les lignes sélectionnées'),
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
            'index' => Pages\ListApropos::route('/'),
            'create' => Pages\CreateApropos::route('/create'),
            'edit' => Pages\EditApropos::route('/{record}/edit'),
        ];
    }
}
