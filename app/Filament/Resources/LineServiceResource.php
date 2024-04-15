<?php

namespace App\Filament\Resources;

use App\Enums\LineService\ServiceType;
use App\Enums\LineService\TargetType;
use App\Filament\Resources\LineServiceResource\Pages;

//use App\Filament\Resources\LineServiceResource\RelationManagers;
use App\Models\LineService;
use Filament\Forms;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\{TextInput, Select};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LineServiceResource extends Resource
{
    protected static ?string $model = LineService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('line_service.name'))
                    ->minLength(2)
                    ->maxLength(50)
                    ->required(),
                TextInput::make('code')
                    ->label(__('line_service.code'))
                    ->unique()
                    ->required(),
                TextInput::make('description')
                    ->label(__('line_service.description')),
                Select::make('service_type')
                    ->label(__('line_service.service_type'))
                    ->options(ServiceType::options())
                    ->required(),
                Select::make('target_type')
                    ->label(__('line_service.target_type'))
                    ->options(TargetType::options())
                    ->required(),
                TextInput::make('group_name')
                    ->label(__('line_service.group_name')),
                TextInput::make('group_invite_url')
                    ->label(__('line_service.group_invite_url'))
                    ->url(),
                TextInput::make('client_id')
                    ->label(__('line_service.client_id')),
                TextInput::make('token')
                    ->label(__('line_service.token')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('line_service.name'))
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
            'index'  => Pages\ListLineServices::route('/'),
            'create' => Pages\CreateLineService::route('/create'),
            'edit'   => Pages\EditLineService::route('/{record}/edit'),
        ];
    }
}
