<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController{

	 public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }



	public function index(){

		$this->loadComponent('Paginator');
		$articles = $this->Paginator->paginate($this->Articles->find('all'));
		$this->set(compact('articles'));
	}


	public function view($slug = null){

		$article = $this->Articles->findBySlug($slug)->firstOrFail();

		$this->set(compact('article'));
	}

	public function add(){


		
	}

}

?>