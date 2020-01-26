<?php

use Illuminate\Database\Seeder;
use App\Modules\Blog\Models\Post;

class PostTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_posts')->delete();

		// ileti test - 1
		Post::create(array(
				'category_id' => 1,
				'title' => 'İleti test - 1',
				'slug' => 'ileti-test-1',
				'description' => 'İleti test - 1',
				'summary' => 'İleti test - summary - 1',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'publish',
				'comments' => 1
			));

		// ileti test - 2
		Post::create(array(
				'category_id' => 1,
				'title' => 'İleti test - 2',
				'slug' => 'ileti-test-2',
				'description' => 'İleti test - 2',
				'summary' => 'İleti test - summary - 2',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'publish',
				'comments' => 1
			));

		// ileti test - 3
		Post::create(array(
				'category_id' => 1,
				'title' => 'İleti test - 3',
				'slug' => 'ileti-test-3',
				'description' => 'İleti test - 3',
				'summary' => 'İleti test - summary - 3',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'publish',
				'comments' => 1
			));

		// ileti test - 4
		Post::create(array(
				'category_id' => 1,
				'title' => 'İleti test - 4',
				'slug' => 'ileti-test-4',
				'description' => 'İleti test - 4',
				'summary' => 'İleti test - summary - 4',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius eros ut ornare tempus. Cras a ligula lectus. Pellentesque eget tempor arcu. Proin nisl mi, auctor sit amet ornare vitae, egestas sit amet ante. Phasellus sit amet lobortis risus. Nam consectetur nisi consectetur aliquet condimentum. Morbi eu lacus in neque bibendum ultricies vel in risus.',
				'status' => 'publish',
				'comments' => 1
			));
	}
}