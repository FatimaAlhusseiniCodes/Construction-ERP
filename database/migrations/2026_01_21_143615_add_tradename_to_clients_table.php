<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('clients', 'tradename')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->string('tradename')->nullable()->after('name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('clients', 'tradename')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->dropColumn('tradename');
            });
        }
    }
};
