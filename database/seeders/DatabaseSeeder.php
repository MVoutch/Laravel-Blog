<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tags;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Tags::truncate();
        Article::truncate();

        $user = User::factory()->create();

        $blog = Tags::create([
            'slug' => 'blog',
            'name' => 'Blog',
        ]);
        $news = Tags::create([
            'slug' => 'news',
            'name' => 'News',
        ]);

        Article::create([
            'tags_id' => $blog->id,
            'user_id' => $user->id,
            'slug' => 'the-first-article',
            'title' => 'The First Article',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero volutpat sed cras ornare arcu. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Elit ut aliquam purus sit amet luctus venenatis. Libero volutpat sed cras ornare arcu dui vivamus arcu.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero volutpat sed cras ornare arcu. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Elit ut aliquam purus sit amet luctus venenatis. Libero volutpat sed cras ornare arcu dui vivamus arcu. Nisl nunc mi ipsum faucibus. Ut porttitor leo a diam sollicitudin tempor. Aliquam id diam maecenas ultricies mi eget mauris pharetra. Sit amet est placerat in. Commodo odio aenean sed adipiscing diam donec adipiscing. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Sit amet mattis vulputate enim nulla aliquet porttitor. Mi in nulla posuere sollicitudin aliquam ultrices sagittis. Habitant morbi tristique senectus et. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Sed blandit libero volutpat sed cras ornare arcu. Faucibus in ornare quam viverra orci sagittis.',
        ]);

        Article::create([
            'tags_id' => $news->id,
            'user_id' => $user->id,
            'title' => 'The Second Article',
            'slug' => 'the-second-article',
            'excerpt' => 'Pharetra convallis posuere morbi leo urna molestie. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Gravida rutrum quisque non tellus. Faucibus nisl tincidunt eget nullam non. Ullamcorper malesuada proin libero nunc consequat interdum varius. ',
            'body' => 'Pharetra convallis posuere morbi leo urna molestie. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Gravida rutrum quisque non tellus. Faucibus nisl tincidunt eget nullam non. Ullamcorper malesuada proin libero nunc consequat interdum varius. Odio eu feugiat pretium nibh ipsum. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Ultrices eros in cursus turpis massa tincidunt. In est ante in nibh mauris cursus mattis molestie. Massa eget egestas purus viverra accumsan in nisl nisi. Neque laoreet suspendisse interdum consectetur. Senectus et netus et malesuada fames ac. Non sodales neque sodales ut etiam sit amet. Malesuada nunc vel risus commodo. Adipiscing tristique risus nec feugiat in. Massa vitae tortor condimentum lacinia quis vel eros donec. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus.',
        ]);

        Article::create([
            'tags_id' => $news->id,
            'user_id' => $user->id,
            'title' => 'The Third Article',
            'slug' => 'the-third-article',
            'excerpt' => 'Cras pulvinar mattis nunc sed blandit libero. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Nibh venenatis cras sed felis eget. Venenatis tellus in metus vulputate eu scelerisque felis. Neque viverra justo nec ultrices dui sapien eget mi. Accumsan lacus vel facilisis volutpat est velit egestas. ',
            'body' => 'Cras pulvinar mattis nunc sed blandit libero. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Nibh venenatis cras sed felis eget. Venenatis tellus in metus vulputate eu scelerisque felis. Neque viverra justo nec ultrices dui sapien eget mi. Accumsan lacus vel facilisis volutpat est velit egestas. Tellus orci ac auctor augue mauris. Et sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. A iaculis at erat pellentesque. Adipiscing commodo elit at imperdiet dui accumsan sit amet. Sit amet consectetur adipiscing elit ut aliquam. Lectus magna fringilla urna porttitor rhoncus dolor. In mollis nunc sed id. Euismod quis viverra nibh cras. Purus in mollis nunc sed id. Porttitor eget dolor morbi non arcu risus quis varius.',
        ]);

        Article::create([
            'tags_id' => $blog->id,
            'user_id' => $user->id,
            'title' => 'The Fourth Article',
            'slug' => 'the-fourth-article',
            'excerpt' => 'Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Ac auctor augue mauris augue neque gravida in fermentum et. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Amet consectetur adipiscing elit duis tristique. Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. ',
            'body' => 'Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Ac auctor augue mauris augue neque gravida in fermentum et. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Amet consectetur adipiscing elit duis tristique. Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Tincidunt tortor aliquam nulla facilisi cras fermentum. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. In egestas erat imperdiet sed euismod nisi porta lorem. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Suscipit tellus mauris a diam maecenas sed enim. Aliquet porttitor lacus luctus accumsan tortor posuere. Rutrum quisque non tellus orci ac auctor. Bibendum neque egestas congue quisque egestas diam. Blandit turpis cursus in hac.',
        ]);
    }
}
