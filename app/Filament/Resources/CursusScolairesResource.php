<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CursusScolairesResource\Pages;
use App\Filament\Resources\CursusScolairesResource\RelationManagers;
use App\Models\CursusScolaire;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Validation\Rule;

class CursusScolairesResource extends Resource
{
    protected static ?string $model = CursusScolaire::class;

    protected static ?string $navigationIcon = 'eos-school-o';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'Cursus Scolaire ';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                    Group::make()
                        ->columnSpanFull()
                        ->schema([
                            Section::make('Cursus Scolaire du landing page')
                            ->description('Informations sur Cursus Scolaire')
                            ->schema([
                                TextInput::make('title')->label('Titre')->string()->required(),
                                TextArea::make('description')->label('Description')->string()->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->required()
                                    ->image()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->imageResizeTargetWidth('1000')
                                    ->imageResizeTargetHeight('1100')
                                    //->rules(Rule::dimensions()->maxWidth(1000)->maxHeight(1100))
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) {
                                        $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->uploadingMessage('Téléchagement en cours ...')
                                    ->directory('uploads/cursusScolaire')
                                    ->hint('Taille recommandée : 1000x1100px'),
                                Forms\Components\TextInput::make('alt_image')
                                    ->required(),
                            ])->columnSpan(2),

                            Section::make('Services du Cursus Scolaire')
                            ->description('Informations sur a Services')
                            ->schema([
                                TextInput::make('service1')->label('Service 1')->string()->required(),
                                TextInput::make('service2')->label('Service 2')->string()->required(),
                                TextInput::make('service3')->label('Service 3')->string()->required(),
                                TextInput::make('service4')->label('Service 4')->string()->required(),
                                // Toggle::make('is_published')
                                //         ->label('Statut')
                                //         ->default(true)
                                //         ->inline(false)
                                //         ->onColor('success')
                                //         ->offColor('danger'),
                            ])->columnSpan(2)
                                        
                        ])
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('service1')->label('Service 1')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('service2')->label('Service 2')->searchable()->sortable()->toggleable(),
            Tables\Columns\TextColumn::make('service3')->label('Service 3')->searchable()->sortable()->toggleable(),
            Tables\Columns\TextColumn::make('service4')->label('Service 4')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListCursusScolaires::route('/'),
            'create' => Pages\CreateCursusScolaires::route('/create'),
            'edit' => Pages\EditCursusScolaires::route('/{record}/edit'),
        ];
    }
}
