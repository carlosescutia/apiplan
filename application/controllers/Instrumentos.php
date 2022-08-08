<?php
use chriskacerguis\RestServer\RestController;

class Instrumentos extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('instrumentos_model');
	}

	public function index_get()
	{

        $data = $this->instrumentos_model->get_instrumentos();

        if ($data) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No se encontraron instrumentos de planeación'
            ], RestController::HTTP_NOT_FOUND );
        }
	}

}
