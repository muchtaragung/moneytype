<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Moneytype extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->model('M_user', 'user');
    $this->load->model('M_web', 'web');
    $this->load->model('M_res', 'res');
    // $this->load->library('PHPExcel/iofactory');
    $this->load->helper('security');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Money Type Quiz';
    $data['logo'] = $this->web->get_logo()->row();
    $data['sosmed'] = $this->web->get_sosmed()->result();
    $data['contact'] = $this->web->get_contact()->row();
    $data['recent_footer'] = $this->res->get_resource_id_footer()->result();
    $data['galeri'] = $this->web->get_galeri_web()->result();
    $data['status'] = $this->web->get_galeri_web()->row();
    if ($this->uri->segment(1) == "id") {
      $this->load->view('web/layout/header', $data);
      $this->load->view('web/layout/navbar', $data);
      $this->load->view('web/mt/main');
      $this->load->view('web/layout/footer', $data);
    } else {
      $this->load->view('web/layout/header', $data);
      $this->load->view('web/layout/navbar', $data);
      $this->load->view('web/mt/main_en');
      $this->load->view('web/layout/footer', $data);
    }
  }
  public function excel($kata, $user, $type)
  {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Nama');
    $sheet->setCellValue('A2', 'Email');
    $sheet->setCellValue('A3', 'No telepon');
    $sheet->setCellValue('A5', 'Archetype');
    $sheet->setCellValue('B5', 'SCORE');
    $sheet->setCellValue('A15', 'Type');
    $sheet->setCellValue('B15', 'Checked');
    $sheet->setCellValue('B' . 1, $user['nama']);
    $sheet->setCellValue('B' . 2, $user['email']);
    $sheet->setCellValue('B' . 3, $user['phone']);
    $rows1 = 6;
    foreach ($type as $key => $val) {
      if (!empty($val)) {
        $sheet->setCellValue('A' . $rows1, $key);
        $sheet->setCellValue('B' . $rows1, round($val, 0) . '%');
        $rows1++;
      }
    }
    $rows = 16;
    foreach ($kata as $key => $val) {
      if (!empty($val)) {
        if ($val == 1) {
          $val = "Yes";
        }
        $sheet->setCellValue('A' . $rows, $key);
        $sheet->setCellValue('B' . $rows, $val);
        $rows++;
      }
    }

    $nama = $user['email'];
    $no = $user['phone'];
    $filename = $nama . '-' . $no . '.xlsx';
    $writer = new Xlsx($spreadsheet);
    $writer->save('excel/' . $filename);
  }


  public function result()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
    $this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
    $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $email_penerima = $this->web->get_email()->row();
      $temp = $this->user->get_template()->row();
      $logo = $this->web->get_logo()->row();


      $name = $this->input->post('nama', true);
      $email = $this->input->post('email', true);
      $phone = $this->input->post('phone', true);

      //no 1
      $anxious = $this->input->post('anxious', true);
      $seeks_rescue = $this->input->post('seeks_rescue', true);
      $trusting = $this->input->post('trusting', true);
      $feels_powerless = $this->input->post('feels_powerless', true);
      $naive = $this->input->post('naive', true);
      $happy_go_lucky = $this->input->post('happy_go_lucky', true);
      $fearful = $this->input->post('fearful', true);
      $financially_dependant = $this->input->post('financially_dependant', true);
      $seeks_security = $this->input->post('seeks_security', true);
      $non_confrontational = $this->input->post('non_confrontational', true);
      $represses_feelings_beliefs = $this->input->post('represses_feelings_beliefs', true);
      $indecisive = $this->input->post('indecisive', true);
      $no1 = $anxious + $seeks_rescue + $trusting + $feels_powerless + $naive + $happy_go_lucky + $fearful + $financially_dependant + $seeks_security + $non_confrontational + $represses_feelings_beliefs + $indecisive;
      $innocent = ($no1 / 12) * 100;

      //no2
      $prone_to_blame = $this->input->post('prone_to_blame', true);
      $highly_emotional = $this->input->post('highly_emotional', true);
      $lives_in_past = $this->input->post('lives_in_past', true);
      $financially_irresponsible = $this->input->post('financially_irresponsible', true);
      $self_fulfilling_prophecy = $this->input->post('self_fulfilling_prophecy', true);
      $long_suffering = $this->input->post('long_suffering', true);
      $passive_aggressive = $this->input->post('passive_aggressive', true);
      $resentful = $this->input->post('resentful', true);
      $unforgiving = $this->input->post('unforgiving', true);
      $addictive = $this->input->post('addictive', true);
      $no2 = $prone_to_blame + $highly_emotional + $lives_in_past + $financially_irresponsible + $self_fulfilling_prophecy + $long_suffering + $passive_aggressive + $unforgiving + $addictive + $fearful + $feels_powerless + $resentful;

      $victim = ($no2 / 12) * 100;

      //no3
      $powerful = $this->input->post('powerful', true);
      $disciplined = $this->input->post('disciplined', true);
      $goal_oriented = $this->input->post('goal_oriented', true);
      $calculating = $this->input->post('calculating', true);
      $rescuer = $this->input->post('rescuer', true);
      $generous = $this->input->post('generous', true);
      $discerning = $this->input->post('discerning', true);
      $wise = $this->input->post('wise', true);
      $financially_successful = $this->input->post('financially_successful', true);
      $collaborative = $this->input->post('collaborative', true);
      $loyal = $this->input->post('loyal', true);
      $cautious = $this->input->post('cautious', true);
      $no3 = $powerful + $disciplined + $goal_oriented + $calculating + $rescuer + $generous + $discerning + $wise + $financially_successful + $collaborative + $loyal + $cautious;

      $warrior = ($no3 / 12) * 100;

      //no4
      $feels_betrayed = $this->input->post('feels_betrayed', true);
      $judgmental = $this->input->post('judgmental', true);
      $manipulative = $this->input->post('manipulative', true);
      $controlling = $this->input->post('controlling', true);
      $caretaker = $this->input->post('caretaker', true);
      $self_sacrificing = $this->input->post('self_sacrificing', true);
      $compassionate = $this->input->post('compassionate', true);
      $unsupported = $this->input->post('unsupported', true);
      $perfectionist = $this->input->post('perfectionist', true);
      $no4 = $feels_betrayed + $judgmental + $rescuer + $manipulative + $controlling + $long_suffering + $caretaker + $self_sacrificing + $passive_aggressive + $compassionate + $unsupported + $perfectionist;

      $martyr = ($no4 / 12) * 100;

      //no5
      $lives_for_today = $this->input->post('lives_for_today', true);
      $careless = $this->input->post('careless', true);
      $restless = $this->input->post('restless', true);
      $undisciplined = $this->input->post('undisciplined', true);
      $impulsive = $this->input->post('impulsive', true);
      $optimistic = $this->input->post('optimistic', true);
      $overly_generous = $this->input->post('overly_generous', true);
      $adventurous = $this->input->post('adventurous', true);
      $over_indulgent = $this->input->post('over_indulgent', true);
      $reckless = $this->input->post('reckless', true);
      $no5 = $lives_for_today + $careless + $restless + $undisciplined + $impulsive + $optimistic + $overly_generous + $adventurous + $over_indulgent + $reckless + $financially_irresponsible + $happy_go_lucky;

      $fool = ($no5 / 12) * 100;

      //no6
      $love_relationship = $this->input->post('love_relationship', true);
      $detached = $this->input->post('detached', true);
      $reclusive = $this->input->post('reclusive', true);
      $internally_motivated = $this->input->post('internally_motivated', true);
      $authentic = $this->input->post('authentic', true);
      $non_materialistic = $this->input->post('non_materialistic', true);
      $passive = $this->input->post('passive', true);
      $creative = $this->input->post('creative', true);
      $spiritual = $this->input->post('spiritual', true);
      $conflicted = $this->input->post('conflicted', true);
      $resistant = $this->input->post('resistant', true);
      $no6 = $love_relationship + $detached + $reclusive + $internally_motivated + $authentic + $non_materialistic + $passive + $creative + $spiritual + $conflicted + $resistant + $non_confrontational;

      $creator = ($no6 / 12) * 100;

      //no7
      $highly_critical = $this->input->post('highly_critical', true);
      $materialistic = $this->input->post('materialistic', true);
      $secretive = $this->input->post('secretive', true);
      $obsessive = $this->input->post('obsessive', true);
      $oppressive = $this->input->post('oppressive', true);
      $angry = $this->input->post('angry', true);
      $no7 = $highly_critical + $materialistic + $secretive + $obsessive + $oppressive + $angry + $unforgiving + $calculating + $manipulative + $controlling + $financially_successful + $fearful;

      $tyrant = ($no7 / 12) * 100;

      //no8
      $confident = $this->input->post('confident', true);
      $resourceful = $this->input->post('resourceful', true);
      $conscious = $this->input->post('conscious', true);
      $guided_by_faith = $this->input->post('guided_by_faith', true);
      $enlightened = $this->input->post('enlightened', true);
      $balanced = $this->input->post('balanced', true);
      $unattached = $this->input->post('unattached', true);
      $transforms_reality = $this->input->post('transforms_reality', true);
      $no8 = $trusting + $powerful + $confident + $generous + $resourceful + $conscious + $guided_by_faith + $discerning + $compassionate + $wise + $optimistic + $enlightened + $authentic + $balanced + $unattached + $creative + $transforms_reality + $spiritual;
      $magician =  ($no8 / 18) * 100;

      $user = array(
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => $this->input->post('email', true),
        'phone' => htmlspecialchars($this->input->post('phone', true))
      );
      $this->user->tambah_user($user);
      $id_user = $this->db->insert_id();


      $kata = array(
        'Anxious' => $this->input->post('anxious', true),
        'Seeks rescue' => $this->input->post('seeks_rescue', true),
        'Trusting' => $this->input->post('trusting', true),
        'Feels powerless' => $this->input->post('feels_powerless', true),
        'Naive' => $this->input->post('naive', true),
        'Happy go lucky' => $this->input->post('happy_go_lucky', true),
        'Fearful' => $this->input->post('fearful', true),
        'Financially dependant' => $this->input->post('financially_dependant', true),
        'Seeks security' => $this->input->post('seeks_security', true),
        'Non confrontational' => $this->input->post('non_confrontational', true),
        'Represses feelings beliefs' => $this->input->post('represses_feelings_beliefs', true),
        'Indecisive' => $this->input->post('indecisive', true),
        'Prone to blame' => $this->input->post('prone_to_blame', true),
        'Highly emotional' => $this->input->post('highly_emotional', true),
        'Lives in past' => $this->input->post('lives_in_past', true),
        'Financially irresponsible' => $this->input->post('financially_irresponsible', true),
        'Self fulfilling prophecy' => $this->input->post('self_fulfilling_prophecy', true),
        'Long suffering' => $this->input->post('long_suffering', true),
        'Passive aggressive' => $this->input->post('passive_aggressive', true),
        'Resentful' => $this->input->post('resentful', true),
        'Unforgiving' => $this->input->post('unforgiving', true),
        'Addictive' => $this->input->post('addictive', true),
        'Powerful' => $this->input->post('powerful', true),
        'Disciplined' => $this->input->post('disciplined', true),
        'Goal oriented' => $this->input->post('goal_oriented', true),
        'Calculating' => $this->input->post('calculating', true),
        'Rescuer' => $this->input->post('rescuer', true),
        'Generous' => $this->input->post('generous', true),
        'Discerning' => $this->input->post('discerning', true),
        'Wise' => $this->input->post('wise', true),
        'Financially successful' => $this->input->post('financially_successful', true),
        'Collaborative' => $this->input->post('collaborative', true),
        'Loyal' => $this->input->post('loyal', true),
        'Cautious' => $this->input->post('cautious', true),
        'Feels betrayed' => $this->input->post('feels_betrayed', true),
        'Judgmental' => $this->input->post('judgmental', true),
        'Manipulative' => $this->input->post('manipulative', true),
        'Controlling' => $this->input->post('controlling', true),
        'Caretaker' => $this->input->post('caretaker', true),
        'Self Sacrificing' => $this->input->post('self_sacrificing', true),
        'Compassionate' => $this->input->post('compassionate', true),
        'Unsupported' => $this->input->post('unsupported', true),
        'Perfectionist' => $this->input->post('perfectionist', true),
        'Lives for today' => $this->input->post('lives_for_today', true),
        'Careless' => $this->input->post('careless', true),
        'Restless' => $this->input->post('restless', true),
        'Undisciplined' => $this->input->post('undisciplined', true),
        'Impulsive' => $this->input->post('impulsive', true),
        'Optimistic' => $this->input->post('optimistic', true),
        'Overly generous' => $this->input->post('overly_generous', true),
        'Adventurous' => $this->input->post('adventurous', true),
        'Over indulgent' => $this->input->post('over_indulgent', true),
        'Reckless' => $this->input->post('reckless', true),
        'Love/Hate relationship' => $this->input->post('love_relationship', true),
        'Detached' => $this->input->post('detached', true),
        'Reclusive' => $this->input->post('reclusive', true),
        'Internally motivated' => $this->input->post('internally_motivated', true),
        'Authentic' => $this->input->post('authentic', true),
        'Non materialistic' => $this->input->post('non_materialistic', true),
        'Passive' => $this->input->post('passive', true),
        'Creative' => $this->input->post('creative', true),
        'Spiritual' => $this->input->post('spiritual', true),
        'Conflicted' => $this->input->post('conflicted', true),
        'Resistant' => $this->input->post('resistant', true),
        'Highly critical' => $this->input->post('highly_critical', true),
        'Materialistic' => $this->input->post('materialistic', true),
        'Secretive' => $this->input->post('secretive', true),
        'Obsessive' => $this->input->post('obsessive', true),
        'Oppressive' => $this->input->post('oppressive', true),
        'Angry' => $this->input->post('angry', true),
        'Confident' => $this->input->post('confident', true),
        'Resourceful' => $this->input->post('resourceful', true),
        'Conscious' => $this->input->post('conscious', true),
        'Guided by faith' => $this->input->post('guided_by_faith', true),
        'Enlightened' => $this->input->post('enlightened', true),
        'Balanced' => $this->input->post('balanced', true),
        'Unattached' => $this->input->post('unattached', true),
        'Transforms Reality' => $this->input->post('transforms_reality', true),
      );

      foreach ($kata as $key => $val) {
        if (!empty($val)) {
          $kata1 = array(
            'nama_kata' => $key,
            'id_user' => $id_user
          );
          $this->db->insert('kata', $kata1);
        }
      }


      $type = array(
        'Innocent' => $innocent,
        'Victim' => $victim,
        'Warrior' => $warrior,
        'Martyr' => $martyr,
        'Fool' => $fool,
        'Creator/Artist' => $creator,
        'Tyrant' => $tyrant,
        'Magician' => $magician,
      );
      foreach ($type as $key => $val) {
        if (!empty($val)) {
          $type1 = array(
            'archetype' => $key,
            'score' => $val,
            'id_user' => $id_user
          );
          $this->db->insert('type', $type1);
        }
      }
      $this->excel($kata, $user, $type);
      // die;
      //send email
      $email = $this->input->post('email', true);
      $this->load->library('email'); //panggil library email codeigniter
      $config = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'mail',
        'smtp_host' => 'mail.vidiracoaching.com',
        'smtp_user' => $email_penerima->email_web,
        'smtp_pass'   => $email_penerima->password,
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"
      ];

      $this->email->initialize($config);
      // $filename = './assets/admin/assets/logo/' . $logo->logo_footer . '';
      $cmc = './assets/admin/assets/logo/email.png';
      // $this->email->attach($filename);
      $this->email->attach($cmc);
      // $cid = $this->email->attachment_cid($filename);
      $cid_cmc = $this->email->attachment_cid($cmc);
      $message =  '
            <html>
            <head>
            <title>Hasil Money Quiz</title>
            </head>
            <body>
            <p>Hello ' . $user['nama'] . ',</p>
            ' . $temp->isi . '
            <table>
                <tr>
                <th width="150px" style="text-align: left ; line-height: 15px;">Archetype</th>
                <th>SCORE</th>
                </tr>
                <tr style="text-align: left;">
                    <td >Innocent</td>
                    <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($innocent, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($innocent, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Victim</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($victim, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($victim, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Warrior</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($warrior, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($warrior, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Martyr</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($martyr, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($martyr, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Fool</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($fool, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($fool, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Creator/Artist</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($creator, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($creator, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Tyrant</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($tyrant, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($tyrant, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Magician</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($magician, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($magician, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                </table>
                ' . $temp->penutup . '
                <img width="450px" src="cid:' . $cid_cmc . '" alt="vidira" />
            </body>
            </html>
            ';
      $this->email->set_newline("\r\n");
      $this->email->from($config['smtp_user']);
      $this->email->to($email);
      $this->email->subject('hasil money quiz'); //subjek email
      $this->email->message($message);
      $email1 = $this->email->send();


      $config2 = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'mail',
        'smtp_host' => 'mail.vidiracoaching.com',
        'smtp_user' => $email_penerima->email_web,  // Email gmail
        'smtp_pass'   => $email_penerima->password,  // Password gmail
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"
      ];
      $message2 =  '
          <html>
          <head>
          <title>Hasil Money Quiz New User</title>
          </head>
          <body>
          <h2>New User</h2>
          <table>
            <tr>
              <td width="150px">Name</td>
              <td>' . $name . '</td>
          </tr>
          <tr>
            <td width="150px">Email</td>
            <td>' . $email . '</td>
        </tr>
        <tr>
          <td width="150px">Phone number</td>
          <td>' . $phone . '</td>
      </tr>
          </table>
          <table>
              <tr>
              <th width="150px" style="text-align: left ; line-height: 15px;">Archetype</th>
              <th>SCORE</th>
              </tr>
              <tr style="text-align: left;">
                  <td >Innocent</td>
                  <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($innocent, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($innocent, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Victim</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($victim, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($victim, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Warrior</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($warrior, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($warrior, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Martyr</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($martyr, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($martyr, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Fool</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($fool, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($fool, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Creator/Artist</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($creator, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($creator, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Tyrant</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($tyrant, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($tyrant, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Magician</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($magician, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($magician, 0) . '%</td>
                    </table>
                  </td>
              </tr>
          </table>
          </body>
          </html>
          ';

      $this->email->initialize($config2);
      $this->email->set_newline("\r\n");
      $this->email->from($config2['smtp_user']);
      $this->email->to($email_penerima->email);
      $this->email->subject('hasil money quiz new user'); //subjek email
      $this->email->message($message2);
      $this->email->attach('./excel/' . $user['email'] . '-' . $user['phone'] . '.xlsx');
      $email2 =  $this->email->send();
      if (!$email1 && $email2) {
        $this->session->set_flashdata('error', 'Gagal memproses, Silahkan ulangi');
        if ($this->uri->segment(1) != "id") {
          redirect('moneytype');
        } else {
          redirect('' . $this->uri->segment(1) . '/moneytype');
        }
      } else {
        if ($this->uri->segment(1) != "id") {
          redirect('finish');
        } else {
          redirect('' . $this->uri->segment(1) . '/finish');
        }
      }
    }
  }
  public function result_en()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
    $this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
    $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $email_penerima = $this->web->get_email()->row();
      $temp = $this->user->get_template_en()->row();
      $logo = $this->web->get_logo()->row();


      $name = $this->input->post('nama', true);
      $email = $this->input->post('email', true);
      $phone = $this->input->post('phone', true);

      //no 1
      $anxious = $this->input->post('anxious', true);
      $seeks_rescue = $this->input->post('seeks_rescue', true);
      $trusting = $this->input->post('trusting', true);
      $feels_powerless = $this->input->post('feels_powerless', true);
      $naive = $this->input->post('naive', true);
      $happy_go_lucky = $this->input->post('happy_go_lucky', true);
      $fearful = $this->input->post('fearful', true);
      $financially_dependant = $this->input->post('financially_dependant', true);
      $seeks_security = $this->input->post('seeks_security', true);
      $non_confrontational = $this->input->post('non_confrontational', true);
      $represses_feelings_beliefs = $this->input->post('represses_feelings_beliefs', true);
      $indecisive = $this->input->post('indecisive', true);
      $no1 = $anxious + $seeks_rescue + $trusting + $feels_powerless + $naive + $happy_go_lucky + $fearful + $financially_dependant + $seeks_security + $non_confrontational + $represses_feelings_beliefs + $indecisive;
      $innocent = ($no1 / 12) * 100;

      //no2
      $prone_to_blame = $this->input->post('prone_to_blame', true);
      $highly_emotional = $this->input->post('highly_emotional', true);
      $lives_in_past = $this->input->post('lives_in_past', true);
      $financially_irresponsible = $this->input->post('financially_irresponsible', true);
      $self_fulfilling_prophecy = $this->input->post('self_fulfilling_prophecy', true);
      $long_suffering = $this->input->post('long_suffering', true);
      $passive_aggressive = $this->input->post('passive_aggressive', true);
      $resentful = $this->input->post('resentful', true);
      $unforgiving = $this->input->post('unforgiving', true);
      $addictive = $this->input->post('addictive', true);
      $no2 = $prone_to_blame + $highly_emotional + $lives_in_past + $financially_irresponsible + $self_fulfilling_prophecy + $long_suffering + $passive_aggressive + $unforgiving + $addictive + $fearful + $feels_powerless + $resentful;

      $victim = ($no2 / 12) * 100;

      //no3
      $powerful = $this->input->post('powerful', true);
      $disciplined = $this->input->post('disciplined', true);
      $goal_oriented = $this->input->post('goal_oriented', true);
      $calculating = $this->input->post('calculating', true);
      $rescuer = $this->input->post('rescuer', true);
      $generous = $this->input->post('generous', true);
      $discerning = $this->input->post('discerning', true);
      $wise = $this->input->post('wise', true);
      $financially_successful = $this->input->post('financially_successful', true);
      $collaborative = $this->input->post('collaborative', true);
      $loyal = $this->input->post('loyal', true);
      $cautious = $this->input->post('cautious', true);
      $no3 = $powerful + $disciplined + $goal_oriented + $calculating + $rescuer + $generous + $discerning + $wise + $financially_successful + $collaborative + $loyal + $cautious;

      $warrior = ($no3 / 12) * 100;

      //no4
      $feels_betrayed = $this->input->post('feels_betrayed', true);
      $judgmental = $this->input->post('judgmental', true);
      $manipulative = $this->input->post('manipulative', true);
      $controlling = $this->input->post('controlling', true);
      $caretaker = $this->input->post('caretaker', true);
      $self_sacrificing = $this->input->post('self_sacrificing', true);
      $compassionate = $this->input->post('compassionate', true);
      $unsupported = $this->input->post('unsupported', true);
      $perfectionist = $this->input->post('perfectionist', true);
      $no4 = $feels_betrayed + $judgmental + $rescuer + $manipulative + $controlling + $long_suffering + $caretaker + $self_sacrificing + $passive_aggressive + $compassionate + $unsupported + $perfectionist;

      $martyr = ($no4 / 12) * 100;

      //no5
      $lives_for_today = $this->input->post('lives_for_today', true);
      $careless = $this->input->post('careless', true);
      $restless = $this->input->post('restless', true);
      $undisciplined = $this->input->post('undisciplined', true);
      $impulsive = $this->input->post('impulsive', true);
      $optimistic = $this->input->post('optimistic', true);
      $overly_generous = $this->input->post('overly_generous', true);
      $adventurous = $this->input->post('adventurous', true);
      $over_indulgent = $this->input->post('over_indulgent', true);
      $reckless = $this->input->post('reckless', true);
      $no5 = $lives_for_today + $careless + $restless + $undisciplined + $impulsive + $optimistic + $overly_generous + $adventurous + $over_indulgent + $reckless + $financially_irresponsible + $happy_go_lucky;

      $fool = ($no5 / 12) * 100;

      //no6
      $love_relationship = $this->input->post('love_relationship', true);
      $detached = $this->input->post('detached', true);
      $reclusive = $this->input->post('reclusive', true);
      $internally_motivated = $this->input->post('internally_motivated', true);
      $authentic = $this->input->post('authentic', true);
      $non_materialistic = $this->input->post('non_materialistic', true);
      $passive = $this->input->post('passive', true);
      $creative = $this->input->post('creative', true);
      $spiritual = $this->input->post('spiritual', true);
      $conflicted = $this->input->post('conflicted', true);
      $resistant = $this->input->post('resistant', true);
      $no6 = $love_relationship + $detached + $reclusive + $internally_motivated + $authentic + $non_materialistic + $passive + $creative + $spiritual + $conflicted + $resistant + $non_confrontational;

      $creator = ($no6 / 12) * 100;

      //no7
      $highly_critical = $this->input->post('highly_critical', true);
      $materialistic = $this->input->post('materialistic', true);
      $secretive = $this->input->post('secretive', true);
      $obsessive = $this->input->post('obsessive', true);
      $oppressive = $this->input->post('oppressive', true);
      $angry = $this->input->post('angry', true);
      $no7 = $highly_critical + $materialistic + $secretive + $obsessive + $oppressive + $angry + $unforgiving + $calculating + $manipulative + $controlling + $financially_successful + $fearful;

      $tyrant = ($no7 / 12) * 100;

      //no8
      $confident = $this->input->post('confident', true);
      $resourceful = $this->input->post('resourceful', true);
      $conscious = $this->input->post('conscious', true);
      $guided_by_faith = $this->input->post('guided_by_faith', true);
      $enlightened = $this->input->post('enlightened', true);
      $balanced = $this->input->post('balanced', true);
      $unattached = $this->input->post('unattached', true);
      $transforms_reality = $this->input->post('transforms_reality', true);
      $no8 = $trusting + $powerful + $confident + $generous + $resourceful + $conscious + $guided_by_faith + $discerning + $compassionate + $wise + $optimistic + $enlightened + $authentic + $balanced + $unattached + $creative + $transforms_reality + $spiritual;
      $magician =  ($no8 / 18) * 100;

      $user = array(
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => $this->input->post('email', true),
        'phone' => htmlspecialchars($this->input->post('phone', true))
      );
      $this->user->tambah_user($user);
      $id_user = $this->db->insert_id();


      $kata = array(
        'Anxious' => $this->input->post('anxious', true),
        'Seeks rescue' => $this->input->post('seeks_rescue', true),
        'Trusting' => $this->input->post('trusting', true),
        'Feels powerless' => $this->input->post('feels_powerless', true),
        'Naive' => $this->input->post('naive', true),
        'Happy go lucky' => $this->input->post('happy_go_lucky', true),
        'Fearful' => $this->input->post('fearful', true),
        'Financially dependant' => $this->input->post('financially_dependant', true),
        'Seeks security' => $this->input->post('seeks_security', true),
        'Non confrontational' => $this->input->post('non_confrontational', true),
        'Represses feelings beliefs' => $this->input->post('represses_feelings_beliefs', true),
        'Indecisive' => $this->input->post('indecisive', true),
        'Prone to blame' => $this->input->post('prone_to_blame', true),
        'Highly emotional' => $this->input->post('highly_emotional', true),
        'Lives in past' => $this->input->post('lives_in_past', true),
        'Financially irresponsible' => $this->input->post('financially_irresponsible', true),
        'Self fulfilling prophecy' => $this->input->post('self_fulfilling_prophecy', true),
        'Long suffering' => $this->input->post('long_suffering', true),
        'Passive aggressive' => $this->input->post('passive_aggressive', true),
        'Resentful' => $this->input->post('resentful', true),
        'Unforgiving' => $this->input->post('unforgiving', true),
        'Addictive' => $this->input->post('addictive', true),
        'Powerful' => $this->input->post('powerful', true),
        'Disciplined' => $this->input->post('disciplined', true),
        'Goal oriented' => $this->input->post('goal_oriented', true),
        'Calculating' => $this->input->post('calculating', true),
        'Rescuer' => $this->input->post('rescuer', true),
        'Generous' => $this->input->post('generous', true),
        'Discerning' => $this->input->post('discerning', true),
        'Wise' => $this->input->post('wise', true),
        'Financially successful' => $this->input->post('financially_successful', true),
        'Collaborative' => $this->input->post('collaborative', true),
        'Loyal' => $this->input->post('loyal', true),
        'Cautious' => $this->input->post('cautious', true),
        'Feels betrayed' => $this->input->post('feels_betrayed', true),
        'Judgmental' => $this->input->post('judgmental', true),
        'Manipulative' => $this->input->post('manipulative', true),
        'Controlling' => $this->input->post('controlling', true),
        'Caretaker' => $this->input->post('caretaker', true),
        'Self Sacrificing' => $this->input->post('self_sacrificing', true),
        'Compassionate' => $this->input->post('compassionate', true),
        'Unsupported' => $this->input->post('unsupported', true),
        'Perfectionist' => $this->input->post('perfectionist', true),
        'Lives for today' => $this->input->post('lives_for_today', true),
        'Careless' => $this->input->post('careless', true),
        'Restless' => $this->input->post('restless', true),
        'Undisciplined' => $this->input->post('undisciplined', true),
        'Impulsive' => $this->input->post('impulsive', true),
        'Optimistic' => $this->input->post('optimistic', true),
        'Overly generous' => $this->input->post('overly_generous', true),
        'Adventurous' => $this->input->post('adventurous', true),
        'Over indulgent' => $this->input->post('over_indulgent', true),
        'Reckless' => $this->input->post('reckless', true),
        'Love/Hate relationship' => $this->input->post('love_relationship', true),
        'Detached' => $this->input->post('detached', true),
        'Reclusive' => $this->input->post('reclusive', true),
        'Internally motivated' => $this->input->post('internally_motivated', true),
        'Authentic' => $this->input->post('authentic', true),
        'Non materialistic' => $this->input->post('non_materialistic', true),
        'Passive' => $this->input->post('passive', true),
        'Creative' => $this->input->post('creative', true),
        'Spiritual' => $this->input->post('spiritual', true),
        'Conflicted' => $this->input->post('conflicted', true),
        'Resistant' => $this->input->post('resistant', true),
        'Highly critical' => $this->input->post('highly_critical', true),
        'Materialistic' => $this->input->post('materialistic', true),
        'Secretive' => $this->input->post('secretive', true),
        'Obsessive' => $this->input->post('obsessive', true),
        'Oppressive' => $this->input->post('oppressive', true),
        'Angry' => $this->input->post('angry', true),
        'Confident' => $this->input->post('confident', true),
        'Resourceful' => $this->input->post('resourceful', true),
        'Conscious' => $this->input->post('conscious', true),
        'Guided by faith' => $this->input->post('guided_by_faith', true),
        'Enlightened' => $this->input->post('enlightened', true),
        'Balanced' => $this->input->post('balanced', true),
        'Unattached' => $this->input->post('unattached', true),
        'Transforms Reality' => $this->input->post('transforms_reality', true),
      );

      foreach ($kata as $key => $val) {
        if (!empty($val)) {
          $kata1 = array(
            'nama_kata' => $key,
            'id_user' => $id_user
          );
          $this->db->insert('kata', $kata1);
        }
      }


      $type = array(
        'Innocent' => $innocent,
        'Victim' => $victim,
        'Warrior' => $warrior,
        'Martyr' => $martyr,
        'Fool' => $fool,
        'Creator/Artist' => $creator,
        'Tyrant' => $tyrant,
        'Magician' => $magician,
      );
      foreach ($type as $key => $val) {
        if (!empty($val)) {
          $type1 = array(
            'archetype' => $key,
            'score' => $val,
            'id_user' => $id_user
          );
          $this->db->insert('type', $type1);
        }
      }
      $this->excel($kata, $user, $type);
      // die;
      //send email
      $email = $this->input->post('email', true);
      $this->load->library('email'); //panggil library email codeigniter
      $config = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'mail',
        'smtp_host' => 'mail.vidiracoaching.com',
        'smtp_user' => $email_penerima->email_web,
        'smtp_pass'   => $email_penerima->password,
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"
      ];

      $this->email->initialize($config);
      // $filename = './assets/admin/assets/logo/' . $logo->logo_footer . '';
      $cmc = './assets/admin/assets/logo/email.png';
      $this->email->attach($cmc);
      $cid_cmc = $this->email->attachment_cid($cmc);
      $message =  '
            <html>
            <head>
            <title>Hasil Money Quiz</title>
            </head>
            <body>
            <p>Hello ' . $user['nama'] . ',</p>
            ' . $temp->isi . '
            <table>
                <tr>
                <th width="150px" style="text-align: left ; line-height: 15px;">Archetype</th>
                <th>SCORE</th>
                </tr>
                <tr style="text-align: left;">
                    <td >Innocent</td>
                    <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($innocent, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($innocent, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Victim</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($victim, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($victim, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Warrior</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($warrior, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($warrior, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Martyr</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($martyr, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($martyr, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Fool</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($fool, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($fool, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Creator/Artist</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($creator, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($creator, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Tyrant</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($tyrant, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($tyrant, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td>Magician</td>
                   <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                        <td width="83.3%"> <!-- 8.81 / 10.572 -->
                          <table width="' . round($magician, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                            <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                          </table>
                        </td>
                        <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($magician, 0) . '%</td>
                      </table>
                    </td>
                </tr>
                </table>
                ' . $temp->penutup . '
                <img width="450px" src="cid:' . $cid_cmc . '" alt="vidira" />
            </body>
            </html>
            ';
      $this->email->set_newline("\r\n");
      $this->email->from($config['smtp_user']);
      $this->email->to($email);
      $this->email->subject('hasil money quiz'); //subjek email
      $this->email->message($message);
      $email1 = $this->email->send();


      $config2 = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'mail',
        'smtp_host' => 'mail.vidiracoaching.com',
        'smtp_user' => $email_penerima->email_web,  // Email gmail
        'smtp_pass'   => $email_penerima->password,  // Password gmail
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"
      ];
      $message2 =  '
          <html>
          <head>
          <title>Hasil Money Quiz New User</title>
          </head>
          <body>
          <h2>New User</h2>
          <table>
            <tr>
              <td width="150px">Name</td>
              <td>' . $name . '</td>
          </tr>
          <tr>
            <td width="150px">Email</td>
            <td>' . $email . '</td>
        </tr>
        <tr>
          <td width="150px">Phone number</td>
          <td>' . $phone . '</td>
      </tr>
          </table>
          <table>
              <tr>
              <th width="150px" style="text-align: left ; line-height: 15px;">Archetype</th>
              <th>SCORE</th>
              </tr>
              <tr style="text-align: left;">
                  <td >Innocent</td>
                  <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($innocent, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($innocent, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Victim</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($victim, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($victim, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Warrior</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($warrior, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($warrior, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Martyr</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($martyr, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($martyr, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Fool</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($fool, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($fool, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Creator/Artist</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($creator, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($creator, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Tyrant</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($tyrant, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($tyrant, 0) . '%</td>
                    </table>
                  </td>
              </tr>
              <tr style="text-align: left;">
                  <td>Magician</td>
                 <td width="70%"><table width="100%" cellpadding="0" cellspacing="0" border="0">   
                      <td width="83.3%"> <!-- 8.81 / 10.572 -->
                        <table width="' . round($magician, 0) . '%" cellpadding="0" cellspacing="0" border="0">   
                          <td width="35.1%" bgcolor="#3399FF">&nbsp;</td>
                        </table>
                      </td>
                      <td style="padding-left: 8px;font-size: 12px; color: #868E96;">' . round($magician, 0) . '%</td>
                    </table>
                  </td>
              </tr>
          </table>
          </body>
          </html>
          ';

      $this->email->initialize($config2);
      $this->email->set_newline("\r\n");
      $this->email->from($config2['smtp_user']);
      $this->email->to($email_penerima->email);
      $this->email->subject('hasil money quiz new user'); //subjek email
      $this->email->message($message2);
      $this->email->attach('./excel/' . $user['email'] . '-' . $user['phone'] . '.xlsx');
      $email2 =  $this->email->send();
      if (!$email1 && $email2) {
        $this->session->set_flashdata('error', 'Gagal memproses, Silahkan ulangi');
        if ($this->uri->segment(1) != "id") {
          redirect('moneytype');
        } else {
          redirect('' . $this->uri->segment(1) . '/moneytype');
        }
      } else {
        if ($this->uri->segment(1) != "id") {
          redirect('finish');
        } else {
          redirect('' . $this->uri->segment(1) . '/finish');
        }
      }
    }
  }
}
