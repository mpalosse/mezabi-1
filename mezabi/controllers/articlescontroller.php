<?php
namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;

class ArticlesController {

    public function index($pdo) {
        try {
            $codeCategorie = HttpHelper::getParam("code_categorie");
            $designationCategorie = HttpHelper::getParam("categorie");
            $sql = "select id_article, code_article, designation 
                from articles
                where categorie = ?
                order by code_article";
            $searchStmt = $pdo->prepare($sql);
            $searchStmt->execute([$codeCategorie]);
            $view = new View("/views/all_articles");
            $view->setVar('searchStmt',$searchStmt);
            $view->setVar('categorie', $designationCategorie);
            return $view;
        } catch(PDOException $exception) {
            throw new PDOException($exception->getMessage(), (int)$exception->getCode());
        }
    }

}


