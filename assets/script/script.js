const cardsData = [
    {
        title: "Yvette Binet",
        imageSrc: "./assets/img/portrait-1.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Hardouin Arpin",
        imageSrc: "./assets/img/portrait-2.jpg",
        description: "Back-end developpeur.",
        link: "#"
    },
    {
        title: "Francis Cressac",
        imageSrc: "./assets/img/portrait-3.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Amitee Cartier",
        imageSrc: "./assets/img/portrait-4.jpg",
        description: "Back-end developpeur.",
        link: "#"
    },
    {
        title: "Blanche Fluet",
        imageSrc: "./assets/img/portrait-5.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Burrell Charbonneau",
        imageSrc: "./assets/img/portrait-6.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Dorothée Chartier",
        imageSrc: "./assets/img/portrait-7.jpg",
        description: "Back-end developpeur.",
        link: "#"
    },
    {
        title: "Minette Veilleux",
        imageSrc: "./assets/img/portrait-8.jpg",
        description: "Back-end developpeur.",
        link: "#"
    },
    {
        title: "Constance Laurent",
        imageSrc: "./assets/img/portrait-9.jpg",
        description: "developpeur Full Stack.",
        link: "#"
    },
    {
        title: "Marc Lécuyer",
        imageSrc: "./assets/img/portrait-10.jpg",
        description: "developpeur Full Stack.",
        link: "#"
    },
    {
        title: "Julie Lesage",
        imageSrc: "./assets/img/portrait-11.jpg",
        description: "developpeur Full Stack.",
        link: "#"
    },
    {
        title: "Fabienne Croquetaigne",
        imageSrc: "./assets/img/portrait-12.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Nicolette Poissonnier",
        imageSrc: "./assets/img/portrait-13.jpg",
        description: "Front-end developpeur.",
        link: "#"
    },
    {
        title: "Aubin Caya",
        imageSrc: "./assets/img/portrait-14.jpg",
        description: "developpeur Full Stack.",
        link: "#"
    },
    {
        title: "Julien Royer",
        imageSrc: "./assets/img/portrait-15.jpg",
        description: "developpeur Full Stack.",
        link: "#"
    },

];

document.addEventListener("DOMContentLoaded", function () {
    const liste = document.querySelector(".liste");

    // Génération des cartes
    cardsData.forEach((cardData) => {
        const card = createCard(cardData);
        liste.appendChild(card);
    });
});

function createCard(data) {
    // Création d'un élément de carte
    const card = document.createElement("div");
    card.classList.add("card");

    // Ajout de l'image
    const img = document.createElement("img");
    img.src = data.imageSrc;
    img.alt = data.title;
    card.appendChild(img);

    // Ajout du titre
    const title = document.createElement("h5");
    title.textContent = data.title;
    card.appendChild(title);

    // Ajout de la description
    const description = document.createElement("p");
    description.textContent = data.description;
    card.appendChild(description);

    // Ajout du lien
    const link = document.createElement("a");
    link.href = data.link;
    link.textContent = "Contactez";
    card.appendChild(link);

    return card;
}