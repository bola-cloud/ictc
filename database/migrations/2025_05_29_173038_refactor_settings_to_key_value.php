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
        Schema::table('settings', function (Blueprint $table) {
            // Drop old specific columns
            $table->dropColumn([
                'facebook', 'linkedin', 'youtube', 'whatsapp', 'email', 'logo', 'cover_image'
            ]);

            // Add key-value structure
            $table->string('key')->unique()->after('id');
            $table->text('value')->nullable()->after('key');
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['key', 'value']);

            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();
        });
    }
};
