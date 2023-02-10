<?php

namespace App\Controllers;

use App\Models\PromotionModel;

class Home extends BaseController
{
    public function index()
    {
        
        $model_promotion = new PromotionModel();
    
        // insert
            // $donnees = ['intitule' => "Bac 1"];
            // $model_promotion -> insert($donnees);
        //find/findAll
            // $promotion = $model_promotion->findAll();
            // var_dump($promotion);
        //update
            // $donnees = ['intitule'=>'G1'];
            // $model_promotion->update(4,$donnees);
        //delete
        //         $model_promotion->delete(4);
        // //find/findAll
        //     $promotion = $model_promotion->findAll();
        //     var_dump($promotion);


        return view('test_view');
    }
}
