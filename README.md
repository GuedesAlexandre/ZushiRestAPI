
# ZushiRestAPI

# Dirigez vous vers la branche Nico une fois le git clone fait

# Presentation

Bienvenue, sur la RestAPI de l'équipe Zushi, cette api fut un défi de par le challenge que nous nous sommes lancé de la réaliser en Symfony avec API Platform.
Nous avons développé une Clean Architecture en modèle MVC avec l'ORM Doctrine assurant une interface sécurisée.

# Comment utiliser le projet 

Installer les dépendances du projets

```bash
composer update


```

Lancer la création de la database à partir du modèle ORM Doctrine

```bash
php bin/console doctrine:schema:create

```

Lancer la migration de la databse 

```bash

php bin doctrine:migration:migrate

php bin/console doctrine:migrations:diff

```

Update du schema

```bash

php bin/console doctrine:schema:update 
```


Lancer le projet 

```bash 

Symfony serve
```

# Alternative

insérer le fichier ZushiBase.sql dans phpmyadmin pour obtenir une base par défaut fonctionnelle.

# Get sortie

```json

[
  {
    "id": 1,
    "nom": "Tasty Blend",
    "prix": 12.5,
    "pieces": 12,
    "img": "../../../assets/tasty-blend.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Sushi Saumon",
        "quantite": 5
      },
      {
        "nom": "Spring Avocat Cheese",
        "quantite": 5
      },
      {
        "nom": "California pacific",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "cheese"
      }
    ]
  },
  {
    "id": 2,
    "nom": "Amateur Mix",
    "prix": 15.9,
    "pieces": 18,
    "img": "../../../assets/amateur-mix.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon Roll",
        "quantite": 5
      },
      {
        "nom": "Spring Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Maki Cheese Avocat",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "cheese"
      },
      {
        "nom": "coriandre"
      }
    ]
  },
  {
    "id": 3,
    "nom": "Saumon Original",
    "prix": 12.5,
    "pieces": 11,
    "img": "../../../assets/salmon-original.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Sushi Saumon",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      }
    ]
  },
  {
    "id": 4,
    "nom": "Salmon Lovers",
    "prix": 15.9,
    "pieces": 18,
    "img": "../../../assets/salmon-lovers.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Sushi Saumon",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Spring Saumon Avocat",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "coriandre"
      }
    ]
  },
  {
    "id": 5,
    "nom": "Salmon Classic",
    "prix": 15.9,
    "pieces": 10,
    "img": "../../../assets/salmon-classic.jpg",
    "id_aliments": [
      {
        "nom": "Sushi Saumon",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      }
    ]
  },
  {
    "id": 6,
    "nom": "Master Mix",
    "prix": 15.9,
    "pieces": 12,
    "img": "../../../assets/master-mix.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Sushi Saumon",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Sushi Thon",
        "quantite": 5
      },
      {
        "nom": "California Thon Avocat",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "thon"
      }
    ]
  },
  {
    "id": 7,
    "nom": "Sunrise",
    "prix": 15.9,
    "pieces": 18,
    "img": "../../../assets/sunrise.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon Roll",
        "quantite": 5
      },
      {
        "nom": "California Thon Cuit Avocat",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "cheese"
      },
      {
        "nom": "thon"
      }
    ]
  },
  {
    "id": 8,
    "nom": "Sando Box Chicken Katsu",
    "prix": 15.9,
    "pieces": 13,
    "img": "../../../assets/sando-box-chicken-katsu.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon Roll",
        "quantite": 5
      },
      {
        "nom": "California Thon Cuit Avocat",
        "quantite": 5
      },
      {
        "nom": "Sando Chicken Katsu",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "cheese"
      },
      {
        "nom": "viande"
      }
    ]
  },
  {
    "id": 9,
    "nom": "Sando Box Salmon Aburi",
    "prix": 15.9,
    "pieces": 13,
    "img": "../../../assets/sando-box-salmon-aburi.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "California Thon Cuit Avocat",
        "quantite": 5
      },
      {
        "nom": "Sando Salmon Aburi",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "thon"
      }
    ]
  },
  {
    "id": 10,
    "nom": "Super Salmon",
    "prix": 19.9,
    "pieces": 24,
    "img": "../../../assets/super-salmon.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon Roll",
        "quantite": 5
      },
      {
        "nom": "Spring Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "thon"
      }
    ]
  },
  {
    "id": 11,
    "nom": "California Dream",
    "prix": 19.9,
    "pieces": 24,
    "img": "../../../assets/california-dream.jpg",
    "id_aliments": [
      {
        "nom": "California Saumon Avocat",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "California Thon Cuit Avocat",
        "quantite": 5
      },
      {
        "nom": "California Crevette",
        "quantite": 5
      },
      {
        "nom": "California Chicken Katsu",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "thon"
      },
      {
        "nom": "viande"
      },
      {
        "nom": "crevette"
      },
      {
        "nom": "spicy"
      }
    ]
  },
  {
    "id": 12,
    "nom": "Gourmet Mix",
    "prix": 24.5,
    "pieces": 22,
    "img": "../../../assets/gourmet-mix.jpg",
    "id_aliments": [
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Signature Dragon Roll",
        "quantite": 5
      },
      {
        "nom": "California French Touch",
        "quantite": 5
      },
      {
        "nom": "California French salmon",
        "quantite": 5
      },
      {
        "nom": "California Yellowtail Ponzu",
        "quantite": 5
      },
      {
        "nom": "Signature Rock'n Roll",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "coriandre"
      },
      {
        "nom": "viande"
      },
      {
        "nom": "spicy"
      },
      {
        "nom": "seriole lalandi"
      }
    ]
  },
  {
    "id": 13,
    "nom": "Fresh Mix",
    "prix": 24.5,
    "pieces": 22,
    "img": "../../../assets/fresh-mix.jpg",
    "id_aliments": [
      {
        "nom": "California pacific",
        "quantite": 5
      },
      {
        "nom": "Edamame/Salade de chou",
        "quantite": 5
      },
      {
        "nom": "Maki Salmon Roll",
        "quantite": 5
      },
      {
        "nom": "Sushi Salmon",
        "quantite": 5
      },
      {
        "nom": "Sushi Saumon Tsukudani",
        "quantite": 5
      }
    ],
    "id_saveurs": [
      {
        "nom": "saumon"
      },
      {
        "nom": "avocat"
      },
      {
        "nom": "cheese"
      },
      {
        "nom": "thon"
      },
      {
        "nom": "spicy"
      }
    ]
  }
]


```