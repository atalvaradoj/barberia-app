<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

include "../public/conexion.php";

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        //return $response;
    });

    //Estos son los END.POINTS
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->post('/insPelicula', function (Request $request, Response $response) {
        //abrir conexion
        $db = conexion();
        //crear registro
        $rec = $request->getQueryParams();
        //inserta en la tabla
        $res = $db->AutoExecute("peliculas", $rec, "INSERT");
        $response->getBody()->write(strval($res));
        return $response;
    });

    $app->put('/updPelicula', function (Request $request, Response $response) {
        //abrir conexion
        $db = conexion();
        //crear registro
        $rec = $request->getQueryParams();
        $id = $rec["idPelicula"];
        //modificar en la tabla
        $res = $db->AutoExecute("peliculas", $rec, "UPDATE", "idPelicula=$id");  // "'id'"  Si es un String
        $response->getBody()->write(strval($res));
        return $response;
    });

    //Prox Clase REVISION
    $app->delete('/delPelicula/{id}', function (Request $request, Response $response, array $args) {
        //abrir conexion
        $db = conexion();
        $id = $args["id"];
        $sql = "DELETE FROM pelicula WHERE idPelicula=$id";
        $res = $db->Execute($sql);
        var_dump($res);
        $response->getBody()->write(strval(1));
        return $response;
    });

    $app->get('/listPelicula', function (Request $request, Response $response) {
        $response->getBody()->write('Lista de Peliculas');
        return $response;
    });

    $app->get('/datosPelicula/{id}', function (Request $request, Response $response, array $args) {
        $id = $args["id"];
        $response->getBody()->write("Datos de Pelicula: $id");
        return $response;
    });

    $app->get('/buscarPelicula/{texto}', function (Request $request, Response $response, array $args) {
        $texto = $args["texto"];
        $response->getBody()->write("Peliculas que contengan: $texto");
        return $response;
    });
};
