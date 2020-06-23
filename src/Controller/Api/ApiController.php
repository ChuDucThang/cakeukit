<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Http\Response;

/**
 * Api/Api Controller
 *
 * @method \App\Model\Entity\Api/Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{
    public $inputData;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    protected function returnResponse($status_code = "200", $data, $message = "Success", $count = 0, $page = 0):Response
    {
        return $this->response->withType("application/json")->withStringBody(json_encode(array(
            'status_code' => $status_code,
            'data' => $data,
            'message' => $message,
            'count' => $count,
            'page' => $page
        )));
    }
}
