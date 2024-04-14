var css = document.querySelector(":root")
var btntextalign = document.getElementById("textalign")

btntextalign.addEventListener("change", (e) => {
    console.log("btn")
    css.style.setProperty("--textalign", "center")
})