const selected = document.querySelectorAll(".selected");
const optionsList = document.querySelectorAll(".option");

selected.forEach(s => {
    let opC = s.parentElement.firstElementChild;
    s.addEventListener("click", () => {
        opC.classList.toggle("active");
    });
});


optionsList.forEach(o => {
    let select = o.parentElement.parentElement.lastElementChild;
    let optionsC = o.parentElement.parentElement.firstElementChild;
    o.addEventListener("click", () => {
        select.firstElementChild.innerHTML = o.querySelector("label").innerHTML;
        optionsC.classList.remove("active");
        console.log(select.lastElementChild);
        select.lastElementChild.value = o.querySelector("label").innerHTML;
    });
});


/**Select Search */
let selectSearch = document.querySelectorAll(".select-box-search");
let titleSelect = '';
let searchInp = '';
let options = '';

let states = ["Thies", "Dakar", "Saint-Louis", "Bamako", "Lome", "Diourbel"];

function addState() {
    selectSearch.forEach(s => {
        titleSelect = s.firstElementChild;
        options = s.querySelector('.options');
        options.innerHTML = "";
        states.forEach(state => {
            let li = `<li onclick="updateName(this)">${state}</li>`;
            options.insertAdjacentHTML("beforeend", li);
        });
    });
}

function updateName(selectedLi) {
    selectSearch.forEach(s => {
        titleSelect = s.firstElementChild;
        searchInp = s.querySelector('input');
        options = s.querySelector('.options');

        searchInp.value = "";
        addState(options);
        s.classList.toggle("active");
        titleSelect.firstElementChild.innerText = selectedLi.innerText;
    });
}

addState();


selectSearch.forEach(s => {
    titleSelect = s.firstElementChild;
    searchInp = s.querySelector('input');
    options = s.querySelector('.options');

    searchInp.addEventListener("keyup", () => {
        let arr = [];
        let searchedVal = searchInp.value.toLowerCase();
        arr = states.filter(data => {
            return data.toLowerCase().startsWith(searchedVal);
        }).map(data => `<li onclick="updateName(this)">${data}</li>`).join("");
        options.innerHTML = arr ? arr : `<p>Non trouvé</p>`;
    });

    titleSelect.addEventListener("click", () => {
        s.classList.toggle("active");
    })
});


/** Select multiple */
const selectmultiple = document.querySelectorAll(".select-style-multiple");

selectmultiple.forEach(sm => {
    inputType = sm.querySelectorAll(".title-select-multiple");

    let title = '';
    inputType.forEach(i => {
        title = i.querySelector(".title").innerHTML;

        i.addEventListener("click", () => {
            items = i.parentElement.querySelectorAll(".item-text");
            console.log(i.items);
            i.parentElement.classList.toggle("open");
            items.forEach(item => {
                item.addEventListener("click", () => {
                    item.classList.toggle("checked");
                    let checked = item.parentElement.querySelectorAll(".checked"),
                        inputText = i.querySelector(".title");
                    if (checked && checked.length > 0) {
                        inputText.innerText = `${checked.length} Selectionnés`;
                    } else {
                        inputText.innerText = title;
                    }
                });
            });
        });
    });
});
