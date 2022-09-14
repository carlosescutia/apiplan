<?php
use chriskacerguis\RestServer\RestController;

class Aps extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('aps_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'APS',
            'Programas' => base_url().'aps/programas',
            'Líneas estratégicas' => base_url().'aps/lineas',
            'Objetivos' => base_url().'aps/objetivos',
            'Líneas de acción' => base_url().'aps/lineas_accion',
            'Indicadores' => base_url().'aps/indicadores',
            'Metas' => base_url().'aps/metas',
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function programas_get()
	{
        $data = $this->aps_model->get_programas();

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
        $data = $this->aps_model->get_lineas();

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
        $data = $this->aps_model->get_objetivos();

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
        $data = $this->aps_model->get_lineas_accion();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron líneas de acción'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function indicadores_get()
	{
        $data = $this->aps_model->get_indicadores();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron indicadores'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function metas_get()
	{
        $data = $this->aps_model->get_metas();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron metas'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
