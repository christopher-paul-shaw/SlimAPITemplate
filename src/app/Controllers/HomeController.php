<?php
namespace App\Controllers;
class HomeController
{
	public function index($request, $response, $args) {
		$data = [
			"message" => "Service Online"
		];
		$payload = json_encode($data);
		$response->getBody()->write($payload);
		return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(200);
	}
}
