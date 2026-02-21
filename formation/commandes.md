# Liste de commandes de Symfony

| Besoin                            | Commande                                      |
| ----------------------------------| ----------------------------------------------|
| Liste tous les packages           | `composer show`                               |
| Un package précis                 | `composer show nom/du-package`                |
| Composants Symfony                | `composer show symfony/*`                     |
| Recettes Symfony                  | `composer recipes`                            |
| les bundles actifs dans Symfony   | `php bin/console debug:container --env=dev`   |
| Créer un projet Symfony           | `symfony new mon_projet --webapp `            |
| Liste les services actifs         | `php bin/console debug:autowiring`            |
| Creer une base                    | `php bin/console doctrine:database:create`    |
| Prépare les modifs d'une BDD      | `php bin/console make:migrations`             |
| Appliquer la migration            | `php bin/console doctrine:migrations:migrate` |
|         | ``            |
|         | ``            |
|         | ``            |
|         | ``            |

# Twig

| Syntaxe                             | Comportement                                                                                                      |
| ------------------------------------| ------------------------------------------------------------------------------------------------------------------|
| {{ ... }}                           | used to display the content of a variable or the result of evaluating an expression                               |
| {% ... %}                           | used to run some logic, such as a conditional or a loop                                                           |
| {# ... #}                           | used to add comments to the template (unlike HTML comments, these comments are not included in the rendered page  |
| {{ title|upper }}                   | exemple de formatge via pipe ( tags, filters and functions disponibles : https://twig.symfony.com/doc/3.x/)       |
|                                     |                                                                                                                   |
|                                     |                                                                                                                   |

