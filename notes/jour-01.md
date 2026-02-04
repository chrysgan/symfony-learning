# Jour 01 – Bases Symfony
## 🎯 Objectif du jour
- Comprendre à quoi sert Symfony
- Comprendre la structure de base d’un projet

## 🧠 Ce que j’ai compris
- On peut installer symfony sur apache sans symfony cli
- Pour interpreter des varaibales avec du texte il faut les mettre entre guillemets
- un mot d'une url peut devenir uen variable de la page à generer
- #[Route('/hello/{name}', name: 'index')]
  index est la methode appelée quand il y aura l'url saisie
  {name} sera capturé et mis dans la variable du meme nom
## ❓ Ce qui reste flou
- #[Route('/simplicity', methods: ['GET'])]
    public function simple(): Response
    {
        return new Response('Simple! Easy! Great!');
    }
- 

