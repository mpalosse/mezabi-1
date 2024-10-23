<?php
namespace controllers;

use yasmf\View;

class HomeController {

    public function index($pdo) {
        try {
            $sql = "select code_categorie, designation 
                from a_categories
                order by code_categorie";
            $searchStmt = $pdo->prepare($sql);
            $searchStmt->execute();
            $view = new View("/views/all_categories");
            $view->setVar('searchStmt',$searchStmt);
            return $view;
        } catch(PDOException $exception) {
            throw new PDOException($exception->getMessage(), (int)$exception->getCode());
        }
    }

}


