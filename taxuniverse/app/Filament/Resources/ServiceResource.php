<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('icon_url'),
                Forms\Components\Select::make('category')
                    ->options([
                        'Business Setup' => 'Business Setup',
                        'Tax & Compliance' => 'Tax & Compliance',
                        'Trademark & IP' => 'Trademark & IP',
                        'MCA & ROC' => 'MCA & ROC',
                        'Legal' => 'Legal',
                    ])
                    ->searchable()
                    ->required(),
                Forms\Components\Section::make('Page Content')
                    ->schema([
                        Forms\Components\Repeater::make('features')
                            ->simple(Forms\Components\TextInput::make('feature'))
                            ->label('Key Features'),
                        Forms\Components\Tabs::make('CMS Content')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Hero')
                                    ->schema([
                                        Forms\Components\TextInput::make('cms_content.hero.badge'),
                                        Forms\Components\TextInput::make('cms_content.hero.title'),
                                        Forms\Components\Textarea::make('cms_content.hero.subtitle'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('Benefits')
                                    ->schema([
                                        Forms\Components\Repeater::make('cms_content.benefits')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')->required(),
                                                Forms\Components\Textarea::make('description'),
                                                Forms\Components\TextInput::make('icon'),
                                            ])
                                            ->columnSpanFull(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('Process')
                                    ->schema([
                                        Forms\Components\Repeater::make('cms_content.process')
                                            ->schema([
                                                Forms\Components\TextInput::make('step'),
                                                Forms\Components\TextInput::make('title')->required(),
                                                Forms\Components\Textarea::make('description'),
                                            ])
                                            ->columnSpanFull(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Repeater::make('required_documents')
                            ->simple(Forms\Components\TextInput::make('document_name'))
                            ->label('Required Documents for this Service')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('icon_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
