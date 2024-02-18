<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|co(?'
                            .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|mmandes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:186)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:224)'
                                .')'
                            .')'
                        .')'
                        .'|aliments(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:264)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:302)'
                            .')'
                        .')'
                        .'|bo(?'
                            .'|issons(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:344)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:382)'
                                .')'
                            .')'
                            .'|xs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:415)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:453)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:494)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        186 => [
            [['_route' => 'api_commandes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commandes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        224 => [
            [['_route' => 'api_commandes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commandes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commandes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commandes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commandes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_commandes_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        264 => [
            [['_route' => 'api_aliments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_aliments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        302 => [
            [['_route' => 'api_aliments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_aliments_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_aliments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_aliments_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Aliments', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_aliments_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        344 => [
            [['_route' => 'api_boissons_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boissons_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        382 => [
            [['_route' => 'api_boissons_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boissons_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_boissons_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_boissons_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boissons', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boissons_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        415 => [
            [['_route' => 'api_boxs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boxs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        453 => [
            [['_route' => 'api_boxs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boxs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_boxs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_boxs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boxs', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_boxs_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        494 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
