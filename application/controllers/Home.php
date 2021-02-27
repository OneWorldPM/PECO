<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->common->set_timezone();
        $login_type = $this->session->userdata('userType');

        if ($login_type != 'user') {
            redirect('login/logout');
        }
    }

    public function index() {
        redirect('sessions');
        //$this->load->view('header');
        //$this->load->view('home');
        //$this->load->view('footer');

        $data = array(
            'profile_data' => $this->common->get_user_details($this->session->userdata('cid')),
            'lobby_video' => $this->getLobbyVideoDetails()
        );

        $this->load->view('home-new', $data);
    }

    function getLobbyVideoDetails()
    {
        $this->db->select('*');
        $this->db->from('lobby_video');
        $video = $this->db->get();
        if ($video->num_rows() > 0)
        {
            return $video->result()[0];
        }else{
            return false;
        }
    }

    public function newHome() {
        $this->load->view('home-new');
    }

    public function notes() {
        $data["briefcase_list"] = $this->getNote();

        $this->load->view('header');
        $this->load->view('notes', $data);
        $this->load->view('footer');
    }

    function getNote() {
        $this->db->select('*');
        $this->db->from('sessions_cust_briefcase b');
        $this->db->join('sessions s', 's.sessions_id=b.sessions_id');
        $this->db->where(array("cust_id" => $this->session->userdata("cid")));
        $sessions_cust_briefcase = $this->db->get();
        if ($sessions_cust_briefcase->num_rows() > 0) {
            return $sessions_cust_briefcase->result();
        } else {
            return '';
        }
    }

    function add_user_activity() {
        $post = $this->input->post();
        $int_array = array(
            'user_id' => $post['user_id'],
            'page_name' => $post['page_name'],
            'page_link' => $post['page_link'],
            'activity_date_time' => date("Y-m-d h:i:s")
        );
        $this->db->insert("user_activity", $int_array);
        echo json_encode(array('status' =>'success'));
    }

    function delete_note($sessions_cust_briefcase_id) {
        $this->db->delete("sessions_cust_briefcase", array("sessions_cust_briefcase_id" => $sessions_cust_briefcase_id));
        header('location:' . base_url() . 'home/notes');
    }

    public function sendSms()
    {
        $this->load->library('twilio');

        $from = '+12065128449';
        $to = '+16048033540';
        $message = '1234 is your Your Conference authentication code for FauxSKO21 login.';

        $response = $this->twilio->sms($from, $to, $message);


        if($response->IsError)
            echo 'Error: ' . $response->ErrorMessage;
        else
            echo 'Sent message to ' . $to;
    }

}
