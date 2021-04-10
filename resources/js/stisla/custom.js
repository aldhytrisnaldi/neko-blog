"use strict";

const { data } = require("jquery");

$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

$(document).ready(function(){
    $('#category_table').DataTable({
        columnDefs: [
            {
                orderable: false,
                targets: 3
            }
        ],
        order: [
            0, 'asc'
        ]
    });

    $('#category-delete').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Warning!',
            text: 'Are you delete this data?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
});

// User Table
$(document).ready(function(){
    $('#user_table').DataTable({
        columnDefs: [
            {
                orderable: false,
                targets: 5
            }
        ],
        order: [
            0, 'asc'
        ]
    });

    $('.user-delete').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Warning!',
            text: 'Are you delete this data?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
});

// Role Table
$(document).ready(function(){
    $('#role_table').DataTable({
        columnDefs: [
            {
                orderable: false,
                targets: 2
            }
        ],
        order: [
            0, 'asc'
        ]
    });

    $('#role-delete').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Warning!',
            text: 'Are you delete this data?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
});
