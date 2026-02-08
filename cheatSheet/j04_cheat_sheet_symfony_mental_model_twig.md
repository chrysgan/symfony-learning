# 🧠 Symfony – Mental Model
## Twig (Templates)

> Objectif : comprendre **le rôle exact de Twig** et éviter les mauvais usages.

---

## 🎯 Pourquoi Twig existe

Twig existe pour **séparer clairement** :
- la logique (PHP, controllers)
- l’affichage (HTML)

Symfony impose Twig pour éviter :
- le PHP dans le HTML
- la logique métier dans les vues

---

## 🧭 Ce que fait Twig (et seulement ça)

Twig :
- affiche des variables
- formate des données (date, texte, etc.)
- fait des boucles simples
- fait des conditions simples

👉 Twig **ne décide rien**, il affiche.

---

## 🧱 Ce que Twig NE doit PAS faire

- ❌ accéder à la base de données
- ❌ contenir de la logique métier
- ❌ remplacer le controller

Si tu hésites :
> « Est-ce que ça pourrait être testé ? »

👉 Si oui → ce n’est PAS du Twig.

---

## 🧩 Syntaxe mentale (à retenir)

- `{{ ... }}` → afficher
- `{% ... %}` → structurer (if, for)
- `{# ... #}` → commenter

👉 Twig est **déclaratif**, pas impératif.

---

## 🔁 Controller → Twig

```php
return $this->render('page.html.twig', [
    'title' => 'Hello',
]);
```

Mentalement :
- le controller prépare les données
- Twig les consomme

👉 Twig n’invente jamais de données.

---

## 📦 Helpers courants

- `asset()` → fichiers dans `/public`
- `path()` → URL à partir d’une route

👉 Twig ne connaît pas les chemins physiques.

---

## ❌ Erreurs mentales fréquentes

- ❌ « Twig est du PHP simplifié »
- ❌ « On peut faire de la logique complexe »
- ❌ « Twig choisit quoi afficher »

---

## 🧠 Phrase clé à retenir

> **Twig affiche, le controller décide.**

