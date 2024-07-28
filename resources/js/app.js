import './bootstrap';
// resources/js/app.js
import 'summernote/dist/summernote-bs4.min.js';
import 'summernote/dist/summernote-bs4.css';

// Khởi tạo Summernote
$(document).ready(function () {
    $('.summernote').summernote();
});
