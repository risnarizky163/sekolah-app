<?php

class ArtikelController extends Controller {
  protected $articles = [
            [
               'id' => 1,
                'title' => 'Perayaan Akhir Tahun',
                'description' => 'Sekolah Harapan Bangsa mengadakan kegiatan “End Year Celebration” atau biasa kita sebut “Class Party” pada tgl 12 juni 2025, tahun ajaran 2024-2025.',
                'content' => 'Acara ini selalu kita rayakan setiap tahun, tepatnya disetiap akhir tahun ajaran. Kegiatan acara ini dihadiri oleh semua anak-anak, guru dan orang tua. Tema kegiatan Endyear atau Class party tahun ini bertema “Playland” kami, para guru berharap agar anak-anak menikmati acara tersebut.Acara ini dibuka dengan do’a yang dipimpin oleh bapak Epi, sebagai guru agama kristen dan dilanjutkan dengan sambutan dari kepala sekolah TK Harapan Bangsa yaitu, Ms. Neneng Sahwana, kemudian dilanjutkan dengan bernyanyi dan menari bersama sebagai pembuka kegiatan acara sebelum melakukan kegiatan inti, yaitu bermain. Pada tema tahun ini, yaitu “Play land” Sekolah Harapan Bangsa mempersiapkan banyak sekali wahana permainan yang bisa dinikmati anak-anak, seperti: Bouncy- Bubble House, Bouncy- Big Castle, Odong-odong, kereta mini, mobil-mobilan, ring tos, mini golf,  nerf gun, mini bowling dan tidak kalau seru, kami juga menyiapkna booth face painting. Selanjutkan, setelah semua peserta puas dengan bermain, acara dilanjutkan dengan kegiatan ramah tamah di kelas masing-masing. Kelas dipersiapkan dengan begitu apiknya dengan bermacam-macam hiasan masing-masing kelas, semua itu atas bantuan orang tua murid. Dengan adanya rangkaian kegiatan Class party ini. Anak – anak TK Sekolah Harapan Bangsa diharapkan dapat menumbuhkan rasa percaya diri dan menumbuhkan rasa kebersamaan antara anak, guru dan terutama dengan orang tua.',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2025/06/f2ccdb41-96ee-4b84-88c1-bff24fcba1d6-768x576.jpg',
                'created_at' => '2025-01-01 10:00:00'
            ],
            [
               'id' => 2,
                'title' => 'Seminar Kesehatan di SMP SMA Harapan Bangsa Modernhill',
                'description' => 'Seminar kesehatan bagi siswa SMP dan SMA Harapan Bangsa Modernhill. Seminar kali ini mengangkat tema “Raising Adolescent Awareness of Reproductive Health: Building a Healthier Future.” Seminar ini dibawakan oleh dr. Hans Christian, SpKJ, seorang psikiater yang dikenal aktif mengedukasi remaja tentang pentingnya kesehatan mental dan reproduksi.',
                'content' => 'Dalam paparannya, dr. Hans menekankan bahwa kesehatan reproduksi tidak hanya berkaitan dengan aspek fisik, tetapi juga melibatkan kesejahteraan mental dan sosial.',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2025/06/image-3.png',
                'created_at' => '2023-01-02 10:00:00'
            ]
        ];
    public function index() {
        // Load the artikel view
        $this->layout('artikel/index', 'default', [
            'title' => 'Artikel',
            'description' => 'Berita dan artikel terbaru dari Sekolah Harapan Bangsa',
            'articles' => $this->articles
        ]);
    }

    public function detail($id) {
        $id = (int)$id -1;
        // Load the artikel detail view
        $this->layout('artikel/detail', 'default', [
            'title' => 'Detail Artikel',
            'description' => 'Detail artikel dengan ID: ' . $id,
            'article' => $this->articles[$id] ?? null

        ]);
    }
}
