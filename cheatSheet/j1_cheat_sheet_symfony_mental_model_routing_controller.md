# 🧠 Symfony – Mental Model
## Routing & Controller

> Objectif : comprendre **ce que Symfony fait pour toi**, sans magie.

---

## 🎯 À quoi ça sert ?
Relier une **URL appelée par un navigateur** à **une méthode PHP précise**.

Symfony répond toujours à une question simple :
> « Quelle méthode dois-je exécuter pour cette URL ? »

---

## 🌍 Ce que voit Symfony quand une requête arrive

1. Une URL : `/hello/morgan`
2. Une méthode HTTP : `GET`
3. Une liste de routes connues

Symfony cherche **UNE route qui correspond**.

---

## 🧭 Une route, c’est quoi mentalement ?

Une règle du type :

```
SI
  URL correspond
  ET méthode HTTP autorisée
ALORS
  appeler cette méthode PHP
```

Exemple :
```
/hello/{name} + GET → index()
```

---

## 🔗 Route dynamique (avec variable)

```php
#[Route('/hello/{name}')]
public function index(string $name)
```

Ce que Symfony fait :
- voit `{name}` dans l’URL
- récupère la valeur (`morgan`)
- la met dans `$name`
- appelle la méthode

👉 Symfony **ne devine rien**, il applique une règle.

---

## 🔒 Méthodes HTTP (`methods: ['GET']`)

```php
#[Route('/simplicity', methods: ['GET'])]
```

Symfony vérifie :
- l’URL est-elle bonne ?
- la méthode HTTP est-elle autorisée ?

Sinon → erreur.

👉 C’est une barrière volontaire.

---

## 📦 Le rôle du Controller

Un controller :
- reçoit des données (URL, variables)
- décide quoi faire
- retourne **UNE Response**

Toujours.

Même :
```php
return 'hello'; // ❌
```

Doit devenir :
```php
return new Response('hello'); // ✅
```

---

## ❌ Erreurs mentales fréquentes

- ❌ « Symfony devine quelle méthode appeler »
- ❌ « Une route = une page HTML »
- ❌ « Le controller affiche la page »

---

## ✅ La bonne vision

- Une route = une règle
- Un controller = un point de décision
- Une page = une Response

---

## 🧠 Phrase clé à retenir

> **Symfony ne fait rien tout seul : il applique des règles que tu déclares.**

