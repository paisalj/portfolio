import 'bootstrap';
import '../css/app.css';

import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {

    // =====================================================
    // DELETE SKILL
    // =====================================================

    const deleteSkillForms = document.querySelectorAll('.delete-skill-form');

    deleteSkillForms.forEach(function (form) {

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


    // =====================================================
    // DELETE PROJECT
    // =====================================================

    const deleteProjectForms = document.querySelectorAll('.delete-project-form');

    deleteProjectForms.forEach(function (form) {

        form.addEventListener('submit', function (event) {

            event.preventDefault();

            Swal.fire({
                title: 'Hapus Project?',
                text: 'Project ini akan dihapus dari portfolio.',
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

const deleteExperienceForms = document.querySelectorAll('.delete-experience-form');

deleteExperienceForms.forEach(function (form) {

    form.addEventListener('submit', function (event) {

        event.preventDefault();

        Swal.fire({
            title: 'Hapus Experience?',
            text: 'Experience ini akan dihapus dari portfolio.',
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
const deleteEducationForms = document.querySelectorAll('.delete-education-form');

deleteEducationForms.forEach(function (form) {

    form.addEventListener('submit', function (event) {

        event.preventDefault();

        Swal.fire({
            title: 'Hapus Education?',
            text: 'Data pendidikan ini akan dihapus dari portfolio.',
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