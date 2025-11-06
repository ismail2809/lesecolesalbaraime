<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FournituresResource\Pages;
use App\Filament\Resources\FournituresResource\RelationManagers;
use App\Models\Fourniture;
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
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Validation\Rule;

class FournituresResource extends Resource
{
    protected static ?string $model = Fourniture::class;

    protected static ?string $navigationIcon = 'mdi-notebook-multiple';

    protected static ?string $navigationGroup = 'Services page';

    protected static ?string $navigationLabel = 'Fournitures'; 
    
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                ->schema([
                    Section::make('Informations')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Forms\Components\TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->hint('exemple du titre : pdf'), 
                        Forms\Components\TextInput::make('niveau')
                            ->label('Niveau')
                            ->required()
                            ->hint('exemple du niveau : Maternelle'), 
                    ]) 
                ])->columnSpan(['lg' => 1]),   
                Group::make()
                ->schema([
                    Section::make('Fichiers')
                    ->description('Informations sur le fichier') 
                    ->icon('lucide-file')
                    ->schema([
                        Forms\Components\FileUpload::make('file')
                            ->required()    
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->label('Fichier PDF')
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                            ->uploadingMessage('Téléchagement en cours ...')
                            ->directory('uploads/fournitures')
                            ->acceptedFileTypes(['application/pdf'])
                            ->hint('Fichier recommandée : pdf'), 
                        Forms\Components\TextInput::make('title_btn')
                            ->label('Titre Button')
                            ->hint('Télécharger en pdf') 
                            ->required(), 
                    ]) 
                ])->columnSpan(['lg' => 1]),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('niveau')->label('Niveau')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListFournitures::route('/'),
            'create' => Pages\CreateFournitures::route('/create'),
            'edit' => Pages\EditFournitures::route('/{record}/edit'),
        ];
    }
}
