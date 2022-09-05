<?php
use chriskacerguis\RestServer\RestController;

class Apg extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('apg_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'APG',
            'Ejes de gobierno' => base_url().'apg/ejes',
            'Líneas estratégicas' => base_url().'apg/lineas',
            'Objetivos' => base_url().'apg/objetivos',
            'Estrategias' => base_url().'apg/estrategias',
            'Lineas de acción' => base_url().'apg/lineas_accion',
            'Indicadores' => base_url().'apg/indicadores',
            'Metas' => base_url().'apg/metas',
            'FTIs' => base_url().'apg/ftis',
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function ejes_get()
	{
        $data = $this->apg_model->get_ejes();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron ejes'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function lineas_get()
	{
        $data = $this->apg_model->get_lineas();

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
        $data = $this->apg_model->get_objetivos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron objetivos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function estrategias_get()
	{
        $data = $this->apg_model->get_estrategias();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron estrategias'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function lineas_accion_get()
	{
        $data = $this->apg_model->get_lineas_accion();

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
        $data = $this->apg_model->get_indicadores();

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
        $data = $this->apg_model->get_metas();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron metas'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function ftis_get()
	{
        $data = $this->apg_model->get_ftis();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron FTIs'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
