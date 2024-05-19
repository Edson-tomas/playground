<?php

use App\Models\Customer;
use App\Models\Tag;
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
        Schema::create('customer_tag', function(Blueprint $table) {
            $table->foreignIdFor(Customer::class)->constrained();
            $table->foreignIdFor(Tag::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1211906020.
        Schema::dropIfExists('customer_tag');
    }
};
