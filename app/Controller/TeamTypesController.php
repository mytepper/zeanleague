<?php
App::uses('AppController', 'Controller');
/**
 * TeamTypes Controller
 */
class TeamTypesController extends AppController {

	public $components = array('RequestHandler', 'Flash', 'Paginator');


/**
 * [index view data table]
 * @method index
 *
 * @return void
 */
	public function index() {
		$this->paginate = array(
	        'limit' => 5,
	        'order' => array('id' => 'desc')
	    );
		$teamTypes = $this->paginate('TeamType');
    	$this->set(compact('teamTypes'));
	}

/**
 * [add]
 * @method add
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$saved = $this->TeamType->saveTeamType($this->request->data);
			if ($saved) {
				$this->Flash->success('The data was saved successfully.', array('key' => 'team_types'));
				$this->redirect('/team_types/add');
			} else {
				$this->Flash->errors('ไม่สามารถเพิ่มข้อมูลได้.', array('key' => 'team_types'));
			}
		}
	}

}
