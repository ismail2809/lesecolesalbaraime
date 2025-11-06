<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\FileUpload;
use Illuminate\Validation\Rule;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-m-rocket-launch';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'Hero';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('Informations du page d\'accueil')
                        ->description('Informations générales') 
                        ->icon('lucide-info')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                            ->label('Titre')
                                ->required(),
                            Forms\Components\TextInput::make('second_title')
                                ->label('Sous-titre')
                                ->required(),
                            Forms\Components\Textarea::make('description')
                                ->label('Description')
                                ->rows(10)
                                ->cols(20)
                                ->required(),
                            Forms\Components\TextInput::make('button_text')
                                ->label('Texte du bouton')
                                ->required(),
                            Forms\Components\TextInput::make('button_link')
                                ->label('Lien du bouton')
                                ->required(),
                        ])  
                    ])->columnSpan(['lg' => 1]),
                    Group::make()
                    ->schema([
                        Section::make('Images du page d\'accueil')
                        ->description('Informations sur les images') 
                        ->icon('lucide-image')
                        ->schema([
                            Forms\Components\FileUpload::make('image1')
                                ->label('Image principale')
                                ->required()    
                                ->image()
                                ->preserveFilenames()
                                ->openable()
                                ->imageResizeTargetWidth('1920')
                                ->imageResizeTargetHeight('1280')
                                //->rules(Rule::dimensions()->maxWidth(1920)->maxHeight(1280))
                                ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                    $livewire->validateOnly($component->getStatePath());
                                }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/home')
                                ->hint('Taille recommandée : 1920x1280px'),      
                            Forms\Components\TextInput::make('alt_image1')
                                ->label('Texte alternatif - Image 1')
                                ->required(),

                            Forms\Components\FileUpload::make('image2')
                                ->label('Image secondaire')
                                ->required()    
                                ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1280')
                            //->rules(Rule::dimensions()->maxWidth(1920)->maxHeight(1280))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/home')
                                ->hint('Taille recommandée : 1920x1280px'),  
                            Forms\Components\TextInput::make('alt_image2')
                                ->label('Texte alternatif - Image 2')
                                ->required(),

                            Forms\Components\FileUpload::make('image3')
                                ->label('Image tertiaire')
                                ->required()    
                                ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1280')
                            //->rules(Rule::dimensions()->maxWidth(1920)->maxHeight(1280))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/home')
                                ->hint('Taille recommandée : 1920x1280px'),  
                            Forms\Components\TextInput::make('alt_image3')
                                ->label('Texte alternatif - Image 3')
                                ->required(),
                        ]) 
                    ])->columnSpan(['lg' => 1]), 
        ])->columns(2);
         
    }

    public static function table(Table $table): Table
    {
        return $table
            
        ->columns([
            Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('second_title')->label('Sous titre')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('button_text')->label('Text button')->searchable()->sortable()->toggleable(),
            Tables\Columns\TextColumn::make('button_link')->label('Url button')->searchable()->sortable()->toggleable(), 
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
