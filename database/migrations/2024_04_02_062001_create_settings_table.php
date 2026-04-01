<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('token');
            $table->string('session_id');
            $table->boolean('expired')->default(false);
            $table->integer('service_id')->nullable();
            $table->integer('from_zone_id')->nullable();
            $table->integer('from_subzone_id')->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->enum('openable_code', ['Y', 'N'])->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
