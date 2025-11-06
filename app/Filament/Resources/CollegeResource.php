<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollegeResource\Pages;
use App\Filament\Resources\CollegeResource\RelationManagers;
use App\Models\College;
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

class CollegeResource extends Resource
{
    protected static ?string $model = College::class;

    protected static ?string $navigationIcon = 'maki-school';

    protected static ?string $navigationGroup = 'Cursus Scolaire page';

    protected static ?string $navigationLabel = 'Collège';

    protected static ?int $navigationSort = 33;  

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
            ->schema([
                Section::make('Informations du page Collège')
                ->description('Informations générales') 
                ->icon('lucide-info')
                ->schema([ 
                    Forms\Components\TextInput::make('niveau')
                        ->label('Niveau')
                        ->required(),
                    Forms\Components\TextInput::make('title')
                        ->label('Titre')
                        ->required(),
                    Forms\Components\RichEditor::make('description') 
                        ->label('Description')
                        ->required(),  
                    
                ]) 
            ])->columnSpan(['lg' => 2]),  
            Group::make()
            ->schema([
                Section::make('Images du page Collège')
                ->description('Informations sur l\'image') 
                ->icon('lucide-image')
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->label('Image')
                        ->required()    
                        ->image()
                        ->preserveFilenames()
                        ->openable()
                        ->imageResizeTargetWidth('600')
                        ->imageResizeTargetHeight('450') 
                        ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                            $livewire->validateOnly($component->getStatePath());
                        }) 
                        ->uploadingMessage('Téléchagement en cours ...')
                        ->directory('uploads/college')
                        ->hint('Taille recommandée : 600×450px'), 
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
            Tables\Columns\TextColumn::make('niveau')->label('Niveau')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('title')->label('Titre')->searchable()->sortable(), 
            Tables\Columns\TextColumn::make('description')->label('Description')->searchable()->sortable(),  
            Tables\Columns\TextColumn::make('created_at')->dateTime($format = 'd-m-Y')->label('Date Création')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListColleges::route('/'),
            'create' => Pages\CreateCollege::route('/create'),
            'edit' => Pages\EditCollege::route('/{record}/edit'),
        ];
    }
}
