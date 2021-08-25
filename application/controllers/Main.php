<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('main');
    }
    public function result()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $user = array(
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'phone' => $this->input->post('phone', true)
            );

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

            $data['result'] = array(
                'innocent' => $innocent,
                'victim' => $victim,
                'warrior' => $warrior,
                'martyr' => $martyr,
                'fool' => $fool,
                'creator' => $creator,
                'tyrant' => $tyrant,
                'magician' => $magician,
            );
            //send email

            $email = $this->input->post('email', true);
            $this->load->library('email'); //panggil library email codeigniter
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_user' => 'moneytypeq@gmail.com',  // Email gmail
                'smtp_pass'   => 'Money12p',  // Password gmail
                'smtp_crypto' => 'ssl',
                'smtp_port'   => 465,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            ];
            $message =  '
            <html>
            <head>
            <title>Money Coach Quiz Results</title>
            </head>
            <body>
            <h2>Congratulations! Here are your results</h2>
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
            $list = array($email, 'muchtarahehe@gmail.com');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user']);
            $this->email->to($list);
            $this->email->subject('Money Coach Quiz Results'); //subjek email
            $this->email->message($message);
            if (!$this->email->send()) {
                $this->session->set_flashdata('error', 'Gagal memproses, Silahkan ulangi');
                redirect(base_url());
            } else {
                redirect('finish');
            }
        }
    }
    public function finish()
    {
        $this->load->view('result');
    }
}
