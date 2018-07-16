<?php

use Illuminate\Database\Seeder;
use App\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reply::create([
        	'user_id' => 1,
        	'discussion_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 1,
        	'discussion_id' => 3,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 4,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 4,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 1,
        	'discussion_id' => 4,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 5,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 2,
        	'discussion_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 1,
        	'discussion_id' => 4,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
        Reply::create([
        	'user_id' => 1,
        	'discussion_id' => 5,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus'
        ]);
    }
}
