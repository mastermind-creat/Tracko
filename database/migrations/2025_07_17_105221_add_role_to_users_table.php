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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('contractor');
            $table->string('phone')->nullable();
            $table->string('organization')->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->string('work_id')->nullable();
            $table->string('county')->nullable();
            $table->string('subcounty')->nullable();
            $table->string('id_number')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // SQLite does not support dropping multiple columns or some column types easily.
            // For SQLite compatibility, only drop 'role'.
            // For full rollback in MySQL, you may manually drop the other columns if needed.
            $table->dropColumn('role');
            // The following columns are not dropped for SQLite compatibility:
            // 'phone', 'organization', 'department', 'position', 'work_id', 'county', 'subcounty', 'id_number', 'photo'
        });
    }
};
