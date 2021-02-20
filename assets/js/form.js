/****
 * JS for forms 
 */

 // remove alert message
setTimeout(function() {
    $('#alert-remove').fadeOut();
}, 3000);

if(document.querySelector('.custom-file-input')) {
    // add file name when input['file'] changes 
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("file1").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    });
}


