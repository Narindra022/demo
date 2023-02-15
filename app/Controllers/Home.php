<?php

namespace App\Controllers;

use App\Models\PromotionModel;
use App\Models\UtilisateurModel;
use CodeIgniter\Database\MySQLi\Result;
use PDO;

class Home extends BaseController
{
	public function index()
	{
		/*
		$model_promotion = new PromotionModel();
		
		// C R U D
		// Ajout -> insert
		$donnees = ['intitule' => "BAC 1"];
		$model_promotion->insert($donnees);

		// Modification -> update
		$donnees = ['intitule' => 'G1'];
		$model_promotion->update(2, $donnees);

		// Suppression -> delete
		$model_promotion->delete(1);

		// Lecture -> find, findAll
		$promotions = $model_promotion->findAll();
		var_dump($promotions);
		*/

		return view("accueil");
	}

	public function accueil()
	{
		$model_promotion = new PromotionModel();
		$donnees['total_promotions'] = count($model_promotion->findAll());

		return view("accueil", $donnees);
	}

	public function etudiant()
	{
		return view("etudiant");
	}
	public function promotion()
	{

		$model_promotion = new PromotionModel();
		$donnees['promotions'] = $model_promotion->findAll();

		return view("promotion", $donnees);
	}


	public function ajout_promotion()
	{
		$intitule = $this->request->getVar('nom');
		$session = session();

		$model_promotion = new PromotionModel();
		$donnees = ['intitule' => $intitule];
		if ($id = $model_promotion->insert($donnees)) {

			$session->setFlashdata('success', 'Ok');
			return redirect()->to(site_url('Home/promotion'));
		} else {
			$session->setFlashdata('error', 'No');
			return redirect()->to(site_url('Home/promotion'));
		}
	}

	public function modifier_promotion($id = null)
	{

		$model_promotion = new PromotionModel();
		if ($id != null) {
			$donnees['la_promotion'] =  $model_promotion->where(['id' => $id])->first();
			$donnees['promotions'] = $model_promotion->findAll();
			return view("promotion", $donnees);
		}
	}

	public function enregistrer_modification_promotion($id = null)
	{
		if ($id != null) {
			$intitule = $this->request->getVar('nom');
			$session = session();

			$model_promotion = new PromotionModel();
			$donnees = ['intitule' => $intitule];
			if ($model_promotion->update($id, $donnees)) {
				$session->setFlashdata('success_update', 'Ok');
				return redirect()->to(site_url('Home/promotion'));
			} else {
				$session->setFlashdata('error_update', 'No');
				return redirect()->to(site_url('Home/promotion'));
			}
		}
	}

	public function supprimer_promotion($id = null)
	{
		$session = session();

		if ($id) {
			$model_promotion = new PromotionModel();
			if($model_promotion->delete($id)){
				$session->setFlashdata('success_delete','Ok');
				return redirect()->to(site_url('Home/promotion'));
			}
			else{
				$session->setFlashdata('error_delete','No');
				return redirect()->to(site_url(('Home/promotion')));
			}
		}
		else{

		}
	}
}
