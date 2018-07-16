<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create(['title' => 'PHP', 'slug' => str_slug('PHP')]);
        Channel::create(['title' => 'CSS', 'slug' => str_slug('CSS')]);
        Channel::create(['title' => 'HTML', 'slug' => str_slug('HTML')]);
        Channel::create(['title' => 'JavaScript', 'slug' => str_slug('JavaScript')]);
        Channel::create(['title' => 'Laravel', 'slug' => str_slug('Laravel')]);
        Channel::create(['title' => 'Vuejs', 'slug' => str_slug('Vuejs')]);
        Channel::create(['title' => 'Spark', 'slug' => str_slug('Spark')]);
    }
}
