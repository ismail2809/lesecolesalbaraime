<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
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

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-m-adjustments-vertical';

    protected static ?string $navigationGroup = 'Paramètres';

    protected static ?string $navigationLabel = 'Générales';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make() 
                    ->schema([
                        Section::make('Contact')
                        ->description('Informations du contact')
                        ->schema([ 
                            TextInput::make('email')->label('Email')->email()->required(), 
                            TextInput::make('tel1')->label('Téléphone 1')->tel()->required(), 
                            TextInput::make('tel2')->label('Téléphone 2')->tel()->required(), 
                        ])       
                    ])->columnSpan(['lg' => 1]),
                Group::make() 
                ->schema([
                    Section::make('Réseaux social')
                    ->description('Informations sur réseaux sociaux')
                    ->schema([ 
                        TextInput::make('facebook')->label('Facebook')->string()->required(), 
                        TextInput::make('instagram')->label('Instagram')->string()->required(), 
                    ])       
                ])->columnSpan(['lg' => 1]),
                Group::make() 
                ->schema([
                    Section::make('Adresses')
                    ->description('Informations sur les adresses')
                    ->schema([ 
                        TextArea::make('adresse1')->label('Adresse 1')->string()->required(), 
                        TextInput::make('adresse1_map')->label('Adresse 1 Map')->string()->required(), 
                        TextArea::make('adresse2')->label('Adresse 2')->string()->required(), 
                        TextInput::make('adresse2_map')->label('Adresse 2 Map')->string()->required(), 
                    ])       
                ])->columnSpan(['lg' => 2]),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('facebook')->label('Facebook')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('instagram')->label('Instagram')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('tel1')->label('Téléphone 1')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('tel2')->label('Téléphone 2')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('adresse1')->label('Adresse 1')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('adresse2')->label('Adresse 2')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
