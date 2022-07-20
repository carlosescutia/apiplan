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
            'message' => 'Api del PED',
            'Dimensiones' => 'http://plan.test/ped/dimensiones',
            'Lineas estrategicas' => 'http://plan.test/ped/lineas',
            'Objetivos' => 'http://plan.test/ped/objetivos',
            'Estrategias' => 'http://plan.test/ped/estrategias',
            'Proyectos' => 'http://plan.test/ped/proyectos',
            'Retos regionales' => 'http://plan.test/ped/retosreg',
            'Objetivos regionales' => 'http://plan.test/ped/objreg',
            'Estrategias regionales' => 'http://plan.test/ped/estreg',
            'Indicadores' => 'http://plan.test/ped/indicadores'
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
                'message' => 'No se encontraron lineas estrategicas'
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

	public function proyectos_get()
	{
        $data = $this->ped_model->get_proyectos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron proyectos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function retosreg_get()
	{
        $data = $this->ped_model->get_retosreg();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron retosreg'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function objreg_get()
	{
        $data = $this->ped_model->get_objreg();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron objreg'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function estreg_get()
	{
        $data = $this->ped_model->get_estreg();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron estreg'
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

}
