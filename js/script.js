//Lancer de dés aléatoire
function dicethrow(){
    alert("resultat: "+Math.floor(Math.random() * (21-1)+1));
}

//récuperation du mebu burger
const links = document.querySelectorAll("nav li");

//passage menu burger en phase active
icons.addEventListener("click", () => {
  nav.classList.toggle("active");
});

//passage menu burger en phase inactive
links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");

  });
});




