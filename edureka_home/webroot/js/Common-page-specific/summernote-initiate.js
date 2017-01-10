/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function (e) {

    initiateSmallSummernote('.text-area-askQuestion');
});
function initiateSmallSummernote(selector) {
    if (typeof $.summernote == 'object') {

        $(selector).summernote({
            height: 150, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: 150, // set maximum height of editor
            onkeyup: function () {
                if (typeof $(selector).closest('form').bootstrapValidator != 'undefined')
                    $(selector).closest('form').bootstrapValidator('revalidateField', $(selector).attr('name'));
            },
            onpaste: function () {
                if (typeof $(selector).closest('form').bootstrapValidator != 'undefined')
                    $(selector).closest('form').bootstrapValidator('revalidateField', $(selector).attr('name'));
            },
            onImageUpload: function (files, editor, welEditable) {
                sendFile(files[0], this, welEditable);
            },
            focus: true, // set focus to editable area after initializing summernote
            placeholder: 'Type your message here...', // set editable area's placeholder text
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', []],
                ['color', []],
                ['para', ['ul', 'ol'/*, 'paragraph'*/]],
                ['height', []],
                ['table', []],
                ['insert', ['picture']],
                ['view', ['codeview']],
                ['help', []]
            ]
        }).on('summernote.change', function (customEvent, contents, $editable) {
            // Revalidate the content when its value is changed by Summernote

            if ($(this).closest('form').attr('id') == 'postquestionform')
                $('#postquestionform').bootstrapValidator('revalidateField', 'question_desc');
            else if ($(this).closest('form').attr('id') == 'postassignmentform') {
                $('#postassignmentform').bootstrapValidator('revalidateField', 'question_desc');
            }
        });
    }
}


function sendFile(file, editor, welEditable) {
    var data = new FormData();
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: webURL + "pages/summernoteuplaod",
        cache: false,
        contentType: false,
        processData: false,
//                xhr: function () {
//                    var myXhr = $.ajaxSettings.xhr();
//                    if (myXhr.upload)
//                        myXhr.upload.addEventListener('progress', function () {
//                            progressHandlingFunction(this, editor);
//                        }, false);
//                    return myXhr;
//                },
        success: function (url) {
            $(editor).summernote('insertImage', url.trim());
//            editor.insertImage(welEditable, url); 
        }
    });
}