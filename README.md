# e-commerce
Un site e-commerce monté avec laravel

Pour voir le site qui est déjà en production <a href="http://mon-tshirt.42web.io">cliquez ici</a>

___

Le code est mis à disposition pour que différentes personnes puissent en avoir accès

C'est à dire qu'on peut le télécharger, modifier, commenter,...

Le préalable est de connaître:
  - Le routage
  - Les Middlewares
  - Blade
  - Eloquent
  - Rollback


___

Comment run le projet après téléchargement ?

  - Importez d'abord la base de données qui se trouve dans la branche master, à la racine même du fichier et le fichier .sql est nommé *ecom.sql*
  - Ouvrez le folder du projet avec un éditeur
  - Si vous utilisez VS code, ouvrez directement le terminal et executer le commandes ci-dessous
  - Si vous utiliser d'autre éditeurs ne vous permettant pas de faire tout cela, utiliser le CMD puis calibrer vous à la racine du dossier contenant le projet et éxecuter le commandes suivants
  
      
      php artisan migrate
    
      php artisan serve
