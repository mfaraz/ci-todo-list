<?php
class home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    function index() {
        $data = array();
        $data['lists'] = $this->displayList();
        $this->load->view('home', $data);
    }
    function displayList() {
        $str = '';
        $query = $this->db->query("SELECT * FROM data");
        foreach ($query->result() as $row) {
            $b = '<input name="completed" type="checkbox" />';
            $a = $row->title . "<br>";
            $str .= $b.$a;
        }
        return $str;
    }
    function jsonAddTask() {
        if($this->input->is_ajax_request()) {
        $title = $this->input->post('title');
        $query = $this->db->query("INSERT INTO data (title) VALUES ('$title')");
        header('Content-type:application/json');
        if($query) echo json_encode(array('title_posted' => true));
        else echo json_encode(array('title_posted' => false));
        }
    }
}
?>