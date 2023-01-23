$(document).ready(function($) {

    $(document).on('click', '#btn-print-this', function(event) {

        event.preventDefault();

        let element = document.getElementById("content");

        let opt = {
            margin: 1,
            filname: 'structured .pdf',
            image: { type: 'jpeg', quality: 1 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'a1', orientation: 'portrait' }
        };
        html2pdf().set(opt).from(element).save();

    })


});

function generer() {
    let nomReq = document.getElementById('nom').value;
    let prenomReq = document.getElementById('prenom').value;
    let postReq = document.getElementById('post').value;
    let telReq = document.getElementById('tel').value;
    let emailReq = document.getElementById('email').value;
    let adrReq = document.getElementById('adress').value;
    let formationReq = document.getElementById('formation1').value;
    let etablReq = document.getElementById('etablissement1').value;
    let datDeb1 = document.getElementById('dateDeb1').value;
    let datFin1 = document.getElementById('dateFin1').value;



    let nomC1 = document.getElementById('nomC1');
    nomC1.innerHTML = nomReq.concat(' ', prenomReq);

    let Post1 = document.getElementById('Post1');
    Post1.innerHTML = postReq;

    let ContC1 = document.getElementById('ContC1');
    ContC1.innerHTML = telReq;

    let mailM1 = document.getElementById('mailM1');
    mailM1.innerHTML = emailReq;

    let adressA1 = document.getElementById('adressA1');
    adressA1.innerHTML = adrReq;

    let df1 = document.getElementById('df1');
    df1.innerHTML = datDeb1.concat('-', datFin1);

    let f1 = document.getElementById('f1');
    f1.innerHTML = formationReq;

    let etf1 = document.getElementById('etf1');
    etf1.innerHTML = etablReq;

}
