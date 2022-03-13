<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_proses');
        $this->load->model('m_prosesg');
        $this->load->model('m_sejarah');
        $this->load->model('m_organisasi');
        $this->load->model('m_visimisi');
        $this->load->model('m_karir');
        $this->load->model('m_feedback');
        $this->load->model('m_faq');
        $this->load->model('m_slider');
        $this->load->model('m_tentang');
        $this->load->model('m_informasi');
        
    }


    public function index()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            // 'proses' => $this->m_home->proses(),
            'faq'   => $this->m_home->faq(),
            'slider'    => $this->m_home->slider(),
            'isi' => 'home',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function sejarah()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'sejarah' => $this->m_sejarah->detail(),
            'isi' => 'sejarah',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }
    public function organisasi()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'organisasi' => $this->m_organisasi->detail(),
            'isi' => 'organisasi',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function proses()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'proses' => $this->m_home->proses(),
            'prosesg' => $this->m_home->prosesg(),
            'isi' => 'proses',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function visimisi()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'visi_misi' => $this->m_visimisi->detail(),
            'isi' => 'visimisi',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function tentang()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'tentang' => $this->m_home->tentang(),
            'isi' => 'tentang',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function karir()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'karir' => $this->m_home->karir(),
            'isi' => 'karir',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function hubungi_kami()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'informasi' => $this->m_informasi->detail(),
            'isi' => 'hubungi_kami',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function produk()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'produk' => $this->m_home->produk(),
            'isi' => 'produk',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function galeri()
    {
        $data = array(
            'title' => "Company Profile Aguaria",
            'galeri' => $this->m_home->galeri(),
            'isi' => 'galeri',

        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function detail_galeri($id_galeri)
    {
        $data = array(
            'title' => 'Company Profile Aguaria',
            'detail_galeri' => $this->m_home->detail_galeri($id_galeri),
            'caption_galeri' => $this->m_home->caption_galeri($id_galeri),
            'isi'   => 'galeri_detail'
        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class= "pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']    = '<li>';
        $config['first_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['full_tag_close']    = '</ul></div>';


        $this->pagination->initialize($config);
        $data = array(
            'paginasi' => $this->pagination->create_links(),
            'latest_berita' => $this->m_home->latest_berita(),
            'berita'    => $this->m_home->berita($limit, $start),
            'title' => 'Berita',
            'isi'   => 'berita',
        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function detail_berita($slug)
    {
        $data = array(
            'title' => 'Detail Berita',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->detail_berita($slug),
            'isi'   => 'detail_berita'
        );
        $this->load->view('template/wrapper', $data, FALSE);
    }

    function add_feedback()
    {

?>
        <link rel="stylesheet" href="<?= base_url() ?>sweetalert2/sweetalert2.min.css">
        <script src="<?= base_url() ?>sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>sweetalert2/animate.min.css">
        <style>
            body {
                font-family: "Helvetica Neue", "Helvetica", "Arial", san-serif;
                font-size: 0.8em;
                font-weight: normal;
            }
        </style>

        <body></body>

        <?php
        $nama    = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
        $email   = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
        $telepon = htmlspecialchars($this->input->post('telepon', TRUE), ENT_QUOTES);
        $subject = htmlspecialchars($this->input->post('subject', TRUE), ENT_QUOTES);
        $pesan   = htmlspecialchars($this->input->post('pesan', TRUE), ENT_QUOTES);

        $this->m_feedback->add($nama, $email, $telepon, $subject, $pesan);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        ?>

            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil !!',
                    text: 'Pesan Anda Telah Terkirim',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDownBig'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__bounceOut'
                    }

                }).then((result) => {
                    window.location = '<?= site_url('home/hubungi_kami') ?>';
                })
            </script>

        <?php
        } else {
        ?>

            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal !!',
                    text: 'Gagal Mengirim Pesan',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDownBig'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__bounceOut'
                    }

                }).then((result) => {
                    window.location = '<?= site_url('home/hubungi_kami') ?>';
                })
            </script>
<?php
        }
    }
}

/* End of file Home.php */
