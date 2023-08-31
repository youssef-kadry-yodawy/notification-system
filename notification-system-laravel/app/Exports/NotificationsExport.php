<?php

namespace App\Exports;

use App\Models\Notification;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NotificationsExport implements FromView
{

    public function view(): View
    {
        return view('exports.notifications', [
            'notifications' => Notification::all()
        ]);
    }
}
