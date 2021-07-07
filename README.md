
# Symfony API starter

A REST API starter using Symfony and some classic shit bundles (LexikJWTAuthenticationBundle, NelmioApiDocBundle...)!


## Installation

Install the project by running the following commands:

```bash
  cd /path/to/your/project/ 
  cp .env .env.local #if you want to overwrite some environment variables locally (.env.local should not be versioned)
  composer install
  symfony console lexik:jwt:generate-keypair
  symfony serve
  docker-compose up -d 
  symfony console make:migration
  symfony console doctrine:migrations:migrate
  symfony console doctrine:fixtures:load
  symfony console cache:clear
```


    
## Documentation

Documentation will be available at [http://127.0.0.1:8000/doc](http://127.0.0.1:8000/doc) so you can play and try your API. It uses Swagger UI and implements OpenAPI specification through NelmioApiDocBundle.

Note: you will need to generate a valid JWT token in order to access secured routes from there. To do so, get a user identifier (email) in your database:
```bash
symfony console dbal:run-sql "SELECT email FROM user LIMIT 1;"
```

Copy the email in the SQL request result, then run: 
```bash
symfony console lexik:jwt:generate-token -c App\\Entity\\User [paste the email here]
```

The command will output a brand new generated JWT token you can use.