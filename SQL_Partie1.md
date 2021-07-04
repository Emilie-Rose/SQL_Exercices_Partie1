# Exercice 01:
## Créer une base de données languages.

CREATE DATABASE 'languages';

# Exercice 02:
## Créer une base de données webDevelopment avec l’encodage UTF-8.

CREATE DATABASE 'webDevelopment';

# Exercice 03:
## Créer une base de données frameworks avec l’encodage UTF-8 si elle n’existe pas.

CREATE DATABASE IF NOT EXISTS 'frameworks' CHARACTER SET utf8;

# Exercice 04: 
## Créer une base de données languages avec l’encodage UTF-8 si elle n’existe pas.

CREATE DATABASE IF NOT EXISTS 'languages' CHARACTER SET utf8;

# Exercice 05: 
## Supprimer la base de données languages.

DROP DATABASE 'languages';

# Exercice 06:
## Supprimer la base de données frameworks si elle existe.

DROP DATABASE IF EXISTS 'frameworks';

# Exercice 07:
## Supprimer la base de données languages si elle existe

DROP DATABASE IF EXISTS 'languages';