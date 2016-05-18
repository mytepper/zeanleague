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
		$conditions = array();
		if (isset($this->request->query['key'])) {
			$conditions = array(
				'TeamType.name LIKE' => '%' . $this->request->query['key'] . '%'
			);
		}
		$this->paginate = array(
	        'limit' => 5,
			'conditions' => $conditions,
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
				$this->Flash->errors('Can\'t save data.', array('key' => 'team_types'));
			}
		}
	}

/**
 * [edit]
 *
 * @method edit
 * @param int $id teamTypes id
 * @return void
 */
	public function edit($id) {
		$teamType = $this->TeamType->findById($id);
		if ($this->request->is('put')) {
			$saved = $this->TeamType->saveTeamType($this->request->data);
			if ($saved) {
				$this->Flash->success('The data was updated successfully.', array('key' => 'team_types'));
				$this->redirect('/team_types/edit/' . $id);
			} else {
				$this->Flash->errors('The data can\'t update.', array('key' => 'team_types'));
			}
		} else {
			$this->request->data = $teamType;
		}
	}

}
