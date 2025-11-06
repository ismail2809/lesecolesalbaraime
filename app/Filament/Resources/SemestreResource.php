<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SemestreResource\Pages;
use App\Models\Semestre;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SemestreResource extends Resource
{
    protected static ?string $model = Semestre::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    
    protected static ?string $navigationLabel = 'Semestres';
    
    protected static ?string $modelLabel = 'Semestre';
    
    protected static ?string $pluralModelLabel = 'Semestres';
    
    protected static ?string $navigationGroup = 'Gestion Académique';
    
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informations du Semestre')
                    ->description('Définissez les détails du semestre')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titre du Semestre')
                            ->placeholder('Ex: Semestre 1, Semestre 2...')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText('Entrez le nom du semestre'),
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
                    ->label('Semestre')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-o-calendar')
                    ->color('warning'),
                    
                Tables\Columns\TextColumn::make('controleContinu_count')
                    ->label('Nb. Contrôles')
                    ->counts('controleContinu')
                    ->badge()
                    ->color('info')
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
            ->emptyStateHeading('Aucun semestre trouvé')
            ->emptyStateDescription('Commencez par créer votre premier semestre.')
            ->emptyStateIcon('heroicon-o-calendar')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Créer un semestre')
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
            'index' => Pages\ListSemestres::route('/'),
            'create' => Pages\CreateSemestre::route('/create'),
            'edit' => Pages\EditSemestre::route('/{record}/edit'),
        ];
    }
}