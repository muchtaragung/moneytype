<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->library('form_validation');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['email'] = $this->user->get_template()->row();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/layout/footer');
    }
    public function email_id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['email'] = $this->user->get_template()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/mt/mt_id');
        $this->load->view('admin/layout/footer');
    }
    public function email_en()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['email'] = $this->user->get_template_en()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/mt/mt_en');
        $this->load->view('admin/layout/footer');
    }
    public function detail($id)
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['type'] = $this->user->get_type($id)->result();
        $data['kata'] = $this->user->get_kata($id)->result();
        $data['user'] = $this->user->get_user($id)->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/detail_user', $data);
        $this->load->view('admin/layout/footer');
    }
    public function excel($id)
    {
        $user = $this->user->get_user($id)->row();
        $kata = $this->user->get_kata($id)->result_array();
        $type = $this->user->get_type($id)->result_array();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('A2', 'Email');
        $sheet->setCellValue('A3', 'No telepon');
        $sheet->setCellValue('A5', 'Archetype');
        $sheet->setCellValue('B5', 'SCORE');
        $sheet->setCellValue('A15', 'Type');
        $sheet->setCellValue('B15', 'Checked');
        $sheet->setCellValue('B' . 1, $user->nama);
        $sheet->setCellValue('B' . 2, $user->email);
        $sheet->setCellValue('B' . 3, $user->phone);
        $rows1 = 6;
        foreach ($type as $key1) {
            $sheet->setCellValue('A' . $rows1, $key1['archetype']);
            $sheet->setCellValue('B' . $rows1, round($key1['score'], 0) . '%');
            $rows1++;
        }
        $rows = 16;
        foreach ($kata as $key) {
            $sheet->setCellValue('A' . $rows, $key['nama_kata']);
            $sheet->setCellValue('B' . $rows, 'Yes');
            $rows++;
        }
        $nama = $user->email;
        $no = $user->phone;
        $filename = $nama . '-' . $no . '.xlsx';
        $writer = new Xlsx($spreadsheet);
        // $writer->save('excel/' . $filename);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
    public function ajax_list()
    {
        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $list = $this->user->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        foreach ($list as $data1) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $data1->nama;
            $row[] = $data1->email;
            $row[] = $data1->phone;
            $row[] = '
            <a class="btn btn-sm btn-outline-info" href="' . base_url('admin/user/detail/' . $data1->id_user) . '" title="Detail"><i class="fas fa-info"></i></a>
            <a class="btn btn-sm btn-outline-success" href="' . base_url('admin/user/excel/' . $data1->id_user) . '" title="Excel"><i class="fas fa-file-excel"></i></a>
            ';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->user->count_all(),
            "recordsFiltered" => $this->user->count_filtered(),
            "data" => $data,
        );
        $output[$csrf_name] = $csrf_hash;
        //output to json format
        echo json_encode($output);
    }


    public function ajax_delete($id)
    {
        $data = $this->user->hapus_user($id);
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        redirect('admin/user');
    }

    public function update_user()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'nama_user' => $this->input->post('nama_user', true),
            'no_hp' => $this->input->post('no_hp', true),
            'email' => $this->input->post('email', true),
            'alamat' => $this->input->post('alamat', true),
        );
        $data = $this->security->xss_clean($data);
        $this->user->update_user($id, $data);
        $this->session->set_flashdata('msg', 'Data berhasil diupdate');
        redirect('admin/user');
    }
    public function update_template()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'isi' =>  $this->input->post('isi', true),
            'penutup' =>  $this->input->post('penutup', true),
        );
        $this->user->update_template($id, $data);
        $this->session->set_flashdata('msg', 'Template berhasil diupdate');
        redirect('admin/user/email_id');
    }
    public function update_template_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'isi' =>  $this->input->post('isi', true),
            'penutup' =>  $this->input->post('penutup', true),
        );
        $this->user->update_template_en($id, $data);
        $this->session->set_flashdata('msg', 'Template berhasil diupdate');
        redirect('admin/user/email_en');
    }
}
