**1°) Injection de dépendance**
L’injection de dépendance est une technique qui consiste, lorsqu'une classe a besoin d’une autre classe, à placer la 
seconde en paramètre du constructeur de la première.

**2°) Design pattern Observer**
Comme son nom l’indique, le design pattern Observer sert à observer. Il consiste à structurer son code autour d’une 
classe dont il importe d’observer l’état, et d’une ou de plusieurs classes observatrices, qui se tiennent au courant 
de l’état de la classe observée et s’informe de ses évolutions. 

C’est un design pattern que l’on peut mettre en œuvre quant l’enjeu du programme réside dans un changement d’état.

**3°) Temporal Coupling**
On parle de temporal coupling quand plusieurs méthodes d’une classe doivent être exécutées dans un ordre chronologique 
particulier pour le bon fonctionnement d’un programme. Plus précisément, on dit de ces méthodes qu’elles sont couplées 
avec du temporal coupling.


**Quelques remarques concernant la deuxième partie**

Pour voir les mauvaises pratiques, il faut regarder les classes se terminant par le suffixe "_bad".

2 mauvaises pratiques ont été illustrées : l'utilisation de else (cf InMemoryArticle_bad) et l'utilisation 
d'abbréviation (cf LoggedArticle_bad).