<?php
use chriskacerguis\RestServer\RestController;

class Ods extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ods_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'ODS',
            'Objetivos' => base_url().'ods/objetivos?format=html',
            'Metas' => base_url().'ods/metas?format=html'
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function objetivos_get()
	{
        $data = $this->ods_model->get_objetivos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron objetivos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function metas_get()
	{
        $data = $this->ods_model->get_metas();

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
