import { Pagination } from "./pagination.js";

export class Modal extends Pagination{
    showModal(data, obj = {}, refresher, checker) {
        $.ajax(
            {
                url: "./include/add-user.inc.php",
                success: function (data) {
                    document.querySelector('#modal').innerHTML = data;
                }
            }
        );


         $('.modal-container').show('slide', function () {
            if (data.status === 'edit' && $('.modal-container')) {
                $('legend').html('Update account')
                $('#firstname').val(obj.name);
                $('#phonenum').val(obj.phonenumber);
                $('#email').val(obj.email);
                $('#acc_id').val(obj.id);
    
                $('#submitBtn').click(() => {
                    //for edit
                    checker($('#email').val(), $('#phonenum').val(), $('#acc_id').val(), 'edit', refresher, closeForm);
                });
            } else {
                $('#submitBtn').click(() => {
                    //for adding
                    checker($('#email').val(), $('#phonenum').val(), $('#acc_id').val(), 'add', refresher, closeForm);
                });
            }
        });
    }
    
}

function closeForm() {
    $('.modal-container').hide(800);
}
