<?php

namespace Database\Seeders;

use App\Models\Socmed;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Seeder;

class SocmedSeeder extends Seeder
{

    /* @var Socmed|Relation */
    protected $socmed;

    public function __construct()
    {
        $this->socmed = new Socmed();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->socmed->insert([
            'text' => 'Facebook',
            'link' => 'https://www.facebook.com/Ian.TheManusia',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'Twitter',
            'link' => 'https://twitter.com/TheManusia__',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'Instagram',
            'link' => 'https://www.instagram.com/ian_269/',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'Github',
            'link' => 'https://github.com/TheManusia',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'CV',
            'link' => 'https://cv.themanusia.me/',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'Discord',
            'link' => 'https://discord.com/users/320376899069149184',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'Steam',
            'link' => 'https://steamcommunity.com/id/TheManusia/',
            'show' => 1,
        ]);

        $this->socmed->insert([
            'text' => 'osu!',
            'link' => 'https://osu.ppy.sh/u/TheManusia',
            'show' => 1,
        ]);
    }
}
