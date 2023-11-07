function expandirCor(element){
    const cores = document.querySelectorAll('.cor');
    cores.forEach(cor => {
        if (cor.classList.contains('expandido') && cor !== element) {
            cor.classList.remove('expandido');
        } else if (cor === element) {
            cor.classList.toggle('expandido');
        }
    });
}

function copiarHex(element){
    const cor = element.innerHTML;
    navigator.clipboard.writeText(cor).then(() => {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3';
        alertDiv.role = 'alert';
        alertDiv.innerHTML = 'Copiado para a área de transferência!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        document.body.appendChild(alertDiv);
        setTimeout(() => {
            alertDiv.remove();
        }, 3000);
    });
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

// Select all phone and desktop buttons
const buttons = document.querySelectorAll('.celular, .desktop');

// Iterate over each button
buttons.forEach(button => {
  // Add click event listener
  button.addEventListener('click', function() {
    // Get the color of the palette associated with the clicked button
    const palette = this.closest('.paleta');
    const color = getComputedStyle(palette.querySelector('.cor')).backgroundColor;

    // Change the color of the page
    document.body.style.backgroundColor = color;
  });
});

toggleCursor();

window.addEventListener("resize", toggleCursor);

