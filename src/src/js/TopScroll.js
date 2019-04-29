// Når brukeren trykker på tilbake knappene vi har på nettsiden vil denne funksjonen føre dem tilbake til toppen
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}