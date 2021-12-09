import Swal from 'sweet-alert'

$(function () {
    showSwal = function (type) {
        if (type === 'basic') {
            swal.fire({
                text: 'Any fool can use a computer',
                confirmButtonText: 'Close',
                confirmButtonClass: 'btn btn-danger',
            })
        } else if (type === 'title-and-text') {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        } else if (type === 'ej1') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

            Toast.fire({
                icon: 'success',
                title: '¡Registro Exitosisimo!'
            })
        }

    }
})
