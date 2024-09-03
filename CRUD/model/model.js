import { Pagination } from "../controller/pagination.js";

export class Model extends Pagination{
    async getAccounts() {
        const res = await fetch('./query/get-account.php');
        return await res.json();
    }

    async deleteAcc(id) {
        return Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(async (result) => {
            if (result.isConfirmed) {

                const req = await fetch(`./query/delete-account.php?id=${id}`);
                const response = await req.json();
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });

                return response;
            }
        });
    }



    updateAccount(refresher) {
        $.ajax({
            url: './query/update.php',
            method: 'post',
            data: $('#form_account').serialize(),
            success: function (data) {
                if (data == 'success') {
                    refresher();
                }
            }

        })
    }

    async checkDuplicate(email, phone, id, transaction = 'add', refresher, formCloser) {
        const req = await fetch(`./query/check-data.php?email=${email}&phonenumber=${phone}&id=${id}`);
        let response = await req.json();

        if (response.status == 'success') {
            Swal.fire({
                icon: "error",
                title: "Invalid input",
                text: `This ${response.duplicate == 'email' ? 'Email' : 'Phone number'} is already used!`,
            });
        } else {
            Swal.fire({
                title: "Success!",
                text: `Successfully ${transaction == 'add' ? 'Created' : 'Updated'}`,
                icon: "success"
            });

            transaction == 'add' ? addAccount(refresher, formCloser) : updateAccount(refresher, formCloser);

        }
    }
}

const model = new Model();

 function addAccount(refresher, formCloser) {
    $.ajax({
        url: './query/add.php',
        method: 'post',
        data: $('#form_account').serialize(),
        success: async function (data) {
            if (data == 'success') {
                refresher();
                formCloser();
                model.createPagination(await model.getAccounts());
                model.addEvent(refresher, await model.getAccounts())
            }

        }
    })

}

function updateAccount(refresher, formCloser) {
    $.ajax({
        url: './query/update.php',
        method: 'post',
        data: $('#form_account').serialize(),
        success: function (data) {
            if (data == 'success') {
                refresher();
                formCloser();
            }
        }
    })
}
