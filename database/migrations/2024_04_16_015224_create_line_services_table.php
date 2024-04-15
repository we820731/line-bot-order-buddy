<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('line_services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->comment('名稱');
            $table->string('code', 50)->comment('代碼');
            $table->string('description', 100)->nullable()->comment('描述');
            $table->tinyInteger('service_type')->comment('服務類型 1:訂單 2:通知');
            $table->tinyInteger('target_type')->comment('目標類型 1:群組 2:用戶');
            $table->string('group_name', 50)->nullable()->comment('群組名稱');
            $table->string('group_invite_url')->nullable()->comment('群組邀請網址');
            $table->string('client_id')->nullable()->comment('client id');
            $table->string('token')->nullable()->comment('line token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_services');
    }
};
