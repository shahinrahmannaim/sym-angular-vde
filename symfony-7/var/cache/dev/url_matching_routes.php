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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/departments' => [[['_route' => 'api_department_index', '_controller' => 'App\\Controller\\API\\ApiDepartmentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/departments/create' => [[['_route' => 'api_department_create', '_controller' => 'App\\Controller\\API\\ApiDepartmentController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\API\\ApiLoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/recette' => [[['_route' => 'app_api_recipesapi_index', '_controller' => 'App\\Controller\\API\\RecipesApiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/recette/create' => [[['_route' => 'app_api_recipesapi_create', '_controller' => 'App\\Controller\\API\\RecipesApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/register/test' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\API\\TestApiSignUpController::register'], null, ['POST' => 0], null, false, false, null]],
        '/email/confirm' => [[['_route' => 'api_confirm', '_controller' => 'App\\Controller\\API\\TestApiSignUpController::confirmEmail'], null, ['GET' => 0], null, false, false, null]],
        '/api/dashboard' => [[['_route' => 'api_app_dashboard', '_controller' => 'App\\Controller\\API\\adminApi\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/api/admin/users' => [[['_route' => 'index', '_controller' => 'App\\Controller\\API\\adminApi\\ApiUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/user/create' => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\API\\adminApi\\ApiUserController::createUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/categories' => [[['_route' => 'api_category_index', '_controller' => 'App\\Controller\\API\\adminApi\\CategoryApiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/categories/create' => [[['_route' => 'api_category_create', '_controller' => 'App\\Controller\\API\\adminApi\\CategoryApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'admin.category.create', '_controller' => 'App\\Controller\\Admin\\CategoryController::create'], null, null, null, false, false, null]],
        '/admin/recettes/create' => [[['_route' => 'admin.recipe.create', '_controller' => 'App\\Controller\\Admin\\RecipeController::create'], null, null, null, false, false, null]],
        '/admin/users/create' => [[['_route' => 'admin_user.create', '_controller' => 'App\\Controller\\Admin\\UserController::create'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/department/department' => [[['_route' => 'department', '_controller' => 'App\\Controller\\DepartmentController::index'], null, null, null, false, false, null]],
        '/department/create' => [[['_route' => 'department_create', '_controller' => 'App\\Controller\\DepartmentController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|\\.well\\-known/genid/([^/]++)(*:49)'
                            .'|errors/(\\d+)(*:68)'
                            .'|validation_errors/([^/]++)(*:101)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:138)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:169)'
                            .'|c(?'
                                .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:211)'
                                .'|ategories/(?'
                                    .'|([^/]++)(*:240)'
                                    .'|edit/([^/]++)(*:261)'
                                    .'|delete/([^/]++)(*:284)'
                                .')'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:323)'
                            .')'
                            .'|blogs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:366)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:392)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:430)'
                                .')'
                            .')'
                            .'|recette/(?'
                                .'|([0-9]+)(*:459)'
                                .'|edit/([^/]++)(*:480)'
                                .'|delete/([0-9]+)(*:503)'
                            .')'
                            .'|admin/user/(?'
                                .'|([^/]++)(*:534)'
                                .'|edit/([^/]++)(*:555)'
                                .'|delete/([^/]++)(*:578)'
                            .')'
                        .')'
                    .')'
                    .'|dmin(?'
                        .'|(?:/([^/]++))?(*:610)'
                        .'|/(?'
                            .'|category(?'
                                .'|(*:633)'
                                .'|/([0-9]+)(?'
                                    .'|(*:653)'
                                .')'
                            .')'
                            .'|recettes(?'
                                .'|(*:674)'
                                .'|/([0-9]+)(?'
                                    .'|(*:694)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(*:712)'
                                .'|edit/([0-9]+)(*:733)'
                                .'|/([0-9]+)(*:750)'
                            .')'
                        .')'
                        .'|(*:760)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:801)'
                    .'|wdt/([^/]++)(*:821)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:863)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:900)'
                                .'|router(*:914)'
                                .'|exception(?'
                                    .'|(*:934)'
                                    .'|\\.css(*:947)'
                                .')'
                            .')'
                            .'|(*:957)'
                        .')'
                    .')'
                .')'
                .'|/department(?'
                    .'|s/(?'
                        .'|([^/]++)(*:995)'
                        .'|edit/([^/]++)(*:1016)'
                        .'|delete/([^/]++)(*:1040)'
                    .')'
                    .'|/(?'
                        .'|edit/([^/]++)(*:1067)'
                        .'|delete/([^/]++)(*:1091)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        68 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        101 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        138 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        169 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        211 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        240 => [[['_route' => 'api_category_show', '_controller' => 'App\\Controller\\API\\adminApi\\CategoryApiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'api_category_edit', '_controller' => 'App\\Controller\\API\\adminApi\\CategoryApiController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        284 => [[['_route' => 'api_category_delete', '_controller' => 'App\\Controller\\API\\adminApi\\CategoryApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        323 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        366 => [[['_route' => '_api_/blogs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => '_api_/blogs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/blogs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        430 => [
            [['_route' => '_api_/blogs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/blogs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/blogs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Blog', '_api_operation_name' => '_api_/blogs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        459 => [[['_route' => 'app_api_recipesapi_getrecipebyid', '_controller' => 'App\\Controller\\API\\RecipesApiController::getRecipeById'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_api_recipesapi_edit', '_controller' => 'App\\Controller\\API\\RecipesApiController::edit'], ['id'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        503 => [[['_route' => 'app_api_recipesapi_delete', '_controller' => 'App\\Controller\\API\\RecipesApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        534 => [[['_route' => 'get_user', '_controller' => 'App\\Controller\\API\\adminApi\\ApiUserController::getUserById'], ['id'], ['GET' => 0], null, false, true, null]],
        555 => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\API\\adminApi\\ApiUserController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        578 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\API\\adminApi\\ApiUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        610 => [[['_route' => 'admin', 'section' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::dashboard'], ['section'], null, null, false, true, null]],
        633 => [[['_route' => 'admin.category.index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], null, null, false, false, null]],
        653 => [
            [['_route' => 'admin.category.edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.category.delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        674 => [[['_route' => 'admin.recipe.index', '_controller' => 'App\\Controller\\Admin\\RecipeController::index'], [], null, null, true, false, null]],
        694 => [
            [['_route' => 'admin.recipe.edit', '_controller' => 'App\\Controller\\Admin\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.recipe.delete', '_controller' => 'App\\Controller\\Admin\\RecipeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        712 => [[['_route' => 'admin_user.index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], [], null, null, true, false, null]],
        733 => [[['_route' => 'admin_user.edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        750 => [[['_route' => 'admin_user.delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        760 => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], null, null, false, false, null]],
        801 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        821 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        863 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        900 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        914 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        934 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        947 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        957 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        995 => [[['_route' => 'api_department_show', '_controller' => 'App\\Controller\\API\\ApiDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1016 => [[['_route' => 'api_department_edit', '_controller' => 'App\\Controller\\API\\ApiDepartmentController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        1040 => [[['_route' => 'api_department_delete', '_controller' => 'App\\Controller\\API\\ApiDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1067 => [[['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::edit'], ['id'], null, null, false, true, null]],
        1091 => [
            [['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];