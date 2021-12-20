<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('status', ['active', 'Finish'])->default('active');
            $table->foreignId('service_id')
            ->nullable()
            ->constrained('services','id')
            ->CascadeOnDelete();
            $table->unsignedBigInteger('queueNo')->nullable();
            $table->unsignedBigInteger('ticketNo')->nullable();
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
