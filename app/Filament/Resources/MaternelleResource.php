<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaternelleResource\Pages;
use App\Filament\Resources\MaternelleResource\RelationManagers;
use App\Models\Maternelle;
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

class MaternelleResource extends Resource
{
    protected static ?string $model = Maternelle::class;

    protected static ?string $navigationIcon = 'hugeicons-school';

    protected static ?string $navigationGroup = 'Cursus Scolaire page';

    protected static ?string $navigationLabel = 'Maternelle';

    protected static ?int $navigationSort = 31;  

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
            ->schema([
                Section::make('Informations du page Maternelle')
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
                Section::make('Images du page Maternelle')
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
                        ->imageResizeTargetHeight('650') 
                        ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                            $livewire->validateOnly($component->getStatePath());
                        }) 
                        ->uploadingMessage('Téléchagement en cours ...')
                        ->directory('uploads/maternelle')
                        ->hint('Taille recommandée : 600×650px'), 
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
            'index' => Pages\ListMaternelles::route('/'),
            'create' => Pages\CreateMaternelle::route('/create'),
            'edit' => Pages\EditMaternelle::route('/{record}/edit'),
        ];
    }
}
