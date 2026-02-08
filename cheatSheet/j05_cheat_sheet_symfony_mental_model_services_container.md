# 🧠 Symfony – Mental Model
## Services & Container

> Objectif : comprendre **ce qu’est vraiment un service** et **le rôle réel du container**.

---

## 🎯 Un service, c’est quoi (mentalement)

Un service, ce n’est PAS :
- juste « une fonction »
- juste « un truc magique de Symfony »

👉 Un service, c’est :
> **Un objet PHP réutilisable, dont Symfony gère la création et le partage**.

Exemples concrets :
- envoyer un email
- logger quelque chose
- calculer un prix
- accéder à une API

---

## 🧭 Pourquoi Symfony utilise des services

Sans services :
```php
$mailer = new Mailer();
$logger = new Logger();
```

Avec Symfony :
```php
public function index(MailerInterface $mailer)
```

👉 Symfony :
- sait **comment créer l’objet**
- sait **quand le réutiliser**
- sait **quoi injecter dedans**

---

## 📦 Le container, c’est quoi exactement

Le container est :
> **une grande carte de services**

Il sait :
- quels services existent
- comment les construire
- quels autres services ils utilisent

👉 Tu ne vois PAS le container.
👉 Tu lui **demandes** des services.

---

## 🔁 Injection de dépendances (la clé)

Quand tu écris :
```php
public function test(LoggerInterface $logger)
```

Symfony :
1. regarde le type
2. trouve le service correspondant
3. le fournit à ta méthode

👉 Tu ne fais jamais `new`.

---

## 🔌 Service dans un service

```php
class MailNotifier
{
    public function __construct(LoggerInterface $logger)
    {
    }
}
```

👉 Même règle :
- le service dépend d’un autre service
- le container s’en occupe

---

## ❌ Erreurs mentales fréquentes

- ❌ « Le container est un objet que je manipule »
- ❌ « Un service = une fonction »
- ❌ « Symfony devine tout tout seul »

---

## ✅ La bonne vision

- Service = objet métier ou technique
- Container = usine + annuaire
- Injection = demande explicite par le type

---

## 🧠 Phrase clé à retenir

> **Tu ne crées pas les services, tu les déclares et tu les demandes.**

