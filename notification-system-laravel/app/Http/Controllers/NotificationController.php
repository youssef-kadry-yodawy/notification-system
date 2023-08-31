<?php

namespace App\Http\Controllers;

use App\Exports\NotificationsExport;
use App\Imports\NotificationsImport;
use App\Models\Notification;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NotificationController extends Controller
{
    public function store_csv(Request $request)
    {
        $csv_file = $request->file('notifications_csv');
        return "Amogos";
    }

    public function export_csv()
    {
        return "Hi";
    }

    public function import_excel(Request $request) 
    {
        Excel::import(new NotificationsImport, $request->file("notifications"));
        return redirect('/')->with('success', 'All good!');
    }

    public function export_excel() 
    {
        return Excel::download(new NotificationsExport, 'notifications.xlsx');
    }
}
