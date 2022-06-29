CREATE TABLE Utilisateur(
   pseudoU VARCHAR(40),
   mailU VARCHAR(80),
   mdpU VARCHAR(40),
   PRIMARY KEY(pseudoU)
);

CREATE TABLE Prestations(
   idPrestation INT,
   nomPrestation VARCHAR(150),
   prixPrestation VARCHAR(15),
   dureePrestation VARCHAR(50),
   descPrestation VARCHAR(600),
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

CREATE TABLE ArticlePdf(
   idArticle INT,
   nomArticle VARCHAR(100),
   cheminArticle VARCHAR(60),
   PRIMARY KEY(idArticle)
);

CREATE TABLE ArticleLien(
   idArticle INT,
   nomArticle VARCHAR(100),
   lienArticle VARCHAR(60),
   PRIMARY KEY(idArticle)
);

CREATE TABLE Podcast(
   idPodcast INT,
   nomPodcast VARCHAR(100),
   lienPodcast VARCHAR(60),
   PRIMARY KEY(idPodcast)
);

CREATE TABLE Critiques(
   idAvis INT AUTO_INCREMENT,
   note INT,
   avis VARCHAR(600),
   pseudoU VARCHAR(40) NOT NULL,
   PRIMARY KEY(idAvis),
   FOREIGN KEY(pseudoU) REFERENCES Utilisateur(pseudoU)
);





INSERT INTO Prestations Values(1,"Atelier massage bébé à domicile","60E","1h30","Je viens avec un poupon pour vous guider sur le massage. C'est vous qui massez votre bébé. Un moment de détente, de lien entre le parent et le bébé.
Je propose quelques massages pour soulager les maux du quotidien du jeune enfant (douleurs dentaires et problèmes digestifs).
C’est un temps de partage et d’écoute.");

INSERT INTO Prestations Values(2,"Massage femme enceinte à domicile","90E","1h30","Un moment rien que pour vous, un massage à l’huile doux et enveloppant qui permet de soulager les tensions liées à la
grossesse. Je pratique le massage avec une huile bio de Lyon de mon partenaire Nature safe sans huiles essentielles. Il est recommandé d’attendre le troisième mois de grossesse mais
le massage peut se faire jusqu’à la fin de la grossesse.");

INSERT INTO Prestations Values(3,"Massage post natal à domicile","90E","1h30","C’est un massage à l’huile pour se détendre, pour se ressourcer, un soin pour soi qui
apaise.
Se réapproprier son corps en douceur, petit à petit. Prendre le temps de s’accorder des moments pour soi.
L’huile Nature Safe convient également aux femmes allaitantes.");

INSERT INTO Prestations Values(4,"Accompagnement parental à domicile","50E","1h","Je vous accompagne pour des situations diverses sur le
bébé et l’enfant (ex jeux séparation, sommeil…) c’est un
accompagnement personnalisé avec vos attentes et vos
questionnements, je suis à l’écoute, sans jugements.
Je vous aide à prendre confiance dans votre rôle de parent.
C’est vous qui connaissez le mieux votre enfant.");

INSERT INTO Prestations Values(5,"Baby planner à l'heure","50E","1h","C’est un accompagnement pour les futurs parents (liste de
naissance, liste des jeux, aménagement de la chambre…). Je suis à
l’écoute de toutes vos questions et interrogations.
Un accompagnement pour se sentir soutenu et accompagné avant l’arrivée du bébé.");

INSERT INTO Prestations Values(6,"Relais de nuit 19h30 06h30","180E","Une nuit","Devenir parent est un changement de vie, on manque de temps, de sommeil.
Avec la fatigue, on devient moins patient et il est parfois difficile de faire la sieste avec la reprise
du travail… Je suis là pour vous.
J’accompagne pendant la nuit votre bébé, enfant pour vous permettre de vous reposez.
Un moment de lâcher prise pour pouvoir récupérer des heures de sommeil en toute
sérénité.
Les horaires sont modifiables en fonction de vos besoins.");

INSERT INTO ArticlePdf VALUES (1,"La motricité", "laMotricite.pdf");

INSERT INTO ArticleLien VALUES (2,"Quels livres proposer aux jeunes enfants ?", "https://blog.berceaumagique.com/livres-jeunes-enfants/%22");
INSERT INTO ArticleLien VALUES (3,"Séparation et retrouvailles", "https://blog.berceaumagique.com/separations-et-retrouvailles/");


INSERT INTO Partenaires VALUES (1, "Nature Safe", "Nature Safe marque de cosmétiques bio fabriqué à Lyon n’hésitez pas à aller voir son site.", "https://www.naturesafe-shop.com");
INSERT INTO Partenaires VALUES (2, "Pereski", "Les coffrets Pereski des cartes rigides qui convient au bébé dès la naissance.

Un coté noir et un coté blanc pour jouer sur les contrastes et attirer la curiosité du tout petit comme pour les plus grand.

Un code à l’intérieur pour entendre les bruits des animaux.

Mon outil favori pendant les ateliers massage bébé.

Grâce au code LAUREEJE15 bénéficié de 15% de réduction sur votre première commande. Code premium : LAUREEJE", "https://pereski.co");

INSERT INTO Partenaires VALUES (3, "We Partum", "Je suis inscrite sur la plate forme We Partum qui accompagne des jeunes et futurs parents dans leurs vie perso et pro.", "https://www.wepartum.fr");
INSERT INTO Partenaires VALUES (4, "Gazouyi", "Application Gazouyi vous propose des activités pour vous amuser avec votre enfant en l’aidant à grandir.", "https://www.gazouyi.com");
INSERT INTO Partenaires VALUES (5, "Hopi Family", "Hopi Family le cadeau de naissance qui chouchoute les parents (service de ménage, nounou de nuit, massage, portage, livraison de repas …).", "https://hopi.family/");

INSERT INTO `PhotoP` (`idPP`, `cheminPP`, `idPartenaire`) VALUES
(1, 'naturesafe.png', 1),
(2, 'pereski1.png', 2),
(3, 'pereski2.jpg', 2),
(4, 'gazouyi.png', 4),
(5, 'wepartum.jpg', 3),
(6, 'hopi.png', 5);

INSERT INTO PhotoPr VALUES (1, 'massbebe.jpg', 1);
INSERT INTO PhotoPr VALUES (2, 'massfe.jpg', 2);
INSERT INTO PhotoPr VALUES (3, 'masspn.jpg', 3);
INSERT INTO PhotoPr VALUES (4, 'accpar.jpg', 4);
INSERT INTO PhotoPr VALUES (5, 'babypla.jpg', 5);
INSERT INTO PhotoPr VALUES (6, 'rldn.jpg', 6);






INSERT INTO Utilisateur VALUES("makkssou", "maxime.dgstpro@gmail.com", "yessaye");

INSERT INTO Critiques VALUES (1, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (2, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (3, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (4, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (5, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (6, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (7, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (8, 8, "super", "makkssou");
INSERT INTO Critiques VALUES (9, 8, "super", "makkssou");

