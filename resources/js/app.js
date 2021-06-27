require('./bootstrap');


window.addEventListener('load', function () {
    
    const deleteForms = document.querySelectorAll('.delete-btn');

    deleteForms.forEach(form => {

        form.addEventListener('submit', (event) => {

            if (!confirm('Are you sure you want to delete?')) {
                event.preventDefault(); 
            }

        })
    })
})