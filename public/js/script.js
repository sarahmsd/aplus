const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
    optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
    o.addEventListener("click", () => {
        selected.innerHTML = o.querySelector("label").innerHTML;
        optionsContainer.classList.remove("active");
    });
});



const selectVille = document.querySelector(".select-ville"),
    titleVille = selectVille.querySelector(".title-ville"),
    searchInp = selectVille.querySelector("input"),
    options = selectVille.querySelector(".options");


let states = ["Thies", "Dakar", "Saint-Louis", "Bamako", "Lome", "Diourbel"];

function addState() {
    options.innerHTML = "";
    states.forEach(state => {
        let li = `<li onclick="updateName(this)">${state}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
addState();

function updateName(selectedLi) {
    searchInp.value = "";
    addState();
    selectVille.classList.toggle("active");
    titleVille.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchedVal = searchInp.value.toLowerCase();
    arr = states.filter(data => {
        return data.toLowerCase().startsWith(searchedVal);
    }).map(data => `<li onclick="updateName(this)">${data}</li>`).join("");
    options.innerHTML = arr ? arr : `<p>Ville non trouvé</p>`;
});

titleVille.addEventListener("click", () => {
    selectVille.classList.toggle("active");
})


const inputType = document.querySelector(".input-type"),
    items = document.querySelectorAll(".item");

inputType.addEventListener("click", () => {
    inputType.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            contratText = document.querySelector(".contrat-text");

        if (checked && checked.length > 0) {
            contratText.innerText = `${checked.length} Selectionnés`;
        } else {
            contratText.innerText = "Type de contrat";
        }
    })
})

//pagination commence ici
let link = document.getElementsByClassName("link");

let currentValue = 1;

function activeLink() {
    for (l of link) {
        l.classList.remove("active");
    }
    event.target.classList.add("active");
    currentValue = event.target.value;
}

function backBtn() {
    if (currentValue > 1) {
        for (l of link) {
            l.classList.remove("active");
        }
        currentValue--;
        link[currentValue - 1].classList.add("active");
    }
}

function nextBtn() {
    if (currentValue < 3) {
        for (l of link) {
            l.classList.remove("active");
        }
        currentValue++;
        link[currentValue - 1].classList.add("active");
    }
}

//JAVASCRIPT LIRE LA SUIT

function myFunction() {
    var x = document.getElementById("details");
    if (x.style.display === "block") {
        x.style.display = "-webkit-box";
    } else {
        x.style.display = "block";
    }
}