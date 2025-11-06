<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivitesResource\Pages;
use App\Filament\Resources\ActivitesResource\RelationManagers;
use App\Models\Activite;
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

class ActivitesResource extends Resource
{
    protected static ?string $model = Activite::class;

    protected static ?string $navigationIcon = 'heroicon-c-paint-brush';

    protected static ?string $navigationGroup = 'Services page';

    protected static ?string $navigationLabel = 'Activités sportives'; 
    
    protected static ?int $navigationSort = 12;

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
                        Forms\Components\RichEditor::make('content')
                            ->label('Contenu')
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->label('Description')
                            ->required(), 
                        
                    ]) 
                ])->columnSpan(['lg' => 1]),   
                Group::make()
                ->schema([
                    Section::make('Images')
                    ->description('Informations sur l\'image') 
                    ->icon('lucide-image')
                    ->schema([
                        Forms\Components\FileUpload::make('image1')
                            ->required()    
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('900')
                            //->rules(Rule::dimensions()->maxWidth(1920)->maxHeight(900))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                            ->uploadingMessage('Téléchagement en cours ...')
                            ->directory('uploads/cafeteria')
                            ->hint('Taille recommandée : 1920×900px'), 
                        Forms\Components\TextInput::make('alt_image1')
                            ->required(),
                        Forms\Components\FileUpload::make('image2')
                            ->required()    
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('900')
                            ->imageResizeTargetHeight('600')
                            //->rules(Rule::dimensions()->maxWidth(900)->maxHeight(600))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                            ->uploadingMessage('Téléchagement en cours ...')
                            ->directory('uploads/cafeteria')
                            ->hint('Taille recommandée : 900×600px'), 
                        Forms\Components\TextInput::make('alt_image2')
                            ->required(), 
                            Forms\Components\FileUpload::make('image3')
                                ->required()    
                                ->image()
                                ->preserveFilenames()
                                ->openable()
                                ->imageResizeTargetWidth('900')
                                ->imageResizeTargetHeight('600')
                                //->rules(Rule::dimensions()->maxWidth(900)->maxHeight(600))
                                ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                    $livewire->validateOnly($component->getStatePath());
                                }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/cafeteria')
                                ->hint('Taille recommandée : 900×600px'), 
                            Forms\Components\TextInput::make('alt_image3')
                                ->required(),  
                        
                    ]) 
                ])->columnSpan(['lg' => 1]),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('content')->label('Contenu')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('image1')->label('Image 1')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('image2')->label('Image 2')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('image3')->label('Image 3')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListActivites::route('/'),
            'create' => Pages\CreateActivites::route('/create'),
            'edit' => Pages\EditActivites::route('/{record}/edit'),
        ];
    }
}
