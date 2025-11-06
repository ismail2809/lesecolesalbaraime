<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AproposResource\Pages;
use App\Filament\Resources\AproposResource\RelationManagers;
use App\Models\Apropos;
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
 
class AproposResource extends Resource
{
    protected static ?string $model = Apropos::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'Home page';

    protected static ?string $navigationLabel = 'A propos';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([ 
                Group::make() 
                    ->schema([
                        Section::make('A propos du landing page')
                        ->description('Informations sur A propos')
                        ->schema([ 
                            TextInput::make('title')->label('Titre')->string()->required(), 
                            RichEditor::make('description')->label('Description')
                            ->toolbarButtons([
                                //'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->string()->required(), 
                            TextInput::make('quote')->label('Quote')->string()->required(),  
                        ])->columnSpan(2),

                        Section::make('Services du landing page')
                        ->description('Informations sur a Services')
                        ->schema([ 
                            TextInput::make('title_service1')->label('Service 1')->string()->required(), 
                            TextInput::make('text_service1')->label('Text du service 1')->string()->required(),  
                            TextInput::make('title_service2')->label('Service 2')->string()->required(), 
                            TextInput::make('text_service2')->label('Text du service 2')->string()->required(), 
                            TextInput::make('qualite')->label('Qualité')->string()->required(), 
                            Toggle::make('is_published') 
                                    ->label('Statut')
                                    ->default(true)
                                    ->inline(false)
                                    ->onColor('success')
                                    ->offColor('danger'),
                        ])->columnSpan(2) 
                                       
                    ])->columnSpan(['lg' => 1]),
                    Group::make()
                    ->schema([
                        Section::make('Images du A propos')
                        ->description('Informations sur les images') 
                        ->icon('lucide-image')
                        ->schema([
                            Forms\Components\FileUpload::make('image1')
                                ->required()    
                                ->image()
                                ->preserveFilenames()
                                ->openable()
                                ->imageResizeTargetWidth('400')
                                ->imageResizeTargetHeight('600')
                                //->rules(Rule::dimensions()->maxWidth(400)->maxHeight(600))
                                ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                    $livewire->validateOnly($component->getStatePath());
                                }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/apropos')
                                ->hint('Taille recommandée : 400x600px'),      
                            Forms\Components\TextInput::make('alt_image1')
                                ->required(),

                            Forms\Components\FileUpload::make('image2')
                                ->required()    
                                ->image()
                                ->preserveFilenames()
                                ->openable()
                                ->imageResizeTargetWidth('400')
                                ->imageResizeTargetHeight('400')
                                //->rules(Rule::dimensions()->maxWidth(400)->maxHeight(400))
                                ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                    $livewire->validateOnly($component->getStatePath());
                                })  
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/apropos')
                                ->hint('Taille recommandée : 400x400px'),  
                            Forms\Components\TextInput::make('alt_image2')
                                ->required(),

                            Forms\Components\FileUpload::make('image3')
                                ->required()    
                                ->image()
                                ->preserveFilenames()
                                ->openable()
                                ->imageResizeTargetWidth('400')
                                ->imageResizeTargetHeight('480')
                                //->rules(Rule::dimensions()->maxWidth(400)->maxHeight(480))
                                ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\FileUpload $component) { 
                                    $livewire->validateOnly($component->getStatePath());
                                }) 
                                ->uploadingMessage('Téléchagement en cours ...')
                                ->directory('uploads/apropos')
                                ->hint('Taille recommandée : 400x480px'),  
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
            Tables\Columns\TextColumn::make('title')->label('Titre')->icon('heroicon-o-rocket-launch')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('qualite')->label('Qualité')->searchable()->sortable(),
            Tables\Columns\IconColumn::make('is_published')
                    ->label('Statut')
                    ->boolean()
                    ->sortable()
                    ->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime($format = 'd-m-Y')->label('Date Création')->searchable()->sortable()->toggleable(),

        ])
        ->defaultSort('created_at', 'desc')
        ->filters([
            // Add filters if needed
        ])
        ->actions([
            Tables\Actions\ActionGroup::make([
                Tables\Actions\EditAction::make()
                    ->tooltip('Modifier cette apropos'),
                Tables\Actions\DeleteAction::make()
                    ->tooltip('Supprimer cette apropos')
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
            'index' => Pages\ListApropos::route('/'),
            'create' => Pages\CreateApropos::route('/create'),
            'edit' => Pages\EditApropos::route('/{record}/edit'),
        ];
    }
}
