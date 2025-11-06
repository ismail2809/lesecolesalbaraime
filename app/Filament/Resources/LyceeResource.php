<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LyceeResource\Pages;
use App\Filament\Resources\LyceeResource\RelationManagers;
use App\Models\Lycee;
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

class LyceeResource extends Resource
{
    protected static ?string $model = Lycee::class;

    protected static ?string $navigationIcon = 'ionicon-school-outline';

    protected static ?string $navigationGroup = 'Cursus Scolaire page';

    protected static ?string $navigationLabel = 'Lycée';

    protected static ?int $navigationSort = 34;  

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
            ->schema([
                Section::make('Informations du page Lycée')
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
                Section::make('Images du page Lycée')
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
                        ->directory('uploads/lycee')
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
            'index' => Pages\ListLycees::route('/'),
            'create' => Pages\CreateLycee::route('/create'),
            'edit' => Pages\EditLycee::route('/{record}/edit'),
        ];
    }
}
