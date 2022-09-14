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
            'Programas' => base_url().'pe/programas',
            'Lineas estratégicas' => base_url().'pe/lineas',
            'Objetivos' => base_url().'pe/objetivos',
            'Líneas de acción' => base_url().'pe/lineas_accion',
            'Estrategias' => base_url().'pe/estrategias',
            'Indicadores' => base_url().'pe/indicadores',
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

	public function lineas_accion_get()
	{
        $data = $this->pe_model->get_lineas_accion();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron líneas de acción'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function estrategias_get()
	{
        $data = $this->pe_model->get_estrategias();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron estrategias'
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
