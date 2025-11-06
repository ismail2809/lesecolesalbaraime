<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ControleContinuResource\Pages;
use App\Models\ControleContinu;
use App\Models\Matiere;
use App\Models\Niveau;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;

class ControleContinuResource extends Resource
{
    protected static ?string $model = ControleContinu::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = 'Contrôles Continus';
    
    protected static ?string $modelLabel = 'Contrôle Continu';
    
    protected static ?string $pluralModelLabel = 'Contrôles Continus';
    
    protected static ?string $navigationGroup = 'Gestion Académique';
    
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informations Générales')
                    ->description('Définissez les informations principales du contrôle continu')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titre du Contrôle')
                            ->placeholder('Ex: Contrôle N°1, Examen de mi-semestre...')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),
                            
                        Forms\Components\TextInput::make('ordre')
                            ->label('Ordre')
                            ->numeric()
                            ->default(1)
                            ->minValue(1)
                            ->helperText('Ordre d\'affichage du contrôle')
                            ->columnSpan(1),
                    ])
                    ->columns(3)
                    ->collapsible(),

                Forms\Components\Section::make('Classification Académique')
                    ->description('Associez le contrôle à un niveau et une matière')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        Forms\Components\Select::make('niveau_id')
                            ->label('Niveau')
                            ->relationship('niveaus', 'title')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre du Niveau')
                                    ->placeholder('Ex: 1ère Année, Licence 1...')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->createOptionModalHeading('Créer un nouveau niveau')
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Créer un nouveau niveau')
                                    ->modalWidth('md');
                            })
                            ->editOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre du Niveau')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->native(false)
                            ->columnSpan(1),
                            
                        Forms\Components\Select::make('matiere_id')
                            ->label('Matière')
                            ->relationship('matieres', 'title')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre de la Matière')
                                    ->placeholder('Ex: Mathématiques, Physique...')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->createOptionModalHeading('Créer une nouvelle matière')
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Créer une nouvelle matière')
                                    ->modalWidth('md');
                            })
                            ->editOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre de la Matière')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->native(false)
                            ->columnSpan(1),
                            
                        Forms\Components\Select::make('semestre_id')
                            ->label('Semestre')
                            ->relationship('semestres', 'title')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre du Semestre')
                                    ->placeholder('Ex: Semestre 1, Semestre 2...')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->createOptionModalHeading('Créer un nouveau semestre')
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Créer un nouveau semestre')
                                    ->modalWidth('md');
                            })
                            ->editOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre du Semestre')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->native(false)
                            ->columnSpan(1),
                    ])
                    ->columns(3)
                    ->collapsible(),

                Forms\Components\Section::make('Fichier et Bouton')
                    ->description('Ajoutez le fichier du contrôle et personnalisez le bouton')
                    ->icon('heroicon-o-paper-clip')
                    ->schema([
                        Forms\Components\FileUpload::make('file')
                            ->label('Fichier du Contrôle')
                            ->directory('controles-continus')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'application/msword',
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                            ])
                            ->maxSize(20480) // 20 MB en KB
                            ->helperText('Formats acceptés: PDF, DOC, DOCX (Max: 20 MB)')
                            ->preserveFilenames()
                            ->validationMessages([
                                'max' => 'Le fichier ne doit pas dépasser 20 MB.',
                                'mimes' => 'Le fichier doit être un PDF ou Word (DOC, DOCX).',
                                'uploaded' => 'Le fichier n\'a pas pu être téléchargé. Vérifiez la taille (max 20 MB) et votre configuration PHP.',
                            ])
                            ->disk('public')
                            ->visibility('public')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('title_btn')
                            ->label('Texte du Bouton')
                            ->placeholder('Ex: Télécharger, Voir le sujet...')
                            ->maxLength(255)
                            ->helperText('Personnalisez le texte du bouton de téléchargement')
                            ->columnSpanFull(),
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
                    ->label('Titre')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->wrap(),
                    
                Tables\Columns\TextColumn::make('niveaus.title')
                    ->label('Niveau')
                    ->badge()
                    ->color('primary')
                    ->icon('heroicon-o-academic-cap')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('matieres.title')
                    ->label('Matière')
                    ->badge()
                    ->color('info')
                    ->icon('heroicon-o-book-open')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('semestres.title')
                    ->label('Semestre')
                    ->badge()
                    ->color('warning')
                    ->icon('heroicon-o-calendar')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('ordre')
                    ->label('Ordre')
                    ->sortable()
                    ->alignCenter()
                    ->badge()
                    ->color('gray'),
                    
                Tables\Columns\IconColumn::make('file')
                    ->label('Fichier')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->alignCenter(),
                    
                Tables\Columns\TextColumn::make('title_btn')
                    ->label('Bouton')
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
                    
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
                Tables\Filters\SelectFilter::make('niveau_id')
                    ->label('Niveau')
                    ->relationship('niveaus', 'title')
                    ->preload()
                    ->multiple(),
                    
                Tables\Filters\SelectFilter::make('matiere_id')
                    ->label('Matière')
                    ->relationship('matieres', 'title')
                    ->preload()
                    ->multiple(),
                    
                Tables\Filters\SelectFilter::make('semestre_id')
                    ->label('Semestre')
                    ->relationship('semestres', 'title')
                    ->preload()
                    ->multiple(),
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
            ->defaultSort('ordre', 'asc')
            ->emptyStateHeading('Aucun contrôle continu trouvé')
            ->emptyStateDescription('Commencez par créer votre premier contrôle continu.')
            ->emptyStateIcon('heroicon-o-document-text')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Créer un contrôle')
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
            'index' => Pages\ListControleContinus::route('/'),
            'create' => Pages\CreateControleContinu::route('/create'),
            'edit' => Pages\EditControleContinu::route('/{record}/edit'),
        ];
    }
}
