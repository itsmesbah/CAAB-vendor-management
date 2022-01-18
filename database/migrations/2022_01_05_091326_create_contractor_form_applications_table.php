<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorFormApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_form_applications', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('body')->default('    বিনীত নিবেদন এই যে, আমি নিম্নস্বাক্ষরকারী দীর্ঘদিন যাবত ঠিকাদারী বযবসার সাথে জড়িত এবং অত্যন্ত সুনাম ও দক্ষতার সাথে বিভিন্ন প্রতিষ্ঠানে কাজ করে যাচ্ছি । এখন আপনার প্রতিষ্ঠানেও ঠিকাদার হিসাবে তালিকাভূক্ত হয়ে কাজ করতে চাই । এ কারনে আপনার প্রতিষ্ঠানে তালিকাভুক্তির জন্য আমার প্রতিষ্ঠানের নামে তালিকাভূক্তি ফরম প্রয়োজন ।

                     এমতাবস্থায়, আমার প্রতিষ্ঠানের নামে একটি ফরম প্রদান করলে জনামের নিকট চিরকৃতজ্ঞ থাকব ।
                ');
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
        Schema::dropIfExists('contractor_form_applications');
    }
}
