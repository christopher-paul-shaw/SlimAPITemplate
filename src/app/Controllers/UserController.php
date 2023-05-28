<?php
namespace App\Controllers;
class UserController
{
	public function __construct() {

	}

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

	public function create($request, $response, $args) {

		$data = [
			"UserID" => rand(1,10000)
		];
		$payload = json_encode($data);

		$response->getBody()->write($payload);
		return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(200);

	}


	public function get($request, $response, $args) {

		$id = $args['id'];
	
		if ($id > 5) {
			$data = [
				"Status" => "Not Found",
				"Message" => "Account Not Found"
			];
			$payload = json_encode($data);
	
			$response->getBody()->write($payload);
			return $response
					->withHeader('Content-Type', 'application/json')
					->withStatus(404);
		}


		$data = [
			"UserID" => '000',
			"UserName" => "UserName000",
			"Email" => "No@example.com",
			"DisplayName" => "NoExample"
		];
		$payload = json_encode($data);

		$response->getBody()->write($payload);
		return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus(200);

	}

}
