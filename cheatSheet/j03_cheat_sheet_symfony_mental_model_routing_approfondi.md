# 🧠 Symfony – Mental Model
## Routing (approfondi)

> Objectif : savoir **comment Symfony choisit UNE route**, sans magie.

---

## 🌍 Ce que Symfony reçoit

- une URL (ex: `/blog/2`)
- une méthode HTTP (GET, POST…)

Symfony se pose une seule question :
> « Quelle règle correspond à cette requête ? »

---

## 🧭 Comment Symfony choisit une route

Symfony lit **toutes les routes connues**, puis :

1. compare l’URL
2. vérifie la méthode HTTP
3. vérifie les contraintes
4. **prend la première route qui matche**

👉 L’ordre compte.

---

## 🔍 Routes statiques vs dynamiques

### Route statique
```
/about
```
- très précise
- matche une seule URL

### Route dynamique
```
/blog/{page}
```
- plus générique
- matche plusieurs URLs

👉 Une route statique doit être **avant** une dynamique.

---

## 🔢 Paramètres & valeurs par défaut

```php
#[Route('/blog/{page}', defaults: ['page' => 1])]
```

Symfony :
- prend la valeur si elle existe
- sinon applique le défaut

👉 Aucun calcul, aucune magie.

---

## 🔒 Méthodes HTTP

```php
#[Route('/submit', methods: ['POST'])]
```

Symfony vérifie :
- URL OK ?
- méthode OK ?

Sinon → refus.

👉 GET ≠ POST.

---

## 📎 Contraintes simples

```php
#[Route('/blog/{page}', requirements: ['page' => '\\d+'])]
```

Symfony :
- vérifie la forme
- refuse si ça ne matche pas

---

## ❌ Erreurs mentales fréquentes

- ❌ « Symfony choisit la meilleure route »
- ❌ « Il compare les types PHP »
- ❌ « L’ordre n’a pas d’importance »

---

## ✅ La bonne vision

- Une route = une règle
- Symfony applique les règles **dans l’ordre**
- La plus spécifique gagne

---

## 🧠 Phrase clé à retenir

> **Symfony ne réfléchit pas : il applique des règles dans l’ordre.**

