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


		$article = $this->Articles->newEntity(); //gffdgfd
			if ($this->request->is('post')){

			$this->Articles->patchEntity($article, $this->request->data());
				if($this->Articles->save($article)){

				$this->Flash->success(__('Your Article has been saved!'));
				return $this->redirect(['action' => 'index']);


			}

			$this->Flash->error(__('Cannot save article! Please try again!!'));
		}
	 $this->set('article', $article);

	}


	public function edit($slug){

		$article = $this->Articles->findBySlug($slug)->firstOrFail();
		if($this->request->is(['post', 'put'])){

			$this->Articles->patchEntity($article, $this->request->data());

			if($this->Articles->save($article)){

				$this->Flash->success(__('Your article updated succesfully!'));
				return $this->redirect(['action' => 'index']);

			}$this->Flash->error(__('Cannot update article!!!'));

		}$this->set('article', $article);

	}


	public function delete($slug){

		//$this->request->allowMethod(['post', 'delete']);

		$article = $this->Articles->findBySlug($slug)->firstOrFail();

		if($this->Articles->delete($article)){

			$this->Flash->success(__('The {0} Article has been deleted.', $article->title));
				return $this->redirect(['action' => 'index']);



		}



	}






}



?>