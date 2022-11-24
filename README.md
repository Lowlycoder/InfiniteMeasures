# ColibrIT APP

### Plugins:

- Prettier (avec format on save) **requis**
- Pour VSCode : PHP Intelephense, PHP DocBlocker, PHP NameSpace Resolver
- Copilote **interdit**

Pour copier le projet sur votre ordinateur exécutez les commandes suivantes dans le dossier ou vous voulez que le projet
soit créé (un dossier sera créé à cet emplacement, contenant tout le projet).

```
git config --global user.name "{Prénom Nom}"
git config --global user.email "{youremail@gitlab.com}"
git clone git@gitlab.com:benji78/APP-G3A.git
cd APP-G3A
npm install
./node_modules/.bin/browser-sync --version
code .
```

Pour lancer un serveur local, ouvrez wampserver/mamp/lamp et ajouter le dossier du projet
`./node_modules/.bin/browser-sync start --proxy "localhost/mvc" --files "*"`

Récupérez le document .sql situé sur le drive et importez-le depuis phpMyAdmin pour générer votre BDD (cf. Internet)

### Mise à jour du projet

- Aller sur la branche main : `git checkout main`
- Mettre à jour : `git pull`
- Aller sur votre branche de travail : `git checkout {nom de ma branche}`
- Mettre à jour la branche par rapport à main : `git rebase main`
- Résoudre les conflits si vous en avez
- Et au boulot 😉

### Création d'issue

Sur GitLab créez une issue avant de commencer à travailler sur le projet. Le push sur la branche main est interdit.

L'issue a un titre cours et une description complète si possible, sauf si c'est vous qui travaillez dessus. Dans ce
cas-là merci de vous assigner à l'issue.

Une issue doit être sur un sujet précis : `Issue…` et **non** `Issue 5 : Faire tout le projet`

### Créer une branche

- Avoir une [issue](#création-dissue) ouverte
- [Mettre à jour le projet](#mise-à-jour-du-projet)
- Créer une nouvelle branche : `git branch {nom de ma branche}`
- Noms de branches : `{n° de l'issue}-{nom de l'issue}` ex : `13-fix-contact-form`
- Et au boulot 😉

### Commit

Pour sauvegarder l'état de votre projet, vous devez commit en local puis [push](#push) sur la remote (GitLab).

- `git commit -m "{votre nom de commit}"`
- Le message de commit doit être un court résume de vos changements. ex : `added header to login page`
  ou `fix contact form submit button`

### Push

Envoi vos commits locaux sur la remote (GitLab) et pouvoir créer une [MR](#merge-request).

- `git push`
- Résoudre les conflits si vous en avez

Après avoir push, vous aurez dans votre console Git un lien pour créer une [MR](#merge-request), ou directement
sur votre branche sur GitLab.

### Merge Request

Une fois la MR créée, vous pouvez voir vos changements dans l'environnement de test quand il sera.

Vous avez besoin que la MR soit acceptée pour qu'elle soit merge sur la branche main et accessible en production.

