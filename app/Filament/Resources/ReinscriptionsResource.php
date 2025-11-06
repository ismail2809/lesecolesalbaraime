<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReinscriptionsResource\Pages;
use App\Filament\Resources\ReinscriptionsResource\RelationManagers;
use App\Models\Reinscription;
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

class ReinscriptionsResource extends Resource
{
    protected static ?string $model = Reinscription::class;

    protected static ?string $navigationIcon = 'eos-subscription-management';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'Ré-inscription'; 
    
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([ 
            Group::make()
                ->columnSpanFull()
                ->schema([
                    Section::make('Ré-inscriptions')
                    ->description('Informations sur Ré-inscriptions')
                    ->schema([ 
                        TextInput::make('title')->label('Titre')->string()->required(), 
                        TextArea::make('description')->label('Description')->string()->required(),  
                        Forms\Components\FileUpload::make('image')
                            ->required()    
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('700')
                            //->rules(Rule::dimensions()->maxWidth(1920)->maxHeight(700))
                            ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                $livewire->validateOnly($component->getStatePath());
                            }) 
                            ->uploadingMessage('Téléchagement en cours ...')
                            ->directory('uploads/reinscriptions')
                            ->hint('Taille recommandée : 1920x700px'),      
                        Forms\Components\TextInput::make('alt_image')
                            ->required(),
                    ]) 
                                
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('description')->label('Description')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListReinscriptions::route('/'),
            'create' => Pages\CreateReinscriptions::route('/create'),
            'edit' => Pages\EditReinscriptions::route('/{record}/edit'),
        ];
    }
}
