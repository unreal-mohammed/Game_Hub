function toggleMenu() {
    const menu = document.getElementById("menu");

    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
}

function openModal(title, desc, rate) {
    document.getElementById("gameModal").style.display = "flex";

    document.getElementById("gameTitle").innerText = title;
    document.getElementById("gameDesc").innerText = desc;
    document.getElementById("gameRate").innerText = "⭐ Rating: " + rate;
}

function closeModal() {
    document.getElementById("gameModal").style.display = "none";
}

    function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("active");
}
