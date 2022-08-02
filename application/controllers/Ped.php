<?php
use chriskacerguis\RestServer\RestController;

class Ped extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ped_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'PED 2040',
            'Dimensiones' => base_url().'ped/dimensiones?format=html',
            'Lineas estrategicas' => base_url().'ped/lineas?format=html',
            'Objetivos' => base_url().'ped/objetivos?format=html',
            'Estrategias' => base_url().'ped/estrategias?format=html',
            'Indicadores' => base_url().'ped/indicadores?format=html',
            'Metas' => base_url().'ped/metas?format=html'
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function dimensiones_get()
	{
        $data = $this->ped_model->get_dimensiones();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron dimensiones'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function lineas_get()
	{
        $data = $this->ped_model->get_lineas();

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
        $data = $this->ped_model->get_objetivos();

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
        $data = $this->ped_model->get_estrategias();

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
        $data = $this->ped_model->get_indicadores();

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
        $data = $this->ped_model->get_metas();

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
