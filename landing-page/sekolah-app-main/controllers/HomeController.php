<?php


class HomeController extends Controller {
    public function index() {
        // Load the home view
        $this->layout('home/index', 'default', [
            'title' => 'Home',
            'description' => 'Selamat datang di Sistem Informasi Sekolah'
        ]);
    }

    public function about() {
        // Load the about view
        $this->view('home');
    }

    public function contact() {
        // Load the contact view
        $this->view('contact');
    }
}
