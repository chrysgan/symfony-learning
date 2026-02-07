# Jour 02 – HTTP, Request & Response

## 🎯 Objectif du jour
- Comprendre ce qu’est une Request
- Comprendre ce qu’est une Response

## 🧠 Ce que j’ai compris
- Memo : https://symfony.com/doc/current/controller.html
- La route permet de faire le lien entre une url et un controleur
- on peut etendre le controleur avce la classe abstract controleur
- on peut regidiriger en typant la reponse de la methode avec la classe RedirectResponse (en utilisant ou pas un genertauer d'url)
- le type de $this->render est response (argument fichier twig + tableau de cle/valeur)
- le type de renvoi peut entrainer un comportement different
- les services (fonctionnalies de symfony ) peuvent utiliser en mettant en argument de la methode une variable et son type qui sera le service, ce sera injecté 


## ❓ Ce qui reste flou
- que contient abstract controleur
- autowiring et l'annotation #autowire
- beaucooup de choses sur request et response mais je n'ai pas tout lu

## Réponses CHATGPT 

AbstractController : qu’est-ce que ça contient ?
👉 AbstractController est une boîte à outils, pas une obligation.
Il fournit :
render() → HTML/Twig
redirectToRoute()
createForm()
addFlash()
isGranted()
accès simplifié à certains services


