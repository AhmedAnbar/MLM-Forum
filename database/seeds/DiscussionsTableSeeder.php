<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::create([
        	'title' => 'PHP Arrays',
            'slug' => str_slug('PHP Arrays'),
        	'channel_id' => 1,
        	'user_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus. Mauris nec bibendum arcu, in accumsan ligula. In nec nibh velit. Quisque convallis dolor eget lectus posuere ullamcorper. Vestibulum a suscipit sapien. Duis dignissim commodo sapien, ac vehicula leo rhoncus accumsan. Donec nec malesuada metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Nulla tristique lorem rhoncus arcu ultricies varius. Cras sed nulla porta, feugiat mauris faucibus, sagittis lorem. Aliquam at euismod velit, a elementum quam. Phasellus turpis mi, convallis sit amet malesuada id, pulvinar vel metus. Maecenas euismod, sem eu mollis ornare, massa nunc vestibulum erat, id tempus quam elit sed elit.'
        ]);

        Discussion::create([
        	'title' => 'CSS Animations',
            'slug' => str_slug('CSS Animations'),
        	'channel_id' => 2,
        	'user_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus. Mauris nec bibendum arcu, in accumsan ligula. In nec nibh velit. Quisque convallis dolor eget lectus posuere ullamcorper. Vestibulum a suscipit sapien. Duis dignissim commodo sapien, ac vehicula leo rhoncus accumsan. Donec nec malesuada metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Nulla tristique lorem rhoncus arcu ultricies varius. Cras sed nulla porta, feugiat mauris faucibus, sagittis lorem. Aliquam at euismod velit, a elementum quam. Phasellus turpis mi, convallis sit amet malesuada id, pulvinar vel metus. Maecenas euismod, sem eu mollis ornare, massa nunc vestibulum erat, id tempus quam elit sed elit.'
        ]);

        Discussion::create([
        	'title' => 'HTML 5 new Tags',
            'slug' => str_slug('HTML 5 new Tags'),
        	'channel_id' => 3,
        	'user_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus. Mauris nec bibendum arcu, in accumsan ligula. In nec nibh velit. Quisque convallis dolor eget lectus posuere ullamcorper. Vestibulum a suscipit sapien. Duis dignissim commodo sapien, ac vehicula leo rhoncus accumsan. Donec nec malesuada metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Nulla tristique lorem rhoncus arcu ultricies varius. Cras sed nulla porta, feugiat mauris faucibus, sagittis lorem. Aliquam at euismod velit, a elementum quam. Phasellus turpis mi, convallis sit amet malesuada id, pulvinar vel metus. Maecenas euismod, sem eu mollis ornare, massa nunc vestibulum erat, id tempus quam elit sed elit.'
        ]);

        Discussion::create([
        	'title' => 'Javascript DOM',
            'slug' => str_slug('Javascript DOM'),
        	'channel_id' => 4,
        	'user_id' => 1,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus. Mauris nec bibendum arcu, in accumsan ligula. In nec nibh velit. Quisque convallis dolor eget lectus posuere ullamcorper. Vestibulum a suscipit sapien. Duis dignissim commodo sapien, ac vehicula leo rhoncus accumsan. Donec nec malesuada metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Nulla tristique lorem rhoncus arcu ultricies varius. Cras sed nulla porta, feugiat mauris faucibus, sagittis lorem. Aliquam at euismod velit, a elementum quam. Phasellus turpis mi, convallis sit amet malesuada id, pulvinar vel metus. Maecenas euismod, sem eu mollis ornare, massa nunc vestibulum erat, id tempus quam elit sed elit.'
        ]);

        Discussion::create([
        	'title' => 'Laravel Collective',
            'slug' => str_slug('Laravel Collective'),
        	'channel_id' => 5,
        	'user_id' => 2,
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id neque ex. Vestibulum consequat velit metus. Mauris nec bibendum arcu, in accumsan ligula. In nec nibh velit. Quisque convallis dolor eget lectus posuere ullamcorper. Vestibulum a suscipit sapien. Duis dignissim commodo sapien, ac vehicula leo rhoncus accumsan. Donec nec malesuada metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Nulla tristique lorem rhoncus arcu ultricies varius. Cras sed nulla porta, feugiat mauris faucibus, sagittis lorem. Aliquam at euismod velit, a elementum quam. Phasellus turpis mi, convallis sit amet malesuada id, pulvinar vel metus. Maecenas euismod, sem eu mollis ornare, massa nunc vestibulum erat, id tempus quam elit sed elit.'
        ]);
    }
}
