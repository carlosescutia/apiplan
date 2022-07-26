<?php
use chriskacerguis\RestServer\RestController;

class pe extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pe_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'PE',
            'Programas' => base_url().'pe/programas?format=html',
            'Lineas estratégicas' => base_url().'pe/lineas?format=html',
            'Objetivos' => base_url().'pe/objetivos?format=html',
            'Indicadores' => base_url().'pe/indicadores?format=html',
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function programas_get()
	{
        $data = $this->pe_model->get_programas();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron programas'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function lineas_get()
	{
        $data = $this->pe_model->get_lineas();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron lineas estratégicas'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function objetivos_get()
	{
        $data = $this->pe_model->get_objetivos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron objetivos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function indicadores_get()
	{
        $data = $this->pe_model->get_indicadores();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron indicadores'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
