<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'recepient_name', 'channel', 'channel_type', 'notification_body',
        'send_at', 'status', 'workflow_id', 'cancellation_workflow_id'
    ];

}
