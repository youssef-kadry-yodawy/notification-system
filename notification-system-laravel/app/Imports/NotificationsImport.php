<?php

namespace App\Imports;

use App\Models\Notification;
use Maatwebsite\Excel\Concerns\ToModel;

class NotificationsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Notification([
            'recepient_name' => $row[0],
            'channel' => $row[1],
            'channel_type' => $row[2],
            'notification_body' => $row[3],
            'send_at' => $row[4],
            'status' => 'unscheduled'
        ]);
    }
}
