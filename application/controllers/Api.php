<?php
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('instrumentos_constructor_model');
        $this->load->model('datos_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'API' => 'Instrumentos de planeación Iplaneg',
            'ODS' => base_url().'ods',
            'PND' => base_url().'pnd',
            'PED 2040' => base_url().'ped',
            'APG-1824' => base_url().'apg',
            'APS-1924' => base_url().'aps',
            'PE-1924' => base_url().'pe'
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function instrumentos_get($id = 0)
	{

        if(!empty($id)){
            $data = $this->instrumentos_constructor_model->get_instrumento($id);
        }else{
            $data = $this->instrumentos_constructor_model->get_all_instrumentos_constructor();
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
