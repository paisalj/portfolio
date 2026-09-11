<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Profile
        |--------------------------------------------------------------------------
        */

        Profile::create([
            'name' => 'Paisal Johen',
            'title' => 'Web Developer',
            'bio' => 'Saya adalah Web Developer yang memiliki minat dalam pengembangan aplikasi web menggunakan Laravel, PHP, MySQL, dan Bootstrap.',
            'profile_image' => null,
            'email' => null,
            'phone' => null,
            'location' => 'Palangka Raya',
            'github_url' => null,
            'linkedin_url' => null,
            'instagram_url' => null,
            'cv_file' => null,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Skills
        |--------------------------------------------------------------------------
        */

        $laravel = Skill::create([
            'name' => 'Laravel',
            'category' => 'Backend',
            'percentage' => 80,
            'icon' => 'fa-brands fa-laravel',
        ]);

        $php = Skill::create([
            'name' => 'PHP',
            'category' => 'Programming',
            'percentage' => 80,
            'icon' => 'fa-brands fa-php',
        ]);

        $mysql = Skill::create([
            'name' => 'MySQL',
            'category' => 'Database',
            'percentage' => 75,
            'icon' => 'fa-solid fa-database',
        ]);

        $bootstrap = Skill::create([
            'name' => 'Bootstrap',
            'category' => 'Frontend',
            'percentage' => 80,
            'icon' => 'fa-brands fa-bootstrap',
        ]);

        $html = Skill::create([
            'name' => 'HTML',
            'category' => 'Frontend',
            'percentage' => 85,
            'icon' => 'fa-brands fa-html5',
        ]);

        $css = Skill::create([
            'name' => 'CSS',
            'category' => 'Frontend',
            'percentage' => 75,
            'icon' => 'fa-brands fa-css3-alt',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Project
        |--------------------------------------------------------------------------
        */

        $project = Project::create([
            'title' => 'Digital Compendium Hotel',
            'slug' => 'digital-compendium-hotel',
            'description' => 'Sistem Informasi Manajemen Panduan Fasilitas Hotel berbasis web yang dikembangkan untuk membantu tamu memperoleh informasi fasilitas dan layanan hotel secara digital.',
            'image' => null,
            'github_url' => null,
            'demo_url' => null,
            'start_date' => '2026-06-01',
            'end_date' => '2026-08-01',
            'is_featured' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Project Skills
        |--------------------------------------------------------------------------
        */

        $project->skills()->attach([
            $laravel->id,
            $php->id,
            $mysql->id,
            $bootstrap->id,
            $html->id,
            $css->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Experience
        |--------------------------------------------------------------------------
        */

        Experience::create([
            'position' => 'Web Developer Intern',
            'company' => 'M Bahalap Hotel',
            'location' => 'Palangka Raya',
            'description' => 'Mengembangkan sistem Digital Compendium Hotel berbasis web untuk membantu penyampaian informasi fasilitas dan layanan hotel secara digital.',
            'start_date' => '2026-06-01',
            'end_date' => '2026-08-01',
            'is_current' => false,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Education
        |--------------------------------------------------------------------------
        */

        Education::create([
            'institution' => 'ELTIBIZ',
            'degree' => 'Pendidikan Profesi 1 Tahun',
            'field_of_study' => 'Manajemen Informatika dan Computer',
            'description' => 'Mempelajari pengembangan aplikasi, pemrograman, database, dan teknologi informasi.',
            'start_date' => null,
            'end_date' => '2026-08-01',
        ]);
    }
}