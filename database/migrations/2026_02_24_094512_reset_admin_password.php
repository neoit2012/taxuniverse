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
            ->updateOrInsert(
                ['email' => 'admin@taxuniverse.in'],
                [
                    'name' => 'Admin',
                    'password' => \Illuminate\Support\Facades\Hash::make('password123'),
                    'role' => 'admin',
                    'email_verified_at' => now(),
                ]
            );

        \Illuminate\Support\Facades\DB::table('users')
            ->where('email', 'test@example.com')
            ->update([
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
                'role' => 'admin'
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
