# 🧠 Symfony – Mental Model
## Doctrine – EntityManager & Cycle de vie

> Objectif : comprendre ce que Doctrine fait réellement entre `persist()` et `flush()`.

---

## 🎯 Le rôle de l’EntityManager

L’EntityManager est :
> le chef d’orchestre de Doctrine.

Il :
- suit les entités
- détecte les changements
- décide quelles requêtes SQL exécuter

👉 Il ne fait pas "juste" des INSERT.

---

## 🧱 Le concept clé : Unit of Work

Doctrine utilise un mécanisme interne appelé :

> **Unit of Work**

C’est une mémoire temporaire qui contient :
- les objets à insérer
- les objets modifiés
- les objets à supprimer

Tant qu’on ne fait pas `flush()`,
👉 rien n’est écrit en base.

---

## 🔁 Le cycle d’un objet

### 1️⃣ New (nouvel objet)
```php
$product = new Product();
```

L’objet existe en PHP seulement.

---

### 2️⃣ Managed (suivi par Doctrine)
```php
$entityManager->persist($product);
```

Doctrine commence à le suivre.
👉 Toujours pas d’INSERT.

---

### 3️⃣ Synchronisé
```php
$entityManager->flush();
```

Doctrine :
- génère le SQL
- exécute les requêtes
- synchronise l’état

---

## 🔄 Mise à jour automatique

Si tu récupères un objet :
```php
$product = $repository->find($id);
$product->setPrice(2000);
$entityManager->flush();
```

👉 Doctrine détecte le changement.
👉 Il génère un UPDATE.

Pas besoin de refaire `persist()`.

---

## 🗑️ Suppression

```php
$entityManager->remove($product);
$entityManager->flush();
```

Même logique :
- `remove()` marque
- `flush()` exécute

---

## ❌ Erreurs mentales fréquentes

- ❌ « persist() écrit en base »
- ❌ « flush() concerne un seul objet »
- ❌ « Doctrine exécute du SQL immédiatement »

---

## ✅ La bonne vision

- persist() → préparer
- remove() → marquer
- flush() → synchroniser

Doctrine travaille en différé.

---

## 🧠 Phrase clé à retenir

> **Doctrine accumule les changements, puis les applique en une seule fois.**

