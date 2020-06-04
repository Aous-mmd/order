<?php
class Form extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('form_model');
    }
    function index()
    {

        $data["order_list"] = $this->form_model->get_all();
        $this->load->view("order", $data);
    }
    public function add_order()
    {
        $this->load->view("add_order");
    }
    public function data_submitted()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('desc', 'Desc', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
            $this->load->view('add_order');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'desc' => $this->input->post('desc'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
            );
            $result = $this->form_model->create($data);
            if ($result) {
                $data["order_list"] = $this->form_model->get_all();
                $this->load->view("order", $data);
            } else {
                $data['error'] = 'error';
                $this->load->view("order", $data);
            }
        }
    }

    public function update_order($id)
    {
        $data['order'] = $this->form_model->read($id);
        $this->load->view("edit_order", $data);
    }

    public function update_data($id)
    {
        $params = array(
            'name' => $this->input->post('name'),
            'desc' => $this->input->post('desc'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone')
        );
        $result = $this->form_model->update($id, $params);
        if ($result == true) {
            $data["order_list"] = $this->form_model->get_all();
            $this->load->view("order", $data);
        } else {
            $data['error'] = 'error';
            $this->load->view("order", $data);
        }
    }
    public function delete_data($id)
    {
        $this->form_model->delete($id);
        $data["order_list"] = $this->form_model->get_all();
        $this->load->view('order', $data);
    }
    public function get_notify() {
        $data = $this->form_model->get_new_notify_count();
        echo json_encode($data);
    }
}
