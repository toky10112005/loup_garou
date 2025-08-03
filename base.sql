CREATE DATABASE Loup_Garou;
USE Loup_Garou;

CREATE TABLE joueur(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(55) UNIQUE
);

CREATE TABLE role(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) UNIQUE,
    description TEXT,
     image VARCHAR(200)
);



INSERT INTO role (nom, description, image) VALUES
('Loup-Garou', 'Un membre des Loups-Garous qui dévore les villageois chaque nuit.', '../Assets/images/loup-garou.jpg'),
('Villageois', 'Un simple villageois sans pouvoir spécial, qui vote pour éliminer les suspects pendant le jour.', '../Assets/images/villageois.jpg'),
('Voyante', 'Peut espionner un joueur chaque nuit pour découvrir sa véritable nature.', '../Assets/images/voyante.jpg'),
('Sorcière', 'Possède une potion de vie et une potion de mort qu''elle peut utiliser une fois chacune.', '../Assets/images/sorciere.jpg'),
('Chasseur', 'Lorsqu''il est éliminé, il emporte avec lui le joueur de son choix.', '../Assets/images/chasseur.jpg'),
('Cupidon', 'Le premier jour, il peut former un couple de deux joueurs qui devront se protéger.', '../Assets/images/cupidon.jpg'),
('Petite Fille', 'Peut espionner les Loups-Garous pendant leur réveil, mais risque de se faire tuer si elle est découverte.', '../Assets/images/petite-fille.jpg'),
('Voleur', 'Au début du jeu, il peut échanger son rôle avec celui d''un autre joueur (sauf certains rôles spéciaux).', '../Assets/images/voleur.jpg'),
('Salvateur', 'Peut protéger un joueur chaque nuit contre une attaque des Loups-Garous (mais pas le même deux nuits de suite).', '../Assets/images/salvateur.jpg'),
('Ancien', 'Doit être éliminé deux fois par les Loups-Garous pour mourir. Si les villageois le tuent, ils perdent leurs pouvoirs.', '../Assets/images/ancien.jpg'),
('Idiot du Village', 'S''il est éliminé par le vote, il survit mais ne peut plus voter.', '../Assets/images/idiot-du-village.jpg'),
('Joueur de Flûte', 'Doit charmer tous les autres joueurs pour gagner. Les charmés deviennent alors des Enfants du Joueur de Flûte.', '../Assets/images/joueur-de-flute.jpg'),
('Corbeau', 'Peut accuser un joueur chaque nuit, ce qui lui fera recevoir 2 voix supplémentaires le lendemain.', '../Assets/images/corbeau.jpg'),
('Loup Blanc', 'Un Loup-Garou solitaire qui doit éliminer tous les autres Loups-Garous avant de pouvoir gagner avec les villageois.', '../Assets/images/loup-blanc.jpg'),
('Ange', 'Doit être éliminé le premier jour pour gagner seul.', '../Assets/images/ange.jpg'),
('Boucher', 'Peut sacrifier un autre joueur une fois dans la partie pour se protéger.', '../Assets/images/boucher.jpg'),
('Enfant Sauvage', 'Au début du jeu, choisit un modèle qu''il doit imiter pour gagner.', '../Assets/images/enfant-sauvage.jpg'),
('Frère', 'Fait partie d''une fratrie secrète avec d''autres Frères.', '../Assets/images/frere.jpg'),
('Soeur', 'Fait partie d''une fratrie secrète avec d''autres Soeurs.', '../Assets/images/soeur.jpg'),
('Loup-Garou Amnésique', 'Ne sait pas qu''il est un Loup-Garou jusqu''à ce qu''on le lui révèle.', '../Assets/images/loup-garou-amnesique.jpg'),
('Loup-Garou Infect Père', 'Le premier joueur qu''il tue devient un Loup-Garou.', '../Assets/images/loup-garou-infect-pere.jpg'),
('Maire', 'Élu par les villageois, son vote compte double.', '../Assets/images/maire.jpg'),
('Renard', 'Peut tester trois joueurs adjacents chaque nuit pour savoir si l''un d''eux est Loup-Garou.', '../Assets/images/renard.jpg'),
('Troublemaker', 'Peut échanger les rôles de deux autres joueurs pendant la nuit.', '../Assets/images/troublemaker.jpg');