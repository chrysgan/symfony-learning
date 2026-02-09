# 🧠 Symfony – Mental Model
## Autowiring & Autoconfiguration

> Objectif : enlever définitivement l’impression de « magie ».

---

## 🎯 Autowiring : ce que c’est vraiment

Autowiring = **Symfony choisit quel objet injecter à partir du TYPE**.

Quand tu écris :
```php
public function index(LoggerInterface $logger)
```

Symfony fait mentalement :
1. « On me demande un `LoggerInterface` »
2. « Je sais quel service correspond »
3. « Je l’injecte »

👉 Le **nom de la variable ne compte pas**.
👉 Seul le **type (classe / interface)** compte.

---

## 🔑 La vraie clé : le FQCN

Symfony se base sur :
```
Namespace\\NomDeLaClasse
```

Exemple :
```
Symfony\\Component\\HttpFoundation\\Request
```

👉 C’est **unique**.
👉 C’est ça qui permet l’injection automatique.

---

## 🎯 Autoconfiguration : ce que Symfony ajoute tout seul

Autoconfiguration = **Symfony ajoute des comportements automatiquement**.

Exemples :
- une classe `Controller` → reconnue comme controller
- une classe `Command` → reconnue comme commande
- un `EventSubscriber` → enregistré automatiquement

👉 Tu ne le vois pas, mais Symfony ajoute des “étiquettes” internes.

---

## 🔁 Autowiring ≠ Autoconfiguration

- Autowiring → **quel objet injecter**
- Autoconfiguration → **comment ce service se comporte**

👉 Deux mécanismes différents, souvent confondus.

---

## ❌ Quand l’autowiring casse

Symfony ne peut PAS autowirer si :
- la classe n’est pas dans `src/`
- plusieurs implémentations possibles
- le type est ambigu

👉 Dans ce cas, il faut **aider Symfony** (plus tard).

---

## ❌ Erreurs mentales fréquentes

- ❌ « Symfony devine par le nom de la variable »
- ❌ « Autowiring = magie »
- ❌ « Il faut toujours configurer »

---

## ✅ La bonne vision

- Tu écris des classes propres
- Tu relies par les TYPES
- Symfony s’occupe du reste

---

## 🧠 Phrase clé à retenir

> **Symfony injecte par le TYPE, pas par le nom.**
