// =========csrf token============
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// =========csrf token============

// $('#addCusTitle').show();
// $('#addCusButton').show();
// $('#editCusTitle').hide();
// $('#editCusButton').hide();
// =========start-store-data===========
function addMessage() {
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();

    $.ajax({
        type: 'post',
        dataType: 'json',
        data: {
            name: name,
            email: email,
            message: message,
        },
        url: '/store-message',
        success: function (data) {
            clear()
            console.log("data insert successfully");
        }
    });
}
// =========end-store-data===========

// =============start-show-data============


function clear() {
    $('#name').val('');
    $('#address').val('');
    $('#phone').val('');
}

// ================end-edit-customer==========


// ===============delete-customer===============
// function delete_customer(id){
//     $.ajax({
//         type:'GET',
//         dataType:'JSON',
//         url:"delete/Customer/"+id,
//         success:function(data){
//             $('#AddCusButton').show();
//             $('#addCusTitle').show();
//             $('#updateCusButton').hide();
//             $('#EditCusTitle').hide();
//             showData();
//             clearData();
//             console.log(' successfully'); 
//         }
//     })
// }