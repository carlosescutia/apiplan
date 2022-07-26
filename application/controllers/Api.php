<?php
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('instrumentos_model');
        $this->load->model('datos_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'API' => 'Instrumentos de planeación Iplaneg',
            'PED 2040' => base_url().'ped'
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function instrumentos_get($id = 0)
	{

        if(!empty($id)){
            $data = $this->instrumentos_model->get_instrumento($id);
        }else{
            $data = $this->instrumentos_model->get_all_instrumentos();
        }

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron instrumentos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function datos_get($id = 0)
	{

        if(!empty($id)){
            $data = $this->datos_model->get_datos_instrumento($id);
        }else{
            $data = $this->datos_model->get_all_datos();
        }

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron datos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
