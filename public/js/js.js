let delete_btn = document.querySelectorAll('.delete-btn');
delete_btn.forEach(db => {
    db.addEventListener('click', function(e) {
        e.preventDefault();
        if(confirm('Confirmez-vous la suppression?')){
            db.parentElement.submit();
        }
    });
});