<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Using raw SQL to modify the column
        if (config('database.default') === 'mysql') {
            DB::statement('ALTER TABLE posts MODIFY event_date DATE NULL');
        } elseif (config('database.default') === 'pgsql') {
            DB::statement('ALTER TABLE posts ALTER COLUMN event_date DROP NOT NULL');
        } elseif (config('database.default') === 'sqlite') {
            // SQLite doesn't support modifying columns easily
            // You might need a different approach for SQLite
        }
    }

    public function down()
    {
        if (config('database.default') === 'mysql') {
            DB::statement('ALTER TABLE posts MODIFY event_date DATE NOT NULL');
        } elseif (config('database.default') === 'pgsql') {
            DB::statement('ALTER TABLE posts ALTER COLUMN event_date SET NOT NULL');
        }
    }
};
