<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_CI extends CI_Controller {

        public function vieworder(){
            $this->load->model('Order_model');
            $order = $this->Order_model->all();
            $data = array();
            $data['order'] = $order;
            $this->load->view('view_order',$data);
        }

        public function editOrder($Id){
            $this->load->model('Order_model');
            $order = $this->Order_model->getOrder($Id);
            $data = array();
            $data['order'] = $order;
    
            $this->form_validation->set_rules('status','status','required');
    
            if($this->form_validation->run()== false){
    
                $this->load->view('edit_order',$data);
            }else {
                //update cars record
                $formArray = array();
                $formArray['status'] = $this->input->post('status');
                $this->Order_model->updateOrder($Id,$formArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/Order_CI/vieworder');
            }
        }
}
