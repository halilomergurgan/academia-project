<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'title_tr' => Str::title('<h3 class="module-title" style="box-sizing: border-box; font-family: Montserrat, sans-serif; font-weight: normal; line-height: 1.1; color: #373737; margin: 10px 0px 25px; font-size: 24px; background-color: #ffffff;">Welcome to<span style="box-sizing: border-box; display: block; font-size: 62px; font-weight: bold; margin-left: -4px; text-transform: uppercase;">ACADEMIa</span></h3>'),
            'title_eng' => Str::title('<h3 class="module-title" style="box-sizing: border-box; font-family: Montserrat, sans-serif; font-weight: normal; line-height: 1.1; color: #373737; margin: 10px 0px 25px; font-size: 24px; background-color: #ffffff;">Welcome to<span style="box-sizing: border-box; display: block; font-size: 62px; font-weight: bold; margin-left: -4px; text-transform: uppercase;">ACADEMIa</span></h3>'),
            'description_tr' => Str::words('<div class="" style="box-sizing: border-box; color: #373737; font-family: \'Montserrat Light\', arial; font-size: 14px; background-color: #ffffff;">
<p class="lead" style="box-sizing: border-box; margin: -18px 0px 33px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.4;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
</div>
<div class="about_texts" style="box-sizing: border-box; color: #373737; font-family: \'Montserrat Light\', arial; font-size: 14px; background-color: #ffffff;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;"><strong style="box-sizing: border-box;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</strong></p>
</div>'),
            'description_eng' => Str::words('<div class="" style="box-sizing: border-box; color: #373737; font-family: \'Montserrat Light\', arial; font-size: 14px; background-color: #ffffff;">
<p class="lead" style="box-sizing: border-box; margin: -18px 0px 33px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.4;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
</div>
<div class="about_texts" style="box-sizing: border-box; color: #373737; font-family: \'Montserrat Light\', arial; font-size: 14px; background-color: #ffffff;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Helvetica, Arial, sans-serif;"><strong style="box-sizing: border-box;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</strong></p>
</div>'),
        ]);
    }
}
