<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\Widget;

class ContactMessagesWidget extends Widget
{
    protected static string $view = 'filament.widgets.contact-messages-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function getMessages(): \Illuminate\Database\Eloquent\Collection
    {
        return Contact::latest()->take(5)->get();
    }

    public function getTotalCount(): int
    {
        return Contact::count();
    }
}
