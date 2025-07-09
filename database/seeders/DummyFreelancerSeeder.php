<?php

namespace Database\Seeders;

use App\Models\Freelancer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyFreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FreelancerData = [
            [
                'user_id' => 7,
                'first_Name' => 'Alfin',
                'last_Name' => 'Qodri',
                'experience' => 'Membangun mini server, bekerja sebagai front end developer dengan pengalaman lebih dari 2 tahun. Terlibat dalam berbagai proyek web yang sukses. Memiliki pemahaman yang baik tentang desain responsif.',
                'skills' => 'JavaScript, HTML, CSS, PHP, React',
                'bio' => 'Freelancer yang berdedikasi dengan passion dalam pengembangan web. Selalu berusaha untuk memberikan hasil terbaik bagi klien. Siap membantu Anda mewujudkan ide-ide Anda menjadi kenyataan.',
                'rekening' => '33278296',
                'bank' => 'BRI'
            ],
            [
                'user_id' => 8,
                'first_Name' => 'Rina',
                'last_Name' => 'Amelia',
                'experience' => 'Berpengalaman dalam pengembangan aplikasi mobile dan web. Sudah menyelesaikan beberapa proyek freelance dengan klien internasional. Memiliki kemampuan dalam manajemen proyek dan komunikasi yang baik.',
                'skills' => 'Flutter, Java, PHP, MySQL, UI/UX Design',
                'bio' => 'Freelancer yang berfokus pada pengembangan aplikasi yang user-friendly. Saya percaya bahwa teknologi harus mudah diakses oleh semua orang. Mari kita bekerja sama untuk menciptakan solusi yang inovatif.',
                'rekening' => '98765432',
                'bank' => 'BSI'
            ],
            [
                'user_id' => 9,
                'first_Name' => 'Joko',
                'last_Name' => 'Prabowo',
                'experience' => 'Spesialis dalam pengembangan backend dengan pengalaman lebih dari 3 tahun. Terlibat dalam pengembangan API dan integrasi sistem. Memiliki pengalaman dalam bekerja dengan tim yang beragam.',
                'skills' => 'Node.js, Express, MongoDB, RESTful API, Docker',
                'bio' => 'Freelancer yang berkomitmen untuk memberikan solusi backend yang efisien. Saya senang bekerja dengan teknologi terbaru dan selalu mencari tantangan baru. Hubungi saya untuk proyek Anda selanjutnya.',
                'rekening' => '12345678',
                'bank' => 'BNI'
            ],
            [
                'user_id' => 10,
                'first_Name' => 'Sari',
                'last_Name' => 'Indah',
                'experience' => 'Berpengalaman dalam pengembangan website e-commerce dan sistem manajemen konten. Memiliki kemampuan dalam SEO dan pemasaran digital. Sudah bekerja dengan berbagai klien dari berbagai industri.',
                'skills' => 'WordPress, Shopify, SEO, Google Analytics, HTML/CSS',
                'bio' => 'Freelancer yang berfokus pada pengembangan website yang menarik dan fungsional. Saya percaya bahwa setiap bisnis harus memiliki kehadiran online yang kuat. Mari kita tingkatkan visibilitas bisnis Anda bersama.',
                'rekening' => '87654321',
                'bank' => 'BNI'
            ],
            [
                'user_id' => 11,
                'first_Name' => 'Toni',
                'last_Name' => 'Setiawan',
                'experience' => 'Mempunyai pengalaman dalam pengembangan perangkat lunak dan analisis data. Terlibat dalam proyek-proyek yang menggunakan machine learning dan big data. Memiliki kemampuan analitis yang kuat.',
                'skills' => 'Python, R, SQL, Machine Learning, Data Visualization',
                'bio' => 'Freelancer yang berfokus pada solusi berbasis data. Saya percaya bahwa data adalah aset berharga untuk pengambilan keputusan. Mari kita gunakan data untuk mencapai tujuan bisnis Anda.',
                'rekening' => '11223344',
                'bank' => 'BCA'
            ],
            
        ];
        foreach($FreelancerData as $key => $val){
            Freelancer::create($val);
        }
    }
}
