<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 2000);
            $table->string('slug', 2000)->unique();
            $table->string('images', 2000)->nullable();
            $table->string('image_mime')->nullable();
            $table->integer('image_size')->nullable();
            $table->longText('description')->nullable();
            $table->text('summary');
            $table->tinyInteger('stock')->unsigned();
            $table->decimal('price', 10, 2);
            $table->decimal('disscounted_price');
            $table->foreignIdFor(Category::class,'category_id')->constrained();
            $table->foreignIdFor(Brand::class,'brand_id')->constrained();
            $table->foreignIdFor(User::class, 'created_by')->nullable();
            $table->foreignIdFor(User::class, 'updated_by')->nullable();
            $table->enum('status',['Active', 'Inactive'])->default('Active');
            $table->softDeletes();
            $table->foreignIdFor(User::class, 'deleted_by')->nullable();
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
        Schema::dropIfExists('products');
    }
};
