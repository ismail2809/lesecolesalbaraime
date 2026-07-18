<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PreinscriptionDemandeResource\Pages;
use App\Models\PreinscriptionDemande;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class PreinscriptionDemandeResource extends Resource
{
    protected static ?string $model = PreinscriptionDemande::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Préinscriptions';

    protected static ?string $navigationLabel = 'Demandes de Préinscription';

    protected static ?string $modelLabel = 'Demande';

    protected static ?string $pluralModelLabel = 'Demandes de Préinscription';

    protected static ?int $navigationSort = 0;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('statut', 'en_attente')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([

            Group::make()->schema([

                Section::make('Informations de l\'élève')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        TextInput::make('prenom_eleve')
                            ->label('Prénom de l\'élève')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('nom_eleve')
                            ->label('Nom de l\'élève')
                            ->required()
                            ->maxLength(100),
                        DatePicker::make('date_naissance')
                            ->label('Date de naissance')
                            ->required()
                            ->displayFormat('d/m/Y'),
                        Select::make('ecole')
                            ->label('École')
                            ->options([
                                'Albaraime I'  => 'Albaraime I – Préscolaire',
                                'Albaraime II' => 'Albaraime II – Préscolaire, Primaire, Collège & Lycée',
                            ])
                            ->required(),
                        Select::make('cycle')
                            ->label('Cycle')
                            ->options([
                                'Préscolaire' => 'Préscolaire',
                                'Primaire'    => 'Primaire',
                                'Collège'     => 'Collège',
                                'Lycée'       => 'Lycée',
                            ])
                            ->required(),
                        TextInput::make('niveau')
                            ->label('Niveau')
                            ->maxLength(100),
                    ])->columns(2),

                Section::make('Informations du parent / tuteur')
                    ->icon('heroicon-o-user')
                    ->schema([
                        TextInput::make('prenom_parent')
                            ->label('Prénom')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('nom_parent')
                            ->label('Nom')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('telephone')
                            ->label('Téléphone')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(150),
                    ])->columns(2),

                Section::make('Remarques')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->schema([
                        Textarea::make('message')
                            ->label('Message')
                            ->rows(3)
                            ->maxLength(1000),
                    ]),

            ])->columnSpan(2),

            Group::make()->schema([

                Section::make('Statut de la demande')
                    ->icon('heroicon-o-tag')
                    ->schema([
                        Select::make('statut')
                            ->label('Statut')
                            ->options([
                                'en_attente' => 'En attente',
                                'accepte'    => 'Acceptée',
                                'refuse'     => 'Refusée',
                            ])
                            ->default('en_attente')
                            ->required()
                            ->native(false),
                    ]),

                Section::make('Services')
                    ->icon('heroicon-o-truck')
                    ->schema([
                        Toggle::make('transport')
                            ->label('Transport scolaire demandé')
                            ->onColor('success')
                            ->offColor('gray'),
                    ]),

                Section::make('Date de soumission')
                    ->icon('heroicon-o-calendar')
                    ->schema([
                        TextInput::make('created_at')
                            ->label('Soumis le')
                            ->disabled()
                            ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('d/m/Y H:i') : '—'),
                    ]),

            ])->columnSpan(1),

        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('prenom_eleve')
                    ->label('Élève')
                    ->formatStateUsing(fn ($record) => $record->prenom_eleve . ' ' . $record->nom_eleve)
                    ->searchable(['prenom_eleve', 'nom_eleve'])
                    ->sortable()
                    ->icon('heroicon-o-academic-cap'),

                Tables\Columns\TextColumn::make('ecole')
                    ->label('École')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Albaraime I'  => 'info',
                        'Albaraime II' => 'success',
                        default        => 'gray',
                    })
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('cycle')
                    ->label('Cycle')
                    ->badge()
                    ->color('gray')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('niveau')
                    ->label('Niveau')
                    ->searchable()
                    ->toggleable()
                    ->placeholder('—'),

                Tables\Columns\TextColumn::make('nom_parent')
                    ->label('Parent')
                    ->formatStateUsing(fn ($record) => $record->prenom_parent . ' ' . $record->nom_parent)
                    ->searchable(['nom_parent', 'prenom_parent'])
                    ->icon('heroicon-o-user'),

                Tables\Columns\TextColumn::make('telephone')
                    ->label('Téléphone')
                    ->searchable()
                    ->icon('heroicon-o-phone')
                    ->copyable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('transport')
                    ->label('Transport')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->toggleable(),

                Tables\Columns\SelectColumn::make('statut')
                    ->label('Statut')
                    ->options([
                        'en_attente' => 'En attente',
                        'accepte'    => 'Acceptée',
                        'refuse'     => 'Refusée',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable()
                    ->icon('heroicon-o-calendar'),
            ])
            ->filters([
                SelectFilter::make('statut')
                    ->label('Statut')
                    ->options([
                        'en_attente' => 'En attente',
                        'accepte'    => 'Acceptée',
                        'refuse'     => 'Refusée',
                    ]),
                SelectFilter::make('ecole')
                    ->label('École')
                    ->options([
                        'Albaraime I'  => 'Albaraime I',
                        'Albaraime II' => 'Albaraime II',
                    ]),
                SelectFilter::make('cycle')
                    ->label('Cycle')
                    ->options([
                        'Préscolaire' => 'Préscolaire',
                        'Primaire'    => 'Primaire',
                        'Collège'     => 'Collège',
                        'Lycée'       => 'Lycée',
                    ]),
                Tables\Filters\TernaryFilter::make('transport')
                    ->label('Transport demandé'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPreinscriptionDemandes::route('/'),
            'create' => Pages\CreatePreinscriptionDemande::route('/create'),
            'view'   => Pages\ViewPreinscriptionDemande::route('/{record}'),
            'edit'   => Pages\EditPreinscriptionDemande::route('/{record}/edit'),
        ];
    }
}
