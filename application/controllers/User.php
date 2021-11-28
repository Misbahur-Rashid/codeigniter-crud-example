



<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');
        $curd_t = $this->User_model->all();
        $data = array();
        $data['curd_t'] = $curd_t;
        $this->load->view('list', $data);
    }
    function create()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('first_name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('dob', 'DOB',);
        $this->form_validation->set_rules('blood_group', 'Blood Group');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('sports', 'Sports');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('portfolio', 'Portfolio');
        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {




            // echo "<pre>";
            // print_r($_FILES);
            // die;

            $name = $_FILES['portfolio']['name'];
            $target_dir = "img/";
            $target_file = $target_dir . basename($_FILES["portfolio"]["name"]);

            // Select file type
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg", "jpeg", "png", "gif");

            // Check extension
            if (in_array($imageFileType, $extensions_arr)) {
                // Upload file
                if (move_uploaded_file($_FILES['portfolio']['tmp_name'], $target_dir . $name)) {
                    $name2 = $name;
                } else {
                    $name2 = '';
                }
            }












            $formArray = array();
            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['dob'] = $this->input->post('dob');
            $formArray['blood_group'] = $this->input->post('blood_group');
            $formArray['gender'] = $this->input->post('gender');
            $formArray['sports'] = $this->input->post('sports');
            $formArray['address'] = $this->input->post('address');
            $formArray['portfolio'] = $name2; //$this->do_upload();
            $formArray['create_at'] = date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Record added successfully!');
            redirect(base_url() . 'index.php/user/index');
        }
    }
    function edit($userID)
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userID);
        $data = array();
        $data['user'] = $user;
        $this->form_validation->set_rules('first_name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('dob', 'DOB',);
        $this->form_validation->set_rules('blood_group', 'Blood Group');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('sports', 'Sports');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('portfolio', 'Portfolio');

        if ($this->form_validation->run() == false) {
            $this->load->view('edit', $data);
        } else {

            $formArray = array();
            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['dob'] = $this->input->post('dob');
            $formArray['blood_group'] = $this->input->post('blood_group');
            $formArray['gender'] = $this->input->post('gender');
            $formArray['sports'] = $this->input->post('sports');
            $formArray['address'] = $this->input->post('address');
            $formArray['portfolio'] = $this->do_upload();
            $this->User_model->updateUser($userID, $formArray);
            $this->session->set_flashdata('sucess', 'Record updated successfully');
            redirect(base_url() . 'index.php/user/index');
        }
    }
    function delete($userID)
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userID);
        if (empty($user)) {
            $this->session->set_flashdata('failure', 'Record not found in database');
            redirect(base_url() . 'index.php/user/index');
        }
        $this->User_model->deleteUser($userID);
        $this->session->set_flashdata('success', 'Record delete sucessfully');
        redirect(base_url() . 'index.php/user/index');
    }
    public function do_upload()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 10024;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('portfolio')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('failure', $error['error']);
            redirect(base_url() . 'index.php/user/index');
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data['upload_data']['file_name'];
        }
    }
}
