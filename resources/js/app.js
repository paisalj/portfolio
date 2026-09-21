import 'bootstrap';
import '../css/app.css';

import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {

    const deleteForms = document.querySelectorAll('.delete-skill-form');

    deleteForms.forEach(function (form) {

        form.addEventListener('submit', function (event) {

            event.preventDefault();

            Swal.fire({
                title: 'Hapus Skill?',
                text: 'Skill ini akan dihapus dari portfolio.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true,
                focusCancel: true
            }).then(function (result) {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });

    });

});