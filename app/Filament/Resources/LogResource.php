<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogResource\Pages;
use App\Models\Activity;
use Rmsramos\Activitylog\Resources\ActivitylogResource;

class LogResource extends ActivitylogResource
{
    public static function getModel(): string
    {
        return Activity::class;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogs::route('/'),
            'view' => Pages\ViewLog::route('/{record}/view'),
        ];
    }
}
