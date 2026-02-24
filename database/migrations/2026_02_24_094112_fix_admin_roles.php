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
        \Illuminate\Support\Facades\DB::table('users')
            ->whereIn('email', ['admin@taxuniverse.in', 'test@example.com'])
            ->update(['role' => 'admin']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Illuminate\Support\Facades\DB::table('users')
            ->whereIn('email', ['admin@taxuniverse.in', 'test@example.com'])
            ->update(['role' => 'user']);
    }
};
