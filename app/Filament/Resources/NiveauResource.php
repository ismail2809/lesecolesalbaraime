<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NiveauResource\Pages;
use App\Models\Niveau;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NiveauResource extends Resource
{
    protected static ?string $model = Niveau::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    
    protected static ?string $navigationLabel = 'Niveaux';
    
    protected static ?string $modelLabel = 'Niveau';
    
    protected static ?string $pluralModelLabel = 'Niveaux';
    
    protected static ?string $navigationGroup = 'Gestion Académique';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informations du Niveau')
                    ->description('Définissez les détails du niveau académique')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titre du Niveau')
                            ->placeholder('Ex: 1ère Année, 2ème Année, Licence 1...')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText('Entrez le nom du niveau académique'),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Niveau')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-o-academic-cap')
                    ->color('primary'),
                    
                Tables\Columns\TextColumn::make('controleContinu_count')
                    ->label('Nb. Contrôles')
                    ->counts('controleContinu')
                    ->badge()
                    ->color('success')
                    ->icon('heroicon-o-document-text'),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Modifié le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Voir'),
                Tables\Actions\EditAction::make()
                    ->label('Modifier'),
                Tables\Actions\DeleteAction::make()
                    ->label('Supprimer'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Supprimer la sélection'),
                ]),
            ])
            ->emptyStateHeading('Aucun niveau trouvé')
            ->emptyStateDescription('Commencez par créer votre premier niveau académique.')
            ->emptyStateIcon('heroicon-o-academic-cap')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Créer un niveau')
                    ->icon('heroicon-o-plus'),
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
            'index' => Pages\ListNiveaux::route('/'),
            'create' => Pages\CreateNiveau::route('/create'),
            'edit' => Pages\EditNiveau::route('/{record}/edit'),
        ];
    }
}
