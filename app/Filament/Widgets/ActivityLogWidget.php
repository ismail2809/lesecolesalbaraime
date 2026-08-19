<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;

class ActivityLogWidget extends Widget
{
    protected static string $view = 'filament.widgets.activity-log-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 4;

    public function getLogs(): \Illuminate\Support\Collection
    {
        return DB::table('activity_log')->latest('created_at')->take(10)->get();
    }

    public static function canView(): bool
    {
        return DB::getSchemaBuilder()->hasTable('activity_log');
    }
}
