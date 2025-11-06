<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;  
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Illuminate\Validation\Rule;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'mdi-pound-box';

    protected static ?string $navigationGroup = 'Blogs page';

    protected static ?string $navigationLabel = 'Blogs'; 
    
    protected static ?int $navigationSort = 39;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                ->schema([
                    Section::make('Informations du page Blog')
                    ->description('Informations générales') 
                    ->icon('lucide-info')
                    ->schema([ 
                        Select::make('categorie_id')
                            ->relationship('categories', 'title')
                            ->label('Catégories')
                            ->required(), 
                        TextInput::make('title')
                            ->required() 
                            ->reactive() // Rend le champ réactif
                            ->afterStateUpdated(fn ($state, callable $set) => 
                                $set('slug', Str::slug($state))
                            ),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required(),
                        Textarea::make('content')
                            ->label('Contenu')
                            ->required()
                            ->columnSpanFull(),
                        DatePicker::make('date')
                            ->label('Date')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Image')
                            ->directory('uploads/blogs')
                            ->image()
                            ->required(),
                        Toggle::make('is_published')
                            ->label('Publié')
                            ->required(),
                    ])  
                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categories.title')
                    ->numeric()
                    ->sortable()
                    ->label('Catégorie'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Titre'), 
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable()
                    ->label('Date'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Publié'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Crée le'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
