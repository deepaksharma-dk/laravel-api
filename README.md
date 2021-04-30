I have created the backend API in Laravel. I have used the github and docker to run this project. I have used the Docker 20.10 on my OS Ubuntu 20.04. Below are the steps and other details to download the source code and steps to run this code:
	
	1) clone the git repository using the below command.
		git clone git@github.com:deepaksharma-dk/laravel-api.git
		
	2) go inside the repository e.g. 
		cd laravel-api
		
	3) create a environment file using the copy command. Without this file docker will thorugh the error. 
		cp .env.example .env
		
	4) run the below composer command to start the application:
		docker-compose up --build 
	
	5) Go inside the docker using docker exec command
		docker exec -it laravel-app bash
		
	6) Run the the composer command to install the dependency and database migration:
		composer install-dependcies-and-data
		
	7) You can run the test case using below command:
		composer test
		
		Path of test file: laravel-api/tests/Feature/Http/Controllers/ProductControllerTest.php
		
	7) Congratulations. You can access the website on http://127.0.0.1:8000/
	
		
	Below are the curl commands to verify the service:
	
	1) With Valid search term:
		Request: curl --location --request GET 'http://127.0.0.1:8000/api/autocomplete?term=lap'
		Response: [{"id":1,"title":"Laptop"}]
		
	2) With invalid search term:
		Request: curl --location --request GET 'http://127.0.0.1:8000/api/autocomplete?term='
		Response: []
		
