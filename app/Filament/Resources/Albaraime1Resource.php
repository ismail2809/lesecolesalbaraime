<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Albaraime1Resource\Pages;
use App\Filament\Resources\Albaraime1Resource\RelationManagers;
use App\Models\Albaraime1;
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

class Albaraime1Resource extends Resource
{
    protected static ?string $model = Albaraime1::class;

    protected static ?string $navigationIcon = 'heroicon-c-squares-2x2'; 

    protected static ?string $navigationGroup = 'AlBaraimes page';

    protected static ?string $navigationLabel = 'AlBaraime I';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form 
            ->schema([
                Group::make()
                ->schema([
                    Section::make('Informations du page albaraime I')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Forms\Components\TextInput::make('nom')
                            ->label('Nom')
                            ->required(),
                        Forms\Components\TextInput::make('profile')
                            ->label('Profile')
                            ->required(),
                        Forms\Components\RichEditor::make('content') 
                            ->label('Contenu')
                            ->required(), 
                        
                    ]) 
                ])->columnSpan(['lg' => 1]),  
                Group::make()
                ->schema([
                    Section::make('Informations du page albaraime I')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Forms\Components\TextInput::make('title')
                            ->label('Titre')
                            ->required(), 
                        Forms\Components\RichEditor::make('description') 
                            ->label('Description')
                            ->required(),      
                    ])  
                ])->columnSpan(['lg' => 1]),
                Group::make()
                ->schema([
                    Section::make('Images du page albaraime I')
                    ->description('Informations sur l\'image') 
                    ->icon('lucide-image')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->required()    
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('570')
                            ->imageResizeTargetHeight('700')
                            //->rules(Rule::dimensions()->maxWidth(570)->maxHeight(700))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                            ->uploadingMessage('Téléchagement en cours ...')
                            ->directory('uploads/alBaraime1')
                            ->hint('Taille recommandée : 570×700px'), 
                            Forms\Components\TextInput::make('alt_image')
                                ->label('Alt image')
                                ->required(),
                    ]) 
                ])->columnSpan(['lg' => 2]),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ 
                Tables\Columns\TextColumn::make('nom')
                    ->label('Nom')
                    ->searchable(),  
                Tables\Columns\TextColumn::make('profile')
                    ->label('Profile')
                    ->searchable(),  
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable(),   
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('date création')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), 
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
            'index' => Pages\ListAlbaraime1s::route('/'),
            'create' => Pages\CreateAlbaraime1::route('/create'),
            'edit' => Pages\EditAlbaraime1::route('/{record}/edit'),
        ];
    }
}
