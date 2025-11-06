<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Albaraime2Resource\Pages;
use App\Filament\Resources\Albaraime2Resource\RelationManagers;
use App\Models\Albaraime2;
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

class Albaraime2Resource extends Resource
{
    protected static ?string $model = Albaraime2::class;

    protected static ?string $navigationIcon = 'heroicon-c-squares-2x2'; 

    protected static ?string $navigationGroup = 'AlBaraimes page';

    protected static ?string $navigationLabel = 'AlBaraime II';

    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form 
            ->schema([
                Group::make()
                ->schema([
                    Section::make('Informations du page albaraime II')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Forms\Components\TextInput::make('nom')
                            ->required(),
                        Forms\Components\TextInput::make('profile')
                            ->required(),
                        Forms\Components\RichEditor::make('content') 
                                ->required(), 
                        
                    ]) 
                ])->columnSpan(['lg' => 1]),  
                Group::make()
                ->schema([
                    Section::make('Informations du page albaraime II')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Forms\Components\TextInput::make('title')
                            ->required(), 
                        Forms\Components\RichEditor::make('description') 
                            ->required(),      
                        Forms\Components\TextInput::make('alt_image')
                            ->required(), 
                    ])  
                ])->columnSpan(['lg' => 1]),
                Group::make()
                ->schema([
                    Section::make('Images du page albaraime II')
                    ->description('Informations sur l\'image') 
                    ->icon('lucide-image')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
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
                            ->directory('uploads/alBaraime2')
                            ->hint('Taille recommandée : 570×700px'), 
                        
                    ]) 
                ])->columnSpan(['lg' => 2]),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ 
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),  
                Tables\Columns\TextColumn::make('profile')
                    ->searchable(),  
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),   
                Tables\Columns\ImageColumn::make('image'), 
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListAlbaraime2s::route('/'),
            'create' => Pages\CreateAlbaraime2::route('/create'),
            'edit' => Pages\EditAlbaraime2::route('/{record}/edit'),
        ];
    }
}
