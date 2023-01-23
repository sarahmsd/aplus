let tag_filters = document.querySelectorAll('.label-filter');
let options = '';
tag_filters.forEach(tag => {
    tag.addEventListener("click", function(){
        options = tag.parentElement.querySelector('.filter-options');                
        if(options.classList.contains('disabled')){
            options.classList.remove("disabled");
            let items = options.querySelectorAll(".filter-item");

            items.forEach(item => {
                item.addEventListener('click', function(){
                    if(item.firstElementChild.checked === true){
                        let filtre = item.lastElementChild.innerHTML;
                        tag.firstElementChild.innerHTML = filtre;
                        options.classList.add("disabled");
                    }
                });
            });
        }else
            options.classList.add("disabled");
    });
});