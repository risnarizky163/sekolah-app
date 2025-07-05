<?php

class GaleriController extends Controller {
    protected $galeri = [
       [
                'id' => 1,
                'title' => 'Kegiatan Belajar Mengajar',
                'description' => 'Kegiatan belajar mengajar di kelas',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2019/01/gallery-sd-03.jpg',
                'created_at' => '2023-01-01 10:00:00'
            ],
            [
                'id' => 2,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2019/01/Preschool-_Gallery-_1.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 3,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2019/01/SMP-_Gallery-_3.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 4,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'https://www.shb.sch.id/wp-content/uploads/2019/11/IMG_7703-1630x860.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ]
        ];
    public function index() {
        // Load the galeri view
        $this->layout('galeri/index', 'default', [
            'title' => 'Galeri',
            'description' => 'Galeri foto kegiatan dan acara di Sekolah Harpan Bangsa',
            'galeri' => $this->galeri
        ]);
    }

    public function detail($id) {
        // Load the galeri detail view
        $this->layout('galeri/detail', 'default', [
            'title' => 'Detail Galeri',
            'description' => 'Detail galeri dengan ID: ' . $id
        ]);
    }
}
