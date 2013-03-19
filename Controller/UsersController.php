<?php
App::uses('AppController', 'Controller', 'Security', 'Utility');
 
 /*
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
 
	//public $components = array('Auth');
	public $components = array(
	    'Auth' => array(
	        'authenticate' => array(
	            'Form' => array(
	                'fields' => array('username' => 'email', 'password' => 'password')
	            )
	        )
    	)
	);


	public function beforeFilter() {
	    $this->Auth->allow('index', 'join', 'logout', 'resetpass', 'forgotpass');
	}


	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}


	 public function join() {
	    if ($this->request->is('post')) {

	    	
	    	$this->User->create();

			if ($this->User->save($this->request->data)) {
	    		$this->Session->setFlash(__('Welcome pledgebay'));

	    			$this->redirect(array('action' => 'home'));
	            } else {
	            	$this->Session->setFlash(__('Please fix the problems below and try again'));
	            }
		}
	  }

	public function login() {
	    if ($this->request->is('post')) {
	    	
	        if ($this->Auth->login()) {
	            echo "worked";
	        } else {
	            $this->Session->setFlash(__('Username or password is incorrect'));
	        }
		
	    }
	
	//echo debug($this);
	}

	public function logout() {
		if($this->Auth->logout()) {
			echo "logged out";
		return true;	
		};
		
	}

	public function resetpass() {
		if ($this->Auth->login()) {
			echo "logged in - logging you out";
		}
		
		if ($this->request->is('post')) {
				
			$this->User->id = $this->User->find('first', array('conditions' => array('email' => $this->request->data['User']['email']))); //find the user based on email
			
			//debug($this->User->id);
			$key = md5(date('m-d').'7ff7dsad34');
			$s1 = $this->User->saveField('hashdate', date('Y-m-d H:i:s')); 	//disable the account
			$s2 = $this->User->saveField('resetkey', $key);
		
			//email the user	
			if ($s1 && $s2) {
				$emailcontent = "Please reset your password using ".$key;
				
			}
			
		}
	}  
	
	public function forgotpass($hash = null) {
		$hash = mysql_escape_string($hash);
		if ($hash == null) {
			$this->Session->setFlash(__('You need a hash'));
			$this->set('nohash', 1);			
		} else {
			$user = $this->User->find('first', array('conditions' => array('resetkey' => $hash)));
			if($user) {
				$this->set('nohash', 0);	
				
				if ($this->request->is('post')) { //if data is submitted
					$this->User->id = $user['User']['id'];
					
					
				
						if($this->data['User']['password'] == $this->data['User']['password_confirm']) {
							$q = $this->User->saveField('password', $this->data['User']['password']);
								if($q) {
									$this->Session->setFlash(__('your password has been reset'));
								}
						}
					
				}	
				
			} else {
				$this->Session->setFlash(__('bad hash'));
				$this->set('nohash', 1);	
			}
					
		}
									
		
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The employment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment could not be saved. Please, try again.'));
			}
		}
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}






/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
?>