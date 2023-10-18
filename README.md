# GraphQL & Laravel

## Installation
    
    - composer install
    - Configurer le .env (db)
    - php artisan migrate
    - php artisan db:seed

## Debug

http://graphql.test/graphiql

A cette adresse, il est possible d'écrire les requêtes GraphQL et de les tester.

Toute la config de GraphQL se fait dans ./graphql/schema.graphql

## Queries

Toutes les queries dispo sont dans "Type Query {}" du fichier de config

Exemple: 
```ruby
query Test {
  users {
    id
    name
  }
}
```

A chaque requête tu choisis les champs et relations que tu veux récup.

## Mutations

Toutes les mutations dispo sont dans "Type Mutation {}" du fichier de config

Exemple: 
```ruby
mutation Test {
  createVehicleWithPark(input: {name: "Mon véhicule", park_name: "Nom du park"}) {
    id
    name
    park {
      id
      name
    }
  }
}
```

Cette mutation pointe vers le fichier ./app/GrapQL/Mutations/CreateVehicleWithPark.php

La deuxième mutation ne fonctionne pas pareil, il y a la directive @create qui permet de créer un objet par défaut.