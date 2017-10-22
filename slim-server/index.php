<?php
/**
 * Happy Dev LDP
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * POST addResource
 * Summary: Add a new person to the LDP store
 * Notes: Create a new person
 * Output-Formats: [application/ld+json, text/turtle]
 */
$app->POST('/api/ldp/v2/person', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addResource as a POST method ?');
            return $response;
            });


/**
 * GET getResource
 * Summary: Get the detail of a person resource
 * Notes: Multiple status values can be provided with comma separated strings
 * Output-Formats: [application/ld+json, text/turtle]
 */
$app->GET('/api/ldp/v2/person/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getResource as a GET method ?');
            return $response;
            });


/**
 * GET getResources
 * Summary: Get the list of all persons typed resources on the current server
 * Notes: Multiple status values can be provided with comma separated strings
 * Output-Formats: [application/ld+json, text/turtle]
 */
$app->GET('/api/ldp/v2/person', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getResources as a GET method ?');
            return $response;
            });


/**
 * PUT updateResource
 * Summary: Update an existing person
 * Notes: Update an existing person
 * Output-Formats: [application/ld+json, text/turtle]
 */
$app->PUT('/api/ldp/v2/person/{id}', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updateResource as a PUT method ?');
            return $response;
            });



$app->run();
