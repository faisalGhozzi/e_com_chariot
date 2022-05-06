<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_adresse' => [[], ['_controller' => 'App\\Controller\\AdresseController::index'], [], [['text', '/adresse']], [], []],
    'deleteAdresse' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::deleteAdresse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/removeAdresse']], [], []],
    'addAdresse' => [[], ['_controller' => 'App\\Controller\\AdresseController::addAdresse'], [], [['text', '/profile/user/addAdresse']], [], []],
    'updateAdresse' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::updateAdresse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateAdresse']], [], []],
    'adresses' => [[], ['_controller' => 'App\\Controller\\AdresseController::listAdressesByuser'], [], [['text', '/listAdresses']], [], []],
    'villes' => [[], ['_controller' => 'App\\Controller\\AdresseController::listvilles'], [], [['text', '/listvilles']], [], []],
    'category_select' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], []],
    'getarticles' => [[], ['_controller' => 'App\\Controller\\ArticleController::afficheArticle'], [], [['text', '/admin/articles']], [], []],
    'deleteArticle' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::deleteArticle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/articles/remove']], [], []],
    'addArticle' => [[], ['_controller' => 'App\\Controller\\ArticleController::addArticle'], [], [['text', '/admin/articles/new']], [], []],
    'updateArticle' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::updateArticle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/articles/update']], [], []],
    'articledetailadmin' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::ArticleAdmin'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/articles']], [], []],
    'articledetail' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::Article'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/articles']], [], []],
    'articles' => [[], ['_controller' => 'App\\Controller\\ArticleController::Articles'], [], [['text', '/articles']], [], []],
    'searcharticles' => [[], ['_controller' => 'App\\Controller\\ArticleController::searchArticle'], [], [['text', '/searchArticle']], [], []],
    'PDFArticles' => [[], ['_controller' => 'App\\Controller\\ArticleController::PDFArticles'], [], [['text', '/PDFArticles']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CardController::index'], [], [['text', '/cart']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CardController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CardController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CardController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/delete']], [], []],
    'cart_delete_all' => [[], ['_controller' => 'App\\Controller\\CardController::deleteAll'], [], [['text', '/cart/delete']], [], []],
    'app_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], []],
    'categorieAdmin' => [[], ['_controller' => 'App\\Controller\\CategorieController::categorieAdmin'], [], [['text', '/admin/categories']], [], []],
    'addCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::addProduit'], [], [['text', '/admin/addCategorie']], [], []],
    'updateCategorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::updateCategorie'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/updateCategorie']], [], []],
    'deleteCategorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::deleteCategorie'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteCategorie']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\CategorieController::categories'], [], [['text', '/categories']], [], []],
    'rechercheCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::rechercheCategorie'], [], [['text', '/rechercheCategorie']], [], []],
    'categorieStatsAdmin' => [[], ['_controller' => 'App\\Controller\\CategorieController::categorieStatsAdmin'], [], [['text', '/admin/stats/categories']], [], []],
    'PDFProduits' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::PDFProduits'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/PDFProduits']], [], []],
    'chat_index' => [[], ['_controller' => 'App\\Controller\\ChatBController::index'], [], [['text', '/chat']], [], []],
    'chat_message' => [[], ['_controller' => 'App\\Controller\\ChatBController::message'], [], [['text', '/chat/message']], [], []],
    'chat_frame' => [[], ['_controller' => 'App\\Controller\\ChatBController::chatframe'], [], [['text', '/chat/frame']], [], []],
    'app_commentaire' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], []],
    'deleteCommentAdmin' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::deleteCommentAdmin'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment/delete']], [], []],
    'deleteComment' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::deleteComment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteComment']], [], []],
    'updateComment' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::updateComment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateComment']], [], []],
    'triComments' => [[], ['_controller' => 'App\\Controller\\CommentaireController::triComment'], [], [['text', '/triComments']], [], []],
    'addReact' => [[], ['_controller' => 'App\\Controller\\CommentaireController::addReact'], [], [['text', '/addReact']], [], []],
    'affComments' => [[], ['_controller' => 'App\\Controller\\CommentaireController::affComment'], [], [['text', '/affComments']], [], []],
    'comm_react' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::reactCommentaire'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/react']], [], []],
    'app_home2' => [[], ['_controller' => 'App\\Controller\\Home2Controller::index'], [], [['text', '/admin']], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'app_livraison' => [[], ['_controller' => 'App\\Controller\\LivraisonController::index'], [], [['text', '/livraison']], [], []],
    'Livraisons' => [[], ['_controller' => 'App\\Controller\\LivraisonController::listLLivraison'], [], [['text', '/admin/livraisons/list']], [], []],
    'affecter' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::affecter'], [], [['text', '/affecter'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/livraisons']], [], []],
    'choisirlivreur' => [['id', 'idlivreur'], ['_controller' => 'App\\Controller\\LivraisonController::choisirlivreur'], [], [['variable', '/', '[^/]++', 'idlivreur'], ['text', '/livreur'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/livraisons']], [], []],
    'livraisonsUsers' => [[], ['_controller' => 'App\\Controller\\LivraisonController::listlivraisonsByuser'], [], [['text', '/profile/user/livraisons']], [], []],
    'filtres' => [['type'], ['_controller' => 'App\\Controller\\LivraisonController::filtrelivraisonsByuser'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/profile/user/livraisons/filtre']], [], []],
    'addLivraison' => [[], ['_controller' => 'App\\Controller\\LivraisonController::addLivraison'], [], [['text', '/addLivraison']], [], []],
    'app_livreur' => [[], ['_controller' => 'App\\Controller\\LivreurController::index'], [], [['text', '/livreur']], [], []],
    'Livreurs' => [[], ['_controller' => 'App\\Controller\\LivreurController::listLivreur'], [], [['text', '/admin/livreurs/list']], [], []],
    'deleteLivreur' => [['id'], ['_controller' => 'App\\Controller\\LivreurController::deleteLivreur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/livreurs/remove']], [], []],
    'addLivreur' => [[], ['_controller' => 'App\\Controller\\LivreurController::addLivreur'], [], [['text', '/admin/livreurs/new']], [], []],
    'updateLivreur' => [['id'], ['_controller' => 'App\\Controller\\LivreurController::updateLivreur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/livreurs/update']], [], []],
    'ajax_search' => [[], ['_controller' => 'App\\Controller\\LivreurController::searchAction'], [], [['text', '/search']], [], []],
    'details' => [['id'], ['_controller' => 'App\\Controller\\LivreurController::details'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/livreurs/details']], [], []],
    'LivreursStat' => [[], ['_controller' => 'App\\Controller\\LivreurController::stat'], [], [['text', '/admin/livreurs/stat']], [], []],
    'AdressesJsonNewAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\AdresseController::newAdresseJson'], [], [['text', '/adresses/json/new']], [], []],
    'AdressesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\AdresseController::adressesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/adresses/json']], [], []],
    'AdressesIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\AdresseController::adressesIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/adresses/json']], [], []],
    'deleteAdressesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\AdresseController::deleteAdressesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/adresses/json/delete']], [], []],
    'ArticlesJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\ArticleController::articlesJsonAction'], [], [['text', '/article/json']], [], []],
    'ArticlesJsonNewAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\ArticleController::newArticleJson'], [], [['text', '/article/json/new']], [], []],
    'ArticlesIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ArticleController::articlesIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article/json']], [], []],
    'deleteArticlesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ArticleController::deleteArticlesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article/json/delete']], [], []],
    'CategoriesJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\CategorieController::categoriesJsonAction'], [], [['text', '/categories/json']], [], []],
    'CategoriesJsonNewAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\CategorieController::newCategorieJson'], [], [['text', '/categories/json/new']], [], []],
    'CategoriesIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\CategorieController::CategoriesIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Categories/json']], [], []],
    'deleteCategoriesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\CategorieController::deleteCategoriesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categories/json/delete']], [], []],
    'CommentairesJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\CommentaireController::commentairesJsonAction'], [], [['text', '/commentaires/json']], [], []],
    'deleteCommentairesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\CommentaireController::deleteCommentairesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaires/json/delete']], [], []],
    'LivraisonsJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\LivraisonController::livraisonsJsonAction'], [], [['text', '/livraisons/json']], [], []],
    'LivraisonsJsonNewAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\LivraisonController::newLivraisonJson'], [], [['text', '/livraisons/json/new']], [], []],
    'LivraisonsIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\LivraisonController::livraisonsIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraisons/json']], [], []],
    'deleteLivraisonsJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\LivraisonController::deleteLivraisonsJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraisons/json/delete']], [], []],
    'LivreursJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\LivreurController::livreursJsonAction'], [], [['text', '/livreurs/json']], [], []],
    'LivreursIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\LivreurController::livreursIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livreurs/json']], [], []],
    'deleteLivreursJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\LivreurController::deleteLivreursJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livreurs/json/delete']], [], []],
    'ProduitsJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\ProduitController::produitsJsonAction'], [], [['text', '/produits/json']], [], []],
    'ProduitsIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ProduitController::produitsIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produits/json']], [], []],
    'deleteProduitsJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ProduitController::deleteProduitsJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produits/json/delete']], [], []],
    'ReservationsJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\ReservationController::reservationsJsonAction'], [], [['text', '/reservations/json']], [], []],
    'ReservationsIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ReservationController::reservationsIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservations/json']], [], []],
    'deleteReservationsJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\ReservationController::deleteReservationsJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservations/json/delete']], [], []],
    'SallesJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\SalleController::sallesJsonAction'], [], [['text', '/salles/json']], [], []],
    'SallesIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\SalleController::sallesIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/salles/json']], [], []],
    'deleteSallesJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\SalleController::deleteSallesJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/salles/json/delete']], [], []],
    'UsersJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\UserController::usersJsonAction'], [], [['text', '/users/json']], [], []],
    'newUserJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\UserController::newUserJsonAction'], [], [['text', '/users/json/new']], [], []],
    'updateUserJsonAction' => [[], ['_controller' => 'App\\Controller\\Mobile\\UserController::updateUserJsonAction'], [], [['text', '/users/json/update']], [], []],
    'UsersIdJson' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\UserController::usersIdJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/users/json']], [], []],
    'deleteUsersJsonAction' => [['id'], ['_controller' => 'App\\Controller\\Mobile\\UserController::deleteUsersJsonAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/users/json/delete']], [], []],
    'ProduitsAdmin' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::listProduit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits']], [], []],
    'deleteProduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::deleteProduit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits/remove']], [], []],
    'addProduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::addProduit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits/add']], [], []],
    'updateProduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::updateProduit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits/update']], [], []],
    'Produits' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::listProduitFront'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produits']], [], []],
    'triProduits' => [[], ['_controller' => 'App\\Controller\\ProduitController::triProduits'], [], [['text', '/triProduits']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], []],
    'deleteReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::deleteReservation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteReservation']], [], []],
    'updateReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::updateReservation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateReservation']], [], []],
    'PDFReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::PDFReservation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/PDFReservation']], [], []],
    'app_salle' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle']], [], []],
    'salles' => [[], ['_controller' => 'App\\Controller\\SalleController::afficheSalle'], [], [['text', '/admin/affichesalles']], [], []],
    'd' => [['id'], ['_controller' => 'App\\Controller\\SalleController::deleteSalle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/removeSalle']], [], []],
    'addSalle' => [[], ['_controller' => 'App\\Controller\\SalleController::addSalle'], [], [['text', '/admin/addSalle']], [], []],
    'updateSalle' => [['id'], ['_controller' => 'App\\Controller\\SalleController::updateSalle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateSalle']], [], []],
    'sallesfront' => [[], ['_controller' => 'App\\Controller\\SalleController::afficheSalleFront'], [], [['text', '/salles']], [], []],
    'SalledetailFront' => [['id'], ['_controller' => 'App\\Controller\\SalleController::SalledetailFront'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/salle']], [], []],
    'SalledetailAdmin' => [['id'], ['_controller' => 'App\\Controller\\SalleController::SalledetailAdmin'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/salle']], [], []],
    'rechercheSalle' => [[], ['_controller' => 'App\\Controller\\SalleController::rechercheSalle'], [], [['text', '/rechercheSalle']], [], []],
    'triSalle' => [[], ['_controller' => 'App\\Controller\\SalleController::triSalle'], [], [['text', '/triSalle']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'loginJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginJson'], [], [['text', '/loginJson']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/users']], [], []],
    'app_user_tri' => [[], ['_controller' => 'App\\Controller\\UserController::tri'], [], [['text', '/admin/users/sorted']], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/users/new']], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/users']], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/users/edit']], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/users/delete']], [], []],
    'app_user_profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile/user']], [], []],
    'forgetPassword' => [[], ['_controller' => 'App\\Controller\\UserController::forgetPassword'], [], [['text', '/forgetPassword/user']], [], []],
    'changePassword' => [['id'], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/changePassword/user']], [], []],
];
