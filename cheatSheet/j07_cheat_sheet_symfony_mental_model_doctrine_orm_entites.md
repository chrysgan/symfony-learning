# 🧠 Symfony – Mental Model
## Doctrine – ORM & Entités

> Objectif : comprendre **comment Doctrine pense**, avant d’optimiser ou de complexifier.

---

## 🎯 Pourquoi Doctrine existe

Doctrine existe pour résoudre un problème simple :

- PHP pense en **objets**
- SQL pense en **tables**

👉 Doctrine est un **traducteur** entre les deux.

---

## 🧱 Une entité, c’est quoi mentalement

Une entité est :
- une **classe PHP normale**
- qui représente un **concept métier**

Exemples :
- User
- Article
- Product

👉 Une entité **n’est pas une table**, même si elle y sera liée.

---

## 🗺️ Mapping : le lien objet ↔ base

Le mapping dit à Doctrine :
> « Cette propriété PHP correspond à cette colonne SQL »

Exemple :
- `$name` → colonne `name`
- `$price` → colonne `price`

👉 Le mapping est une **description**, pas une action.

---

## 🔁 persist / flush (le cœur du fonctionnement)

```php
$entityManager->persist($product);
$entityManager->flush();
```

Mentalement :
- `persist()` → *"je veux sauvegarder cet objet"*
- `flush()` → *"exécute vraiment le SQL maintenant"*

👉 Tant que tu n’appelles pas `flush()`, **rien n’est écrit en base**.

---

## 🔍 Repository : lire des données

Un repository sert à :
- retrouver des entités
- sans écrire de SQL

Méthodes de base :
- `find()`
- `findOneBy()`
- `findBy()`
- `findAll()`

👉 Tu demandes des **objets**, pas des lignes SQL.

---

## ❌ Ce que Doctrine ne fait PAS

- ❌ valider les données utilisateur
- ❌ remplacer les règles métier
- ❌ décider quand écrire en base

Doctrine **persiste**, il ne **valide pas**.

---

## ⚠️ Point souvent confus : validation vs contraintes

- **Contraintes Doctrine** → cohérence base de données
- **Validation Symfony** → cohérence métier / utilisateur

👉 Deux couches différentes (on les verra séparément).

---

## 🧠 Phrase clé à retenir

> **Doctrine manipule des objets, pas des tables.**

