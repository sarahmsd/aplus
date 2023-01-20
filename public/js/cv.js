$(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.addFormation'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {

        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelformation = document.createElement('label');
        labelformation.for = "formation";
        labelformation.innerText = "Formation/Diplome";

        let formation = document.createElement("input");
        formation.type = "text";
        formation.className = "form-control";
        formation.name = "formation[]";
        formation.id = "formation";

        let labeletablissement = document.createElement('label');
        labeletablissement.for = "etablissement";
        labeletablissement.innerText = "Etablissement";


        let etablissement = document.createElement("input");
        etablissement.type = "text";
        etablissement.className = "form-control";
        etablissement.name = "etablissement[]";
        etablissement.id = "etablissement";

        let labelVille = document.createElement('label');
        labelVille.for = "ville";
        labelVille.innerText = "Ville";


        let ville = document.createElement("input");
        ville.type = "text";
        ville.className = "form-control";
        ville.name = "ville[]";
        ville.id = "ville";


        let labeldateDeb = document.createElement('label');
        labeldateDeb.for = "dateDeb";
        labeldateDeb.innerText = "Date de Debut";


        let dateDeb = document.createElement("input");
        dateDeb.type = "date";
        dateDeb.className = "form-control";
        dateDeb.name = "dateDeb[]";
        dateDeb.id = "dateDeb";

        let labeldateFin = document.createElement('label');
        labeldateFin.for = "dateFin";
        labeldateFin.innerText = "Date de Fin";
        labeldateFin.className = "text-secondary";


        let dateFin = document.createElement("input");
        dateFin.type = "date";
        dateFin.className = "form-control";
        dateFin.name = "dateFin[]";
        dateFin.id = "dateFin";

        let labeldescription = document.createElement('label');
        labeldescription.for = "description";
        labeldescription.innerText = "Description";
        labeldescription.className = "text-secondary";


        let description = document.createElement("textarea");
        description.className = "form-control";
        description.name = "description[]";
        description.id = "description";

        let divcol1 = document.createElement("div");
        divcol1.className = "col-12";
        divcol1.appendChild(labelformation);
        divcol1.appendChild(formation);

        let divcol2 = document.createElement("div");
        divcol2.className = "col-6";
        divcol2.appendChild(labeletablissement);
        divcol2.appendChild(etablissement);

        let divcol3 = document.createElement("div");
        divcol3.className = "col-6";
        divcol3.appendChild(labelVille);
        divcol3.appendChild(ville);

        let divcol4 = document.createElement("div");
        divcol4.className = "col-6";
        divcol4.appendChild(labeldateDeb);
        divcol4.appendChild(dateDeb);

        let divcol5 = document.createElement("div");
        divcol5.className = "col-6";
        divcol5.appendChild(labeldateFin);
        divcol5.appendChild(dateFin);

        let divcol6 = document.createElement("div");
        divcol6.className = "col-12";
        divcol6.appendChild(labeldescription);
        divcol6.appendChild(description);


        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);

        let div2 = document.createElement("div");
        div2.className = "row mb-3";
        div2.appendChild(divcol2);
        div2.appendChild(divcol3);


        let div4 = document.createElement("div");
        div4.className = "row mb-3";
        div4.appendChild(divcol4);
        div4.appendChild(divcol5);

        let div5 = document.createElement("div");
        div5.className = "row mb-3";
        div5.appendChild(divcol6);


        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);
        div.appendChild(div2);
        div.appendChild(div4);
        div.appendChild(div5);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});


$(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.addExperience'); //Add button selector
    var wrapper = $('.wraper'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {

        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelfonction = document.createElement('label');
        labelfonction.for = "fonction";
        labelfonction.innerText = "Fonction/Poste";

        let fonction = document.createElement("input");
        fonction.type = "text";
        fonction.className = "form-control";
        fonction.name = "fonction[]";
        fonction.id = "fonction";

        let labelentreprise = document.createElement('label');
        labelentreprise.for = "entreprise ";
        labelentreprise.innerText = "Entreprise";


        let entreprise = document.createElement("input");
        entreprise.type = "text";
        entreprise.className = "form-control";
        entreprise.name = "entreprise[]";
        entreprise.id = "entreprise";

        let labelLieu = document.createElement('label');
        labelLieu.for = "lieu";
        labelLieu.innerText = "Lieu";


        let lieu = document.createElement("input");
        lieu.type = "text";
        lieu.className = "form-control";
        lieu.name = "lieu[]";
        lieu.id = "lieu";


        let labeldateDebExp = document.createElement('label');
        labeldateDebExp.for = "dateDebExp";
        labeldateDebExp.innerText = "Date de Debut";


        let dateDebExp = document.createElement("input");
        dateDebExp.type = "date";
        dateDebExp.className = "form-control";
        dateDebExp.name = "dateDebExp[]";
        dateDebExp.id = "dateDebExp";

        let labeldateFinExp = document.createElement('label');
        labeldateFinExp.for = "dateFinExp";
        labeldateFinExp.innerText = "Date de Fin";
        labeldateFinExp.className = "text-secondary";


        let dateFinExp = document.createElement("input");
        dateFinExp.type = "date";
        dateFinExp.className = "form-control";
        dateFinExp.name = "dateFinExp[]";
        dateFinExp.id = "dateFinExp";

        let labeldescription = document.createElement('label');
        labeldescription.for = "decrire";
        labeldescription.innerText = "Description";
        labeldescription.className = "text-secondary";


        let description = document.createElement("textarea");
        description.className = "form-control";
        description.name = "decrire[]";
        description.id = "decrire";

        let divcol1 = document.createElement("div");
        divcol1.className = "col-12";
        divcol1.appendChild(labelfonction);
        divcol1.appendChild(fonction);

        let divcol2 = document.createElement("div");
        divcol2.className = "col-6";
        divcol2.appendChild(labelentreprise);
        divcol2.appendChild(entreprise);

        let divcol3 = document.createElement("div");
        divcol3.className = "col-6";
        divcol3.appendChild(labelLieu);
        divcol3.appendChild(lieu);

        let divcol4 = document.createElement("div");
        divcol4.className = "col-6";
        divcol4.appendChild(labeldateDebExp);
        divcol4.appendChild(dateDebExp);

        let divcol5 = document.createElement("div");
        divcol5.className = "col-6";
        divcol5.appendChild(labeldateFinExp);
        divcol5.appendChild(dateFinExp);

        let divcol6 = document.createElement("div");
        divcol6.className = "col-12";
        divcol6.appendChild(labeldescription);
        divcol6.appendChild(description);


        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);

        let div2 = document.createElement("div");
        div2.className = "row mb-3";
        div2.appendChild(divcol2);
        div2.appendChild(divcol3);


        let div4 = document.createElement("div");
        div4.className = "row mb-3";
        div4.appendChild(divcol4);
        div4.appendChild(divcol5);

        let div5 = document.createElement("div");
        div5.className = "row mb-3";
        div5.appendChild(divcol6);


        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);
        div.appendChild(div2);
        div.appendChild(div4);
        div.appendChild(div5);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(document).ready(function() {
    let maxField = 10; //Input fields increment limitation
    let addButton = $('.addCompetence'); //Add button selector
    let wrapper = $('.wrapp'); //Input field wrapper
    let x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {

        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelspecialite = document.createElement('label');
        labelspecialite.for = "specialite";
        labelspecialite.innerText = "Specialite/Competences";

        let specialite = document.createElement("input");
        specialite.type = "text";
        specialite.className = "form-control";
        specialite.name = "specialite[]";
        specialite.id = "specialite";


        let divcol1 = document.createElement("div");
        divcol1.className = "col-12";
        divcol1.appendChild(labelspecialite);
        divcol1.appendChild(specialite);

        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);

        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(document).ready(function() {
    let maxField = 10; //Input fields increment limitation
    let addButton = $('.addLangue'); //Add button selector
    let wrapper = $('.wrappe'); //Input field wrapper
    let x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {
        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelLangue = document.createElement('label');
        labelLangue.for = "langue";
        labelLangue.innerText = "Langue";

        let langue = document.createElement("input");
        langue.type = "text";
        langue.className = "form-control";
        langue.name = "langue[]";
        langue.id = "langue";

        let labelNiveau = document.createElement('label');
        labelNiveau.for = "niveau";
        labelNiveau.innerText = "Niveau";

        let niveau = document.createElement("select");
        niveau.className = "form-select mb-3 form-light";
        niveau.name = "niveau[]";
        niveau.id = "niveau";

        let option0 = document.createElement("option");
        option0.className = "bg-light ";
        option0.value = 0;
        option0.innerText = '';

        let option1 = document.createElement("option");
        option1.className = "bg-light ";
        option1.value = 1;
        option1.innerText = 'Langue Marternelle';

        let option2 = document.createElement("option");
        option2.className = "bg-light ";
        option2.value = 2;
        option2.innerText = 'Courant';

        let option3 = document.createElement("option");
        option3.className = "bg-light ";
        option3.value = 3;
        option3.innerText = 'Satisfaisant';

        let option4 = document.createElement("option");
        option4.className = "bg-light ";
        option4.value = 4;
        option4.innerText = 'Moyen';

        let option5 = document.createElement("option");
        option5.className = "bg-light ";
        option5.value = 5;
        option5.innerText = 'Notion de base';

        niveau.appendChild(option0);
        niveau.appendChild(option1);
        niveau.appendChild(option2);
        niveau.appendChild(option3);
        niveau.appendChild(option4);
        niveau.appendChild(option5);


        let divcol1 = document.createElement("div");
        divcol1.className = "col-6";
        divcol1.appendChild(labelLangue);
        divcol1.appendChild(langue);

        let divcol2 = document.createElement("div");
        divcol2.className = "col-6";
        divcol2.appendChild(labelNiveau);
        divcol2.appendChild(niveau);


        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);
        div1.appendChild(divcol2);


        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(document).ready(function() {
    let maxField = 10; //Input fields increment limitation
    let addButton = $('.addLoisir'); //Add button selector
    let wrapper = $('.wrap'); //Input field wrapper
    let x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {

        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelLoisir = document.createElement('label');
        labelLoisir.for = "loisir";
        labelLoisir.innerText = "Loisir";

        let loisir = document.createElement("input");
        loisir.type = "text";
        loisir.className = "form-control";
        loisir.name = "loisir[]";
        loisir.id = "loisir";


        let divcol1 = document.createElement("div");
        divcol1.className = "col-12";
        divcol1.appendChild(labelLoisir);
        divcol1.appendChild(loisir);

        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);

        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});