"use strict";

const { data } = require("jquery");

$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

// Images Viewer
$(document).ready(function (e) {
    $('#images').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
        $('#preview-image').attr('src', e.target.result);
    }
        reader.readAsDataURL(this.files[0]);
    });
});

// Article
$(document).ready(function(){
    $('#article_table').DataTable({
        columnDefs: [
            {
                orderable: false,
                targets: 4
            }
        ],
        order: [
            0, 'asc'
        ]
    });

    $('#article-delete').on('click', function (event) {
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

// Category Table
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

// Doctor
$(document).ready(function(){
    $('#doctor_table').DataTable({
        columnDefs: [
            {
                orderable: false,
                targets: 4
            }
        ],
        order: [
            0, 'asc'
        ]
    });

    $('#doctor-delete').on('click', function (event) {
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

// Promotion Table
$(document).ready(function(){
    $('#promotion_table').DataTable({
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

    $('#promotion-delete').on('click', function (event) {
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
