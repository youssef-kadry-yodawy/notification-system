<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            $table->string('recepient_name');
            $table->string('channel');
            $table->enum('channel_type', ['email', 'sms']);
            $table->string('notification_body');
            $table->dateTime('send_at');
            $table->enum('status', ['unscheduled', 'scheduled', 'sent', 'cancelled', 'error']);
            $table->string('workflow_id')->nullable();
            $table->string('cancellation_workflow_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
