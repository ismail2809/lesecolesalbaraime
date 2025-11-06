<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgrammesResource\Pages;
use App\Filament\Resources\ProgrammesResource\RelationManagers;
use App\Models\Programme;
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
use Filament\Forms\Components\Textarea;;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;  

class ProgrammesResource extends Resource
{
    protected static ?string $model = Programme::class;

    protected static ?string $navigationIcon = 'uni-schedule-o';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'Programme';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([ 
                Group::make()
                    ->columnSpanFull()
                    ->schema([
                        Section::make('Programme Scolaire du landing page')
                        ->description('Informations sur Programme Scolaire')
                        ->schema([ 
                            TextInput::make('title')->label('Titre')->string()->required(), 
                            TextArea::make('description')->label('Description')->string()->required(), 
                        ])->columnSpan(2),

                        Section::make('Services du Programme Scolaire')
                        ->description('Informations sur a Services')
                        ->schema([ 
                            TextInput::make('programme1')->label('programme 1')->string()->required(), 
                            TextInput::make('programme2')->label('programme 2')->string()->required(), 
                            TextInput::make('programme3')->label('programme 3')->string()->required(), 
                            TextInput::make('programme4')->label('programme 4')->string()->required(),  
                            TextInput::make('programme5')->label('programme 5')->string()->required(),  
                            TextInput::make('programme6')->label('programme 6')->string()->required(),  
                        ])->columnSpan(2) 
                                    
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('programme1')->label('programme 1')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('programme2')->label('programme 2')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('programme3')->label('programme 3')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('programme4')->label('programme 4')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('programme5')->label('programme 5')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('programme6')->label('programme 6')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime($format = 'd-m-Y')->label('Date Création')->searchable()->sortable()->toggleable(),

            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()
                        ->tooltip('Modifier ce Cursus Scolaire'),
                    Tables\Actions\DeleteAction::make()
                        ->tooltip('Supprimer ce Cursus Scolaire')
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
            'index' => Pages\ListProgrammes::route('/'),
            'create' => Pages\CreateProgrammes::route('/create'),
            'edit' => Pages\EditProgrammes::route('/{record}/edit'),
        ];
    }
}
