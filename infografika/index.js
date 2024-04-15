var css = document.querySelector(":root")
var btntextalign = document.getElementById("textalign")
var btnvertical = document.getElementById("vertical")
var btnflex = document.getElementById("flexprnt")
var btnalign = document.getElementById("alignprnt")
var btnjustify = document.getElementById("justifyprnt")
var changedbtntextalign = true;
var changedbtnvertical = true;
var changedbtnflex = true;
var changedbtnalign = true;
var changedbtnjustify = true;

btntextalign.addEventListener("change", (e) => {
    if (changedbtntextalign) {
        css.style.setProperty("--textalign", "center")
        changedbtntextalign = false;
    } else {
        css.style.setProperty("--textalign", "left")
        changedbtntextalign = true;
    }
})
btnvertical.addEventListener("change", (e) => {
    if (changedbtnvertical) {
        css.style.setProperty("--displaygrid", "grid")
        changedbtnvertical = false;
    } else {
        css.style.setProperty("--displaygrid", "block")
        changedbtnvertical = true;
    }
})

btnflex.addEventListener("change", (e) => {
    if (changedbtnflex) {
        css.style.setProperty("--displayflex", "flex")
        changedbtnflex = false;
    } else {
        css.style.setProperty("--displayflex", "block")
        changedbtnflex = true;
    }
})

btnalign.addEventListener("change", (e) => {
    if (changedbtnalign) {
        css.style.setProperty("--aligncenter", "center")
        changedbtnalign = false;
    } else {
        css.style.setProperty("--aligncenter", "normal")
        changedbtnalign = true;
    }
})
btnjustify.addEventListener("change", (e) => {
    if (changedbtnjustify) {
        css.style.setProperty("--justifycontent", "center")
        changedbtnjustify = false;
    } else {
        css.style.setProperty("--justifycontent", "left")
        changedbtnjustify = true;
    }
})