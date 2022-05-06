<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/adresse' => [[['_route' => 'app_adresse', '_controller' => 'App\\Controller\\AdresseController::index'], null, null, null, false, false, null]],
        '/profile/user/addAdresse' => [[['_route' => 'addAdresse', '_controller' => 'App\\Controller\\AdresseController::addAdresse'], null, null, null, false, false, null]],
        '/listAdresses' => [[['_route' => 'adresses', '_controller' => 'App\\Controller\\AdresseController::listAdressesByuser'], null, null, null, false, false, null]],
        '/listvilles' => [[['_route' => 'villes', '_controller' => 'App\\Controller\\AdresseController::listvilles'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'category_select', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/admin/articles' => [[['_route' => 'getarticles', '_controller' => 'App\\Controller\\ArticleController::afficheArticle'], null, null, null, false, false, null]],
        '/admin/articles/new' => [[['_route' => 'addArticle', '_controller' => 'App\\Controller\\ArticleController::addArticle'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticleController::Articles'], null, null, null, false, false, null]],
        '/searchArticle' => [[['_route' => 'searcharticles', '_controller' => 'App\\Controller\\ArticleController::searchArticle'], null, null, null, false, false, null]],
        '/PDFArticles' => [[['_route' => 'PDFArticles', '_controller' => 'App\\Controller\\ArticleController::PDFArticles'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CardController::index'], null, null, null, false, false, null]],
        '/cart/delete' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CardController::deleteAll'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'categorieAdmin', '_controller' => 'App\\Controller\\CategorieController::categorieAdmin'], null, null, null, false, false, null]],
        '/admin/addCategorie' => [[['_route' => 'addCategorie', '_controller' => 'App\\Controller\\CategorieController::addProduit'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategorieController::categories'], null, null, null, false, false, null]],
        '/rechercheCategorie' => [[['_route' => 'rechercheCategorie', '_controller' => 'App\\Controller\\CategorieController::rechercheCategorie'], null, null, null, false, false, null]],
        '/admin/stats/categories' => [[['_route' => 'categorieStatsAdmin', '_controller' => 'App\\Controller\\CategorieController::categorieStatsAdmin'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'chat_index', '_controller' => 'App\\Controller\\ChatBController::index'], null, null, null, false, false, null]],
        '/chat/message' => [[['_route' => 'chat_message', '_controller' => 'App\\Controller\\ChatBController::message'], null, null, null, false, false, null]],
        '/chat/frame' => [[['_route' => 'chat_frame', '_controller' => 'App\\Controller\\ChatBController::chatframe'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire', '_controller' => 'App\\Controller\\CommentaireController::index'], null, null, null, false, false, null]],
        '/triComments' => [[['_route' => 'triComments', '_controller' => 'App\\Controller\\CommentaireController::triComment'], null, null, null, false, false, null]],
        '/addReact' => [[['_route' => 'addReact', '_controller' => 'App\\Controller\\CommentaireController::addReact'], null, null, null, false, false, null]],
        '/affComments' => [[['_route' => 'affComments', '_controller' => 'App\\Controller\\CommentaireController::affComment'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_home2', '_controller' => 'App\\Controller\\Home2Controller::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison', '_controller' => 'App\\Controller\\LivraisonController::index'], null, null, null, false, false, null]],
        '/admin/livraisons/list' => [[['_route' => 'Livraisons', '_controller' => 'App\\Controller\\LivraisonController::listLLivraison'], null, null, null, false, false, null]],
        '/profile/user/livraisons' => [[['_route' => 'livraisonsUsers', '_controller' => 'App\\Controller\\LivraisonController::listlivraisonsByuser'], null, null, null, false, false, null]],
        '/addLivraison' => [[['_route' => 'addLivraison', '_controller' => 'App\\Controller\\LivraisonController::addLivraison'], null, null, null, false, false, null]],
        '/livreur' => [[['_route' => 'app_livreur', '_controller' => 'App\\Controller\\LivreurController::index'], null, null, null, false, false, null]],
        '/admin/livreurs/list' => [[['_route' => 'Livreurs', '_controller' => 'App\\Controller\\LivreurController::listLivreur'], null, null, null, false, false, null]],
        '/admin/livreurs/new' => [[['_route' => 'addLivreur', '_controller' => 'App\\Controller\\LivreurController::addLivreur'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\LivreurController::searchAction'], null, null, null, false, false, null]],
        '/admin/livreurs/stat' => [[['_route' => 'LivreursStat', '_controller' => 'App\\Controller\\LivreurController::stat'], null, null, null, false, false, null]],
        '/adresses/json/new' => [[['_route' => 'AdressesJsonNewAction', '_controller' => 'App\\Controller\\Mobile\\AdresseController::newAdresseJson'], null, null, null, false, false, null]],
        '/article/json' => [[['_route' => 'ArticlesJsonAction', '_controller' => 'App\\Controller\\Mobile\\ArticleController::articlesJsonAction'], null, null, null, false, false, null]],
        '/article/json/new' => [[['_route' => 'ArticlesJsonNewAction', '_controller' => 'App\\Controller\\Mobile\\ArticleController::newArticleJson'], null, null, null, false, false, null]],
        '/categories/json' => [[['_route' => 'CategoriesJsonAction', '_controller' => 'App\\Controller\\Mobile\\CategorieController::categoriesJsonAction'], null, null, null, false, false, null]],
        '/categories/json/new' => [[['_route' => 'CategoriesJsonNewAction', '_controller' => 'App\\Controller\\Mobile\\CategorieController::newCategorieJson'], null, null, null, false, false, null]],
        '/commentaires/json' => [[['_route' => 'CommentairesJsonAction', '_controller' => 'App\\Controller\\Mobile\\CommentaireController::commentairesJsonAction'], null, null, null, false, false, null]],
        '/livraisons/json' => [[['_route' => 'LivraisonsJsonAction', '_controller' => 'App\\Controller\\Mobile\\LivraisonController::livraisonsJsonAction'], null, null, null, false, false, null]],
        '/livraisons/json/new' => [[['_route' => 'LivraisonsJsonNewAction', '_controller' => 'App\\Controller\\Mobile\\LivraisonController::newLivraisonJson'], null, null, null, false, false, null]],
        '/livreurs/json' => [[['_route' => 'LivreursJsonAction', '_controller' => 'App\\Controller\\Mobile\\LivreurController::livreursJsonAction'], null, null, null, false, false, null]],
        '/produits/json' => [[['_route' => 'ProduitsJsonAction', '_controller' => 'App\\Controller\\Mobile\\ProduitController::produitsJsonAction'], null, null, null, false, false, null]],
        '/reservations/json' => [[['_route' => 'ReservationsJsonAction', '_controller' => 'App\\Controller\\Mobile\\ReservationController::reservationsJsonAction'], null, null, null, false, false, null]],
        '/salles/json' => [[['_route' => 'SallesJsonAction', '_controller' => 'App\\Controller\\Mobile\\SalleController::sallesJsonAction'], null, null, null, false, false, null]],
        '/users/json' => [[['_route' => 'UsersJsonAction', '_controller' => 'App\\Controller\\Mobile\\UserController::usersJsonAction'], null, null, null, false, false, null]],
        '/users/json/new' => [[['_route' => 'newUserJsonAction', '_controller' => 'App\\Controller\\Mobile\\UserController::newUserJsonAction'], null, null, null, false, false, null]],
        '/users/json/update' => [[['_route' => 'updateUserJsonAction', '_controller' => 'App\\Controller\\Mobile\\UserController::updateUserJsonAction'], null, null, null, false, false, null]],
        '/triProduits' => [[['_route' => 'triProduits', '_controller' => 'App\\Controller\\ProduitController::triProduits'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle', '_controller' => 'App\\Controller\\SalleController::index'], null, null, null, false, false, null]],
        '/admin/affichesalles' => [[['_route' => 'salles', '_controller' => 'App\\Controller\\SalleController::afficheSalle'], null, null, null, false, false, null]],
        '/admin/addSalle' => [[['_route' => 'addSalle', '_controller' => 'App\\Controller\\SalleController::addSalle'], null, null, null, false, false, null]],
        '/salles' => [[['_route' => 'sallesfront', '_controller' => 'App\\Controller\\SalleController::afficheSalleFront'], null, null, null, false, false, null]],
        '/rechercheSalle' => [[['_route' => 'rechercheSalle', '_controller' => 'App\\Controller\\SalleController::rechercheSalle'], null, null, null, false, false, null]],
        '/triSalle' => [[['_route' => 'triSalle', '_controller' => 'App\\Controller\\SalleController::triSalle'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginJson' => [[['_route' => 'loginJson', '_controller' => 'App\\Controller\\SecurityController::loginJson'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/sorted' => [[['_route' => 'app_user_tri', '_controller' => 'App\\Controller\\UserController::tri'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/user' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forgetPassword/user' => [[['_route' => 'forgetPassword', '_controller' => 'App\\Controller\\UserController::forgetPassword'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/re(?'
                    .'|move(?'
                        .'|Adresse/([^/]++)(*:198)'
                        .'|Salle/([^/]++)(*:220)'
                    .')'
                    .'|act/([^/]++)(*:241)'
                    .'|servations/json/(?'
                        .'|([^/]++)(*:276)'
                        .'|delete/([^/]++)(*:299)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdate(?'
                        .'|Adresse/([^/]++)(*:338)'
                        .'|Comment/([^/]++)(*:362)'
                        .'|Reservation/([^/]++)(*:390)'
                        .'|Salle/([^/]++)(*:412)'
                    .')'
                    .'|sers/json/(?'
                        .'|([^/]++)(*:442)'
                        .'|delete/([^/]++)(*:465)'
                    .')'
                .')'
                .'|/a(?'
                    .'|d(?'
                        .'|min/(?'
                            .'|articles/(?'
                                .'|remove/([^/]++)(*:518)'
                                .'|update/([^/]++)(*:541)'
                                .'|([^/]++)(*:557)'
                            .')'
                            .'|u(?'
                                .'|pdateCategorie/([^/]++)(*:593)'
                                .'|sers/(?'
                                    .'|([^/]++)(*:617)'
                                    .'|edit/([^/]++)(*:638)'
                                    .'|delete/([^/]++)(*:661)'
                                .')'
                            .')'
                            .'|comment/delete/([^/]++)(*:694)'
                            .'|livr(?'
                                .'|aisons/([^/]++)/(?'
                                    .'|affecter(*:736)'
                                    .'|livreur/([^/]++)(*:760)'
                                .')'
                                .'|eurs/(?'
                                    .'|remove/([^/]++)(*:792)'
                                    .'|update/([^/]++)(*:815)'
                                    .'|details/([^/]++)(*:839)'
                                .')'
                            .')'
                            .'|produits/(?'
                                .'|([^/]++)(*:869)'
                                .'|remove/([^/]++)(*:892)'
                                .'|add/([^/]++)(*:912)'
                                .'|update/([^/]++)(*:935)'
                            .')'
                            .'|salle/([^/]++)(*:958)'
                        .')'
                        .'|resses/json/(?'
                            .'|([^/]++)(?'
                                .'|(*:993)'
                            .')'
                            .'|delete/([^/]++)(*:1017)'
                        .')'
                    .')'
                    .'|rticle(?'
                        .'|s/([^/]++)(*:1047)'
                        .'|/json/(?'
                            .'|([^/]++)(*:1073)'
                            .'|delete/([^/]++)(*:1097)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:1136)'
                            .'|remove/([^/]++)(*:1160)'
                            .'|delete/([^/]++)(*:1184)'
                        .')'
                        .'|tegories/json/delete/([^/]++)(*:1223)'
                    .')'
                    .'|ommentaires/json/delete/([^/]++)(*:1265)'
                    .'|hangePassword/user/([^/]++)(*:1301)'
                .')'
                .'|/delete(?'
                    .'|C(?'
                        .'|ategorie/([^/]++)(*:1342)'
                        .'|omment/([^/]++)(*:1366)'
                    .')'
                    .'|Reservation/([^/]++)(*:1396)'
                .')'
                .'|/PDF(?'
                    .'|Produits/([^/]++)(*:1430)'
                    .'|Reservation/([^/]++)(*:1459)'
                .')'
                .'|/pro(?'
                    .'|file/user/livraisons/filtre/([^/]++)(*:1512)'
                    .'|duits/(?'
                        .'|json/(?'
                            .'|([^/]++)(*:1546)'
                            .'|delete/([^/]++)(*:1570)'
                        .')'
                        .'|([^/]++)(*:1588)'
                    .')'
                .')'
                .'|/Categories/json/([^/]++)(*:1624)'
                .'|/livr(?'
                    .'|aisons/json/(?'
                        .'|([^/]++)(*:1664)'
                        .'|delete/([^/]++)(*:1688)'
                    .')'
                    .'|eurs/json/(?'
                        .'|([^/]++)(*:1719)'
                        .'|delete/([^/]++)(*:1743)'
                    .')'
                .')'
                .'|/salle(?'
                    .'|s/json/(?'
                        .'|([^/]++)(*:1781)'
                        .'|delete/([^/]++)(*:1805)'
                    .')'
                    .'|/([^/]++)(*:1824)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'deleteAdresse', '_controller' => 'App\\Controller\\AdresseController::deleteAdresse'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'd', '_controller' => 'App\\Controller\\SalleController::deleteSalle'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'comm_react', '_controller' => 'App\\Controller\\CommentaireController::reactCommentaire'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'ReservationsIdJson', '_controller' => 'App\\Controller\\Mobile\\ReservationController::reservationsIdJson'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'deleteReservationsJsonAction', '_controller' => 'App\\Controller\\Mobile\\ReservationController::deleteReservationsJsonAction'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'updateAdresse', '_controller' => 'App\\Controller\\AdresseController::updateAdresse'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'updateComment', '_controller' => 'App\\Controller\\CommentaireController::updateComment'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'updateReservation', '_controller' => 'App\\Controller\\ReservationController::updateReservation'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'updateSalle', '_controller' => 'App\\Controller\\SalleController::updateSalle'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'UsersIdJson', '_controller' => 'App\\Controller\\Mobile\\UserController::usersIdJson'], ['id'], null, null, false, true, null]],
        465 => [[['_route' => 'deleteUsersJsonAction', '_controller' => 'App\\Controller\\Mobile\\UserController::deleteUsersJsonAction'], ['id'], null, null, false, true, null]],
        518 => [[['_route' => 'deleteArticle', '_controller' => 'App\\Controller\\ArticleController::deleteArticle'], ['id'], null, null, false, true, null]],
        541 => [[['_route' => 'updateArticle', '_controller' => 'App\\Controller\\ArticleController::updateArticle'], ['id'], null, null, false, true, null]],
        557 => [[['_route' => 'articledetailadmin', '_controller' => 'App\\Controller\\ArticleController::ArticleAdmin'], ['id'], null, null, false, true, null]],
        593 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\CategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        617 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        638 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        661 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        694 => [[['_route' => 'deleteCommentAdmin', '_controller' => 'App\\Controller\\CommentaireController::deleteCommentAdmin'], ['id'], null, null, false, true, null]],
        736 => [[['_route' => 'affecter', '_controller' => 'App\\Controller\\LivraisonController::affecter'], ['id'], null, null, false, false, null]],
        760 => [[['_route' => 'choisirlivreur', '_controller' => 'App\\Controller\\LivraisonController::choisirlivreur'], ['id', 'idlivreur'], null, null, false, true, null]],
        792 => [[['_route' => 'deleteLivreur', '_controller' => 'App\\Controller\\LivreurController::deleteLivreur'], ['id'], null, null, false, true, null]],
        815 => [[['_route' => 'updateLivreur', '_controller' => 'App\\Controller\\LivreurController::updateLivreur'], ['id'], null, null, false, true, null]],
        839 => [[['_route' => 'details', '_controller' => 'App\\Controller\\LivreurController::details'], ['id'], null, null, false, true, null]],
        869 => [[['_route' => 'ProduitsAdmin', '_controller' => 'App\\Controller\\ProduitController::listProduit'], ['id'], null, null, false, true, null]],
        892 => [[['_route' => 'deleteProduit', '_controller' => 'App\\Controller\\ProduitController::deleteProduit'], ['id'], null, null, false, true, null]],
        912 => [[['_route' => 'addProduit', '_controller' => 'App\\Controller\\ProduitController::addProduit'], ['id'], null, null, false, true, null]],
        935 => [[['_route' => 'updateProduit', '_controller' => 'App\\Controller\\ProduitController::updateProduit'], ['id'], null, null, false, true, null]],
        958 => [[['_route' => 'SalledetailAdmin', '_controller' => 'App\\Controller\\SalleController::SalledetailAdmin'], ['id'], null, null, false, true, null]],
        993 => [
            [['_route' => 'AdressesJsonAction', '_controller' => 'App\\Controller\\Mobile\\AdresseController::adressesJsonAction'], ['id'], null, null, false, true, null],
            [['_route' => 'AdressesIdJson', '_controller' => 'App\\Controller\\Mobile\\AdresseController::adressesIdJson'], ['id'], null, null, false, true, null],
        ],
        1017 => [[['_route' => 'deleteAdressesJsonAction', '_controller' => 'App\\Controller\\Mobile\\AdresseController::deleteAdressesJsonAction'], ['id'], null, null, false, true, null]],
        1047 => [[['_route' => 'articledetail', '_controller' => 'App\\Controller\\ArticleController::Article'], ['id'], null, null, false, true, null]],
        1073 => [[['_route' => 'ArticlesIdJson', '_controller' => 'App\\Controller\\Mobile\\ArticleController::articlesIdJson'], ['id'], null, null, false, true, null]],
        1097 => [[['_route' => 'deleteArticlesJsonAction', '_controller' => 'App\\Controller\\Mobile\\ArticleController::deleteArticlesJsonAction'], ['id'], null, null, false, true, null]],
        1136 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CardController::add'], ['id'], null, null, false, true, null]],
        1160 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CardController::remove'], ['id'], null, null, false, true, null]],
        1184 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CardController::delete'], ['id'], null, null, false, true, null]],
        1223 => [[['_route' => 'deleteCategoriesJsonAction', '_controller' => 'App\\Controller\\Mobile\\CategorieController::deleteCategoriesJsonAction'], ['id'], null, null, false, true, null]],
        1265 => [[['_route' => 'deleteCommentairesJsonAction', '_controller' => 'App\\Controller\\Mobile\\CommentaireController::deleteCommentairesJsonAction'], ['id'], null, null, false, true, null]],
        1301 => [[['_route' => 'changePassword', '_controller' => 'App\\Controller\\UserController::changePassword'], ['id'], ['GET' => 0], null, false, true, null]],
        1342 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieController::deleteCategorie'], ['id'], null, null, false, true, null]],
        1366 => [[['_route' => 'deleteComment', '_controller' => 'App\\Controller\\CommentaireController::deleteComment'], ['id'], null, null, false, true, null]],
        1396 => [[['_route' => 'deleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteReservation'], ['id'], null, null, false, true, null]],
        1430 => [[['_route' => 'PDFProduits', '_controller' => 'App\\Controller\\CategorieController::PDFProduits'], ['id'], null, null, false, true, null]],
        1459 => [[['_route' => 'PDFReservation', '_controller' => 'App\\Controller\\ReservationController::PDFReservation'], ['id'], null, null, false, true, null]],
        1512 => [[['_route' => 'filtres', '_controller' => 'App\\Controller\\LivraisonController::filtrelivraisonsByuser'], ['type'], null, null, false, true, null]],
        1546 => [[['_route' => 'ProduitsIdJson', '_controller' => 'App\\Controller\\Mobile\\ProduitController::produitsIdJson'], ['id'], null, null, false, true, null]],
        1570 => [[['_route' => 'deleteProduitsJsonAction', '_controller' => 'App\\Controller\\Mobile\\ProduitController::deleteProduitsJsonAction'], ['id'], null, null, false, true, null]],
        1588 => [[['_route' => 'Produits', '_controller' => 'App\\Controller\\ProduitController::listProduitFront'], ['id'], null, null, false, true, null]],
        1624 => [[['_route' => 'CategoriesIdJson', '_controller' => 'App\\Controller\\Mobile\\CategorieController::CategoriesIdJson'], ['id'], null, null, false, true, null]],
        1664 => [[['_route' => 'LivraisonsIdJson', '_controller' => 'App\\Controller\\Mobile\\LivraisonController::livraisonsIdJson'], ['id'], null, null, false, true, null]],
        1688 => [[['_route' => 'deleteLivraisonsJsonAction', '_controller' => 'App\\Controller\\Mobile\\LivraisonController::deleteLivraisonsJsonAction'], ['id'], null, null, false, true, null]],
        1719 => [[['_route' => 'LivreursIdJson', '_controller' => 'App\\Controller\\Mobile\\LivreurController::livreursIdJson'], ['id'], null, null, false, true, null]],
        1743 => [[['_route' => 'deleteLivreursJsonAction', '_controller' => 'App\\Controller\\Mobile\\LivreurController::deleteLivreursJsonAction'], ['id'], null, null, false, true, null]],
        1781 => [[['_route' => 'SallesIdJson', '_controller' => 'App\\Controller\\Mobile\\SalleController::sallesIdJson'], ['id'], null, null, false, true, null]],
        1805 => [[['_route' => 'deleteSallesJsonAction', '_controller' => 'App\\Controller\\Mobile\\SalleController::deleteSallesJsonAction'], ['id'], null, null, false, true, null]],
        1824 => [
            [['_route' => 'SalledetailFront', '_controller' => 'App\\Controller\\SalleController::SalledetailFront'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
