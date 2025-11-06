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
use Filament\Forms\Components\Textarea;;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;  
use Filament\Forms\Components\FileUpload;
use Illuminate\Validation\Rule;

class TemoignagesResource extends Resource
{
    protected static ?string $model = Temoignage::class;

    protected static ?string $navigationIcon = 'vaadin-user-card';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'Témoignage';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form   
            ->schema([ 
                Group::make() 
                    ->schema([
                        Section::make('Témoignages')
                        ->description('Informations sur Témoignage')
                        ->schema([ 
                            TextInput::make('title')->label('Titre')->string()->required(), 
                            TextArea::make('description')->label('Description')->string()->required(), 
                        ])       
                    ])->columnSpan(['lg' => 2]),
                    Group::make()
                    ->schema([
                        Section::make('Image du Témoignages')
                        ->description('Avatar du Témoignage')
                        ->schema([ 
                            TextInput::make('nom1')->label('nom 1')->string()->required(), 
                            TextArea::make('temoignage1')->label('Témoignage 1')->string()->required(),
                            FileUpload::make('avatar_1')
                                    ->required()    
                                    ->image()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->imageResizeTargetWidth('100')
                                    ->imageResizeTargetHeight('100')
                                    //->rules(Rule::dimensions()->maxWidth(100)->maxHeight(100))
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                        $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->uploadingMessage('Téléchagement en cours ...')
                                    ->directory('uploads/temoignage')
                                    ->hint('Taille recommandée : 100x100px'), 
                            TextInput::make('nom2')->label('nom 2')->string()->required(), 
                            TextArea::make('temoignage2')->label('Témoignage 2')->string()->required(),
                            FileUpload::make('avatar_2')
                                    ->required()    
                                    ->image()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->imageResizeTargetWidth('100')
                                    ->imageResizeTargetHeight('100')
                                    //->rules(Rule::dimensions()->maxWidth(100)->maxHeight(100))
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                        $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->uploadingMessage('Téléchagement en cours ...')
                                    ->directory('uploads/temoignage')
                                    ->hint('Taille recommandée : 100x100px'),
                            TextInput::make('nom3')->label('nom 3')->string()->required(), 
                            TextArea::make('temoignage3')->label('Témoignage 3')->string()->required(),
                            FileUpload::make('avatar_3')
                                    ->required()    
                                    ->image()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->imageResizeTargetWidth('100')
                                    ->imageResizeTargetHeight('100')
                                    //->rules(Rule::dimensions()->maxWidth(100)->maxHeight(100))
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                        $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->uploadingMessage('Téléchagement en cours ...')
                                    ->directory('uploads/temoignage')
                                    ->hint('Taille recommandée : 100x100px'),
                            TextInput::make('nom4')->label('nom 4')->string()->required(),  
                            TextArea::make('temoignage4')->label('Témoignage 4')->string()->required(),
                            FileUpload::make('avatar_4')
                                    ->required()    
                                    ->image()
                                    ->preserveFilenames()
                                    ->openable()
                                    ->imageResizeTargetWidth('100')
                                    ->imageResizeTargetHeight('100')
                                    //->rules(Rule::dimensions()->maxWidth(100)->maxHeight(100))
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                        $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->uploadingMessage('Téléchagement en cours ...')
                                    ->directory('uploads/temoignage')
                                    ->hint('Taille recommandée : 100x100px'),
                        ]) 
                    ])->columnSpan(['lg' => 2])
            ])->columns(2);
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
