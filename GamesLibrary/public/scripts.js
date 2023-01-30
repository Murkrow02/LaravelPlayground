async function game_details(name, img, platforms, id, oldrating, deletable){

    const a = await Swal.fire({
        title: name,
        confirmButtonText:"Salva",
        showCloseButton: true,
        cancelButtonColor: '#d33',
        showCancelButton: deletable,
        cancelButtonText: 'Elimina',
        html:
            '<h4>Scegli dove salvare il gioco</h4>' +
            '<input type="radio" class="btn-check" name="options-outlined" id="wishlist" autocomplete="off" checked>\n' +
            '<label class="btn btn-outline-primary" for="wishlist">Wishlist</label>' +
            '<input type="radio" class="btn-check" name="options-outlined" id="not_played" autocomplete="off">\n' +
            '<label class="btn btn-outline-secondary" for="not_played">Libreria</label>' +
            '<input type="radio" class="btn-check" name="options-outlined" id="played" autocomplete="off">\n' +
            '<label class="btn btn-outline-success" for="played">Completati</label>' +
            '<input type="radio" class="btn-check" name="options-outlined" id="playing" autocomplete="off">\n' +
            '<label class="btn btn-outline-warning" for="playing">In corso</label>' +
            '<h4 style="margin-top: 20px">Valutazione</h4>' +
            '<input type="number" min="1" max="5" value="'+ oldrating + '" id="rating">',
        focusConfirm: false,
        preConfirm: () => {
            let choice = '';
            if(document.getElementById('wishlist').checked) {
                choice = 'wishlist';
            }else if(document.getElementById('not_played').checked) {
                choice = 'not played';
            }
            else if(document.getElementById('played').checked) {
                choice = 'played';
            }
            else if(document.getElementById('playing').checked) {
                choice = 'playing';
            }
            document.getElementById('game_type_'+id).value = choice;
            document.getElementById('game_rating_'+id).value = document.getElementById('rating').value;
        },
    }).then((result) => {
        if (result.dismiss === Swal.DismissReason.cancel) {
            document.getElementById("delete_form_"+id).submit();
        }else if(result.isConfirmed){
            document.getElementById("game_form_"+id).submit();
        }
    })
}
