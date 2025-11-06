<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
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

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-m-envelope-open';

    protected static ?string $navigationGroup = 'Contact page';

    protected static ?string $navigationLabel = 'Formulaire de Contact'; 
    
    protected static ?int $navigationSort = 0;  

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    } 
    

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()
                ->schema([
                    Section::make('Formulaire de Contact')
                        ->description('Les informations sur le formulaire de contact')
                        ->schema([ 
                            TextInput::make('name')
                                ->label('Nom')
                                ->string()
                                ->required(),
                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->required(),
                            TextArea::make('subject')
                                ->label('Sujet')
                                ->string()
                                ->required(),  
                            TextInput::make('message')
                                ->label('Message')
                                ->string()
                                ->required(), 
                        ])
                    ]),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([       
                    Tables\Columns\TextColumn::make('name')
                        ->label('name')
                        ->searchable()
                        ->sortable()
                        ->icon('heroicon-o-user'),
                    Tables\Columns\TextColumn::make('email')
                        ->label('Email')
                        ->searchable()
                        ->sortable()
                        ->toggleable()
                        ->icon('heroicon-o-envelope'),
                    Tables\Columns\TextColumn::make('subject')
                        ->label('Sujet')
                        ->searchable()
                        ->sortable()
                        ->toggleable()
                        ->badge(),
                    Tables\Columns\TextColumn::make('subject')
                        ->label('Sujet')
                        ->searchable()
                        ->sortable()
                        ->toggleable(),
                    Tables\Columns\TextColumn::make('created_at')
                        ->label('Date')
                        ->dateTime('d-m-Y H:i')
                        ->searchable()
                        ->sortable()
                        ->toggleable()
                        ->icon('heroicon-o-calendar'),  
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
