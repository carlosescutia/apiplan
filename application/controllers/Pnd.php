<?php
use chriskacerguis\RestServer\RestController;

class Pnd extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pnd_model');
	}

	public function index_get($id = 0)
	{

        $data = [
            'Instrumento' => 'PND',
            'Ejes' => base_url().'pnd/ejes?format=html',
            'Objetivos' => base_url().'pnd/objetivos?format=html'
        ];
        $this->response($data, RestController::HTTP_OK);
	}

	public function ejes_get()
	{
        $data = $this->pnd_model->get_ejes();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron ejes'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

	public function objetivos_get()
	{
        $data = $this->pnd_model->get_objetivos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron objetivos'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
