# 🧠 Symfony – Mental Model
## Doctrine – Relations

> Objectif : comprendre qui pilote réellement la relation et comment Doctrine l’écrit en base.

---

## 🎯 Pourquoi les relations existent

En base de données :
- Une table contient une **clé étrangère**
- Cette clé pointe vers une autre table

Doctrine reproduit cette logique… en objets PHP.

---

## 🧱 ManyToOne (Owning Side)

Exemple :
Un `Product` appartient à une `Category`.

En base :
```
product
id | name | category_id
```

👉 La clé étrangère est dans `product`.

Donc côté entité :

```php
#[ManyToOne(targetEntity: Category::class)]
private ?Category $category = null;
```

### 🧠 Ce côté est le **Owning Side**

- Il contient la clé étrangère
- Doctrine l’utilise pour écrire en base
- C’est lui qui pilote la relation

---

## 🔁 OneToMany (Inverse Side)

Dans `Category` :

```php
#[OneToMany(mappedBy: 'category', targetEntity: Product::class)]
private Collection $products;
```

### 🧠 Ce côté est le **Inverse Side**

- Il ne contient aucune clé étrangère
- Il ne pilote pas l’écriture en base
- Il permet la navigation objet

👉 C’est une vue pratique côté PHP.

---

## 🔑 Owning vs Inverse – Différence clé

| Owning Side (ManyToOne) | Inverse Side (OneToMany) |
|--------------------------|--------------------------|
| Contient la clé étrangère | Ne contient rien en base |
| Doctrine écrit depuis ici | Simple miroir objet |
| Obligatoire pour la relation | Optionnel techniquement |

---

## ⚠️ Piège classique

Modifier seulement le côté inverse :

```php
$category->addProduct($product);
```

❌ Ne suffit pas.

Il faut mettre à jour le owning side :

```php
$product->setCategory($category);
```

👉 Doctrine regarde uniquement le owning side pour synchroniser la base.

---

## 🎯 Bonne pratique

Dans les méthodes générées (`addProduct()`), Symfony met à jour les deux côtés.

Toujours vérifier que :
- le owning side est correctement défini
- la relation est cohérente des deux côtés

---

## 🧠 Phrase clé à retenir

> La relation vit là où la clé étrangère est stockée.

Doctrine écrit en base uniquement depuis le côté owning.

