function expandirCor(element){
    const cores = document.querySelectorAll('.cor');
    cores.forEach(cor => {
        cor.classList.remove('expanded');
    });
    element.classList.toggle('expanded');
}

document.addEventListener("mousemove", (e) => {
    const cursor = document.querySelector(".custom-cursor");
    cursor.style.top = e.clientY + "px";
    cursor.style.left = e.clientX + "px";
});

const elements = document.querySelectorAll("*");
elements.forEach(element => {
    element.addEventListener("mouseover", (e) => {
        const cursor = document.querySelector("#cursor");
        if (e.target.tagName === "A" || e.target.tagName === "BUTTON" || e.target.tagName === "INPUT") {
            cursor.setAttribute("src", "assets/images/roller.svg");
        } else {
            cursor.setAttribute("src", "assets/images/brush.svg");
        }
    });
});

function toggleCursor() {
    if (window.innerWidth < 768) {
        document.querySelector(".custom-cursor").style.display = "none";
    } else {
        document.querySelector(".custom-cursor").style.display = "block";
    }
}

toggleCursor();

window.addEventListener("resize", toggleCursor);
