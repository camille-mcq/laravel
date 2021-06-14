1. TOUT effacer.
2. Structure : <! Doctype html>
3. Mettre un link avec la méthode **asset** qui permet de faire un chemin depuis notre dossier public.
 **Syntaxe:**
" <link  rel="stylesheet"  href={{  asset("css/app.css") }}> "

on va également linker notre JS avec la balise < script > et  <src> à la fin de notre < /body > comme en html ,on ajoute  la méthode asset.
Une fois que que c'est fait on s'assure que dans notre dossier routes il ya une chemin vers notre page qui pour l'instant ne retourne rien.

Lorsqu'on voudra y mettre du contenu.
 On va organiser notre dossier View:
1. Créer un dossier **layouts**
    
    a-) Créer un fichier **app.blade** 
	=> Dans le fichier **app.blade**
	b-) structure: DOCTYPE ! html
	c-) Utilisé la méthode **@yield('content')** dans le body qui permet de retourner tout le contenu de notre dossier **partials**
	 **@section* (qu'on va créer dans le fichier home.blade)
	 + Ajouter le le script: <script  src={{ asset("js/app.js") }}></script> +
	 + <link  rel="stylesheet"  href= {{  asset("css/app.css") }}>
	d-)  linker le **js** avec la méthode asset.(comme dans le blade)

2. Créer une fichier **home.blade.php**
  
   a-) Créer un extends: pour lier notre dossier **layouts**
   => b-) Utiliser la méthode 
   **@extends('layouts.app')
	 **@section** ('content') => contenu => ce qu'on mit dans notre     			 yield.

@include('partials.exemple.') 
=> On créer un chemin pour lier le fichier blade depuis notre dossier partials  pour retourner le ('content') contenu de la page cibler.




@endsection(fin du contenu)
remarques: pour chaque page il faudra créer le chemin et lier avec cette méthode.											   

 - Créer un dossier **partials**: c'est la qu'on faire notre découpage en plusieurs page et la ou il y aura tout notre **CONTENU**. C'est également ce qui va faire apparaitre l'interface de notre utilisateur.
 a-) Créer un fichier** exemple.blade.php** c'est ici qu'on va mettre notre qui se quasi identique à du html.
 
 - Pour les image il faut aussi utiliser la méthode **asset**
 => Créer le chemin de l'image a partir du dossier public/img

5. =>Supprimer **welcome.blade.php** car il va être remplacer par notre **app.blade**c'est la que se trouve la structure de base.
6. Il faut donc renommer notre route dans dans le fichier **web.php** => "welcome" => "app.blade" => Car la méthode yield renvoie toutes nos pages!
 => On peut créer du contenu dans notre Partials et à chaque fois l'ajouter =>**@include.** dans notre **home.blade**


