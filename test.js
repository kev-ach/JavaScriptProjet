console.log("Bonjour Kevin"); //Affiche le contenu en parametre de la fonction
console.log(4 + 5);
console.log("4 + 5");
console.log("4" + "5");

// Définition de l'objet Person via un constructeur
function Person(nick, age, sex, parent, work, friends) {
    this.nick = nick;
    this.age = age;
    this.sex = sex;
    this.parent = parent;
    this.work = work;
    this.friends = friends;
}

// On crée des variables qui vont contenir une instance de l'objet Person :
var seb = new Person('Sébastien', 23, 'm', 'aîné', 'JavaScripteur', []);
var lau = new Person('Laurence', 19, 'f', 'soeur', 'Sous-officier', []);

alert(seb.nick); // Affiche : « Sébastien »
alert(lau.nick); // Affiche : « Laurence »

https://openclassrooms.com/courses/dynamisez-vos-sites-web-avec-javascript/les-objets-5
