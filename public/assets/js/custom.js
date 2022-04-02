var toggler = document.getElementsByClassName("tree");
var i;
for (i = 0; i < toggler.length; i++) {
toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".tree-item-hidden").classList.toggle("tree-item-show");
});
}