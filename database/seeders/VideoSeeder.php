<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /* @var Video|Relation */
    protected $video;

    public function __construct()
    {
        $this->video = new Video();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->video->insert([
            'url' => 'https://www.youtube.com/watch?v=IZIT-LA2Ryg',
            'seekto' => 0,
            'show' => 1,
        ]);

        $this->video->insert([
            'url' => 'https://www.youtube.com/watch?v=fbJiRfIp_cU',
            'seekto' => 0,
            'show' => 1,
        ]);

        $this->video->insert([
            'url' => 'https://www.youtube.com/watch?v=e08eDavj0oI',
            'seekto' => 0,
            'show' => 1,
        ]);

        $this->video->insert([
            'url' => 'https://www.youtube.com/watch?v=LMH9ILrvv8M',
            'seekto' => 12,
            'show' => 1,
        ]);
    }
}
