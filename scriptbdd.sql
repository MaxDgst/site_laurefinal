CREATE TABLE Utilisateur(
   mailU VARCHAR(80),
   mdpU VARCHAR(40),
   pseudoU VARCHAR(40),
   PRIMARY KEY(mailU)
);

CREATE TABLE Prestations(
   idPrestation INT,
   nomPrestation VARCHAR(150),
   prixPrestation VARCHAR(15),
   dureePrestation VARCHAR(50),
   descPrestation VARCHAR(400),
   PRIMARY KEY(idPrestation)
);

CREATE TABLE PhotoPr(
   idPPr INT,
   cheminPPr VARCHAR(60),
   idPrestation INT NOT NULL,
   PRIMARY KEY(idPPr),
   FOREIGN KEY(idPrestation) REFERENCES Prestations(idPrestation)
);

CREATE TABLE Partenaires(
   idPartenaire INT,
   nomPartenaire VARCHAR(70),
   descPartenaire VARCHAR(3000),
   lienPartenaire VARCHAR(150),
   PRIMARY KEY(idPartenaire)
);

CREATE TABLE PhotoP(
   idPP INT,
   cheminPP VARCHAR(60),
   idPartenaire INT NOT NULL,
   PRIMARY KEY(idPP),
   FOREIGN KEY(idPartenaire) REFERENCES Partenaires(idPartenaire)
);

CREATE TABLE Article(
   idArticle INT,
   cheminArticle VARCHAR(60),
   lienArticle VARCHAR(60),   
   PRIMARY KEY(idArticle)
);

CREATE TABLE Podcast(
   idPodcast INT,
   cheminPodcast VARCHAR(60),
   PRIMARY KEY(idPodcast)
);

CREATE TABLE Critiques(
   note INT,
   avis VARCHAR(600),
   idPrestation INT NOT NULL,
   mailU VARCHAR(80) NOT NULL,
   PRIMARY KEY(note),
   FOREIGN KEY(idPrestation) REFERENCES Prestations(idPrestation),
   FOREIGN KEY(mailU) REFERENCES Utilisateur(mailU)
);


INSERT INTO Prestations Values(1,"Atelier massage bébé à domicile","60E","1h30","Je viens avec un poupon pour vous guider sur le massage. C'est vous qui massez votre bébé. Un moment de détente, de lien entre le parent et le bébé.
Je propose quelques massages pour soulager les maux du quotidien du jeune enfant (douleurs dentaires et problèmes digestifs).
C’est un temps de partage et d’écoute.");

INSERT INTO Prestations Values(2,"Massage femme enceinte à domicile","90E","1h30","Un moment rien que pour vous, un massage à l’huile doux et
enveloppant qui permet de soulager les tensions liés à la
grossesse. Je pratique le massage avec une huile bio de Lyon
Nature safe sans huiles essentielles.
Il est recommandé d’attendre le troisième mois de grossesse,
le massage peut se faire jusqu’à la fin de la grossesse.");

INSERT INTO Prestations Values(3,"Massage post natal à domicile","90E","1h30","C’est un massage à l’huile pour se détendre, pour se ressourcer un soin pour soi qui
apaise.
Se réapproprier son corps en douceur petit à petit.
Pouvoir prendre le temps de s’accorder des moments pour soi.
L’huile Nature Safe convient également au femme allaitante.");

INSERT INTO Prestations Values(4,"Accompagnement parental à domicile","50E","1h","Je vous accompagne pour des situations diverses sur le
bébé et l’enfant (ex jeux séparation, sommeil…) c’est un
accompagnement personnalisé avec vos attentes et vos
questionnements, je suis à l’écoute, sans jugements.
Je vous aide à prendre confiance dans votre rôle de parent.
C’est vous qui connaissez le mieux votre enfant.");

INSERT INTO Prestations Values(5,"Baby planner à l'heure","50E","1h","C’est un accompagnement pour les futurs parents ( liste de
naissance, liste des jeux, aménagement de la chambre…) je suis à
l’écoute de toutes vos questions et vos interrogations.
Un accompagnement pour se sentir soutenu et accompagné avant l’arrivée du bébé.");

INSERT INTO Prestations Values(6,"Relais de nuit 19h30 06h30","180E","Une nuit","Devenir parent est un changement de vie, manque de temps, de sommeil.
Avec la fatigue, on devient moins patient et parfois difficile de faire la sieste avec la reprise
du travail, le manque de temps….je suis là pour vous.
J’accompagne pendant la nuit votre bébé, enfant pour vous permettre de vous reposez.
Un moment de lâcher prise pour pouvoir récupérer des heures de sommeil en toute
sérénité.
Les horaires sont modifiables en fonction de vos besoins.");

INSERT INTO article VALUES (1, "laMotricite.pdf", NULL);
INSERT INTO article VALUES (2, NULL , "https://blog.berceaumagique.com/livres-jeunes-enfants/%22");

INSERT INTO partenaires VALUES (1, "Nature Safe", "Nature Safe marque de cosmétiques bio fabriqué à Lyon n’hésitez pas à aller voir son site.", "https://www.naturesafe-shop.com");
INSERT INTO partenaires VALUES (2, "Pereski", "Les coffrets Pereski des cartes rigides qui convient au bébé dès la naissance.

Un coté noir et un coté blanc pour jouer sur les contrastes et attirer la curiosité du tout petit comme pour les plus grand.

Un code à l’intérieur pour entendre les bruits des animaux.

Mon outil favori pendant les ateliers massage bébé.

Grâce au code LAUREEJE15 bénéficié de 15% de réduction sur votre première commande.", "https://pereski.co");

INSERT INTO partenaires VALUES (3, "We Partum", "Je suis inscrite sur la plate forme We Partum qui accompagne des jeunes et futurs parents dans leurs vie perso et pro.", "https://www.wepartum.fr");
INSERT INTO partenaires VALUES (4, "Gazouyi", "Application Gazouyi vous propose des activités pour vous amuser avec votre enfant en l’aidant à grandir.", "https://www.gazouyi.com");

INSERT INTO `photop` (`idPP`, `cheminPP`, `idPartenaire`) VALUES
(1, 'naturesafe.png', 1),
(2, 'pereski1.png', 2),
(3, 'pereski2.jpg', 2),
(4, 'gazouyi.png', 4),
(5, 'wepartum.jpg', 3);