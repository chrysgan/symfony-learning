# 🧠 Symfony – Mental Model
## Formulaires

> Objectif : comprendre le cycle complet d’un formulaire Symfony.

---

## 🎯 Pourquoi le système de formulaires existe

Symfony sépare :
- La structure du formulaire
- Le traitement des données
- La persistance en base

👉 Le formulaire prépare les données.
👉 Le controller décide quoi faire.

---

## 🧱 Les 4 étapes du cycle

### 1️⃣ Création
```php
$form = $this->createForm(ProductType::class, $product);
```

On lie le formulaire à un objet.

---

### 2️⃣ Hydratation
```php
$form->handleRequest($request);
```

Si le formulaire est soumis :
- Symfony injecte les données POST dans l’objet

---

### 3️⃣ Vérification
```php
$form->isSubmitted();
$form->isValid();
```

- isSubmitted() → formulaire envoyé
- isValid() → données valides

---

### 4️⃣ Décision (controller)

```php
if ($form->isSubmitted() && $form->isValid()) {
    $entityManager->persist($product);
    $entityManager->flush();
}
```

👉 Le formulaire ne sauvegarde rien.

---

## 🧩 FormType

Le FormType définit :
- les champs
- les types
- les options

Exemple :
```php
$builder
    ->add('name')
    ->add('price')
    ->add('save', SubmitType::class);
```

---

## 🔁 createForm vs createFormBuilder

- createForm → utilise une classe FormType (propre, réutilisable)
- createFormBuilder → rapide, inline, non réutilisable

👉 Projet réel → createForm

---

## ❌ Erreurs mentales fréquentes

- ❌ Le formulaire sauvegarde en base
- ❌ handleRequest() écrit en base
- ❌ isValid() persiste automatiquement

---

## 🧠 Phrase clé à retenir

> Le formulaire prépare les données, le controller décide, Doctrine persiste.

