# 🧠 Symfony – Mental Model
## Request & Response

> Objectif : comprendre **le dialogue réel** entre le navigateur et Symfony.

---

## 🌍 Point de départ (toujours le même)

Quelque chose arrive à Symfony.
Ce quelque chose = **UNE requête HTTP**.

Symfony ne voit pas :
- un navigateur
- une page

Symfony voit :
> **un objet `Request`**

---

## 📦 Qu’est-ce qu’une Request ?

Une Request est une **photo complète** de ce que le navigateur envoie.

Elle contient notamment :
- l’URL demandée
- la méthode HTTP (GET, POST…)
- les paramètres (URL, formulaire)
- les headers

👉 Symfony encapsule tout ça dans **un seul objet**.

---

## 🧭 Pourquoi Symfony utilise une Request ?

Parce que :
- le web est chaotique
- les navigateurs envoient beaucoup d’informations

Symfony dit :
> « Je mets tout dans un objet propre et prévisible »

---

## 🔁 Du Controller vers la Response

Dans un controller :

```php
public function action(Request $request): Response
```

Symfony fait :
1. crée la Request
2. appelle la méthode
3. attend **UNE Response**

---

## 📤 Qu’est-ce qu’une Response ?

Une Response contient :
- du contenu (HTML, texte, JSON…)
- un statut HTTP (200, 302, 404…)
- des headers

👉 Peu importe le type de page, Symfony renvoie **toujours une Response**.

---

## 🧰 Les raccourcis d’AbstractController

Quand tu étends `AbstractController`, Symfony te donne :
- `render()` → Response HTML
- `redirectToRoute()` → Response de redirection
- `json()` → Response JSON

👉 Ce sont **des générateurs de Response**.

---

## 🔌 Injection automatique (autowiring)

Quand tu écris :

```php
public function test(Request $request)
```

Symfony :
- voit le type
- sait le créer
- l’injecte

👉 Aucune magie, juste une règle.

---

## ❌ Erreurs mentales fréquentes

- ❌ « Symfony affiche une page »
- ❌ « render() affiche du HTML »
- ❌ « le navigateur appelle un controller »

---

## ✅ La bonne vision

- Le navigateur envoie → Request
- Symfony traite → Controller
- Symfony renvoie → Response

Toujours ce cycle.

---

## 🧠 Phrase clé à retenir

> **Symfony transforme le web en objets PHP.**

