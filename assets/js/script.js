const root = document.documentElement

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




// Select all phone and desktop buttons
const buttons = document.querySelectorAll('.celular, .desktop');

// Select all 'celular' buttons
const celulares = document.querySelectorAll('.celular');

// Iterate over each 'celular' button
celulares.forEach(celular => {
  // Add click event listener
  celular.addEventListener('click', function() {
    // Get the colors of the palette associated with the clicked button
    const palette = this.closest('.paleta');
    const colors = Array.from(palette.querySelectorAll('.cor')).map(cor => getComputedStyle(cor).backgroundColor);

    // Set the colors in CSS variables
    colors.forEach((color, index) => {
      document.documentElement.style.setProperty(`--color-${index + 1}`, color);
    });

    // Set the modal background to the colors
    const modal = document.querySelector('#modalCelular .modal-content');
  });

  celular.setAttribute('data-bs-toggle', 'modal');
  celular.setAttribute('data-bs-target', '#modalCelular');
});

const desktops = document.querySelectorAll('.desktop');

// Iterate over each 'desktop' button
desktops.forEach(desktop => {
  // Add click event listener
  desktop.addEventListener('click', function() {
    // Get the colors of the palette associated with the clicked button
    const palette = this.closest('.paleta');
    const colors = Array.from(palette.querySelectorAll('.cor')).map(cor => getComputedStyle(cor).backgroundColor);

    // Set the colors in CSS variables
    colors.forEach((color, index) => {
      document.documentElement.style.setProperty(`--color-${index + 1}`, color);
    });

    // Set the modal background to the colors
    const modal = document.querySelector('#modalDesktop .modal-content');
    modal.style.background = `linear-gradient(45deg, var(--color-1), var(--color-2), var(--color-3))`;
  });

  desktop.setAttribute('data-bs-toggle', 'modal');
  desktop.setAttribute('data-bs-target', '#modalDesktop');
});

