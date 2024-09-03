import { getTableRow, uploadModal } from "./controller/table-view.js";
import { Modal } from "./controller/modal-view.js";
import { Model } from "./model/model.js";
import { Pagination } from "./controller/pagination.js";

const model = new Model;
const modal = new Modal;
const pagination = new Pagination;

let currentPage;

$(document).ready(async function () {

    updateTable();

    //Create pagination button
    pagination.createPagination(await model.getAccounts());

    //Add event to pagination button
    pagination.addEvent(updateTable, await model.getAccounts());

    //Add search input event
    $('#searchInput').on('keyup', function () {
        let data = $(this).val();
        $.ajax({
            url: `./include/search.inc.php?data=${data}`,
            success: function (result) {
                $('tbody').html(result).show(400);
                btnAddEvent();
            }
        })

    });

    //Show add modal
    $('.modalBtn').on('click', () => {
        modal.showModal({ status: 'add' }, {}, updateTable, model.checkDuplicate);
    });


});

//Refresh table content
async function updateTable(list) {
    $('#test').html(getTableRow(list ? list : await model.getAccounts()));
    btnAddEvent();
}


//Add table buttons event
function btnAddEvent() {
    //Trigger edit
    document.querySelectorAll('button.edit').forEach(elem => {
        elem.addEventListener('click', function () {
            const obj = JSON.parse(elem.dataset.obj);
            modal.showModal(
                { status: 'edit' },
                obj,
                updateTable,
                model.checkDuplicate
            );
        })
    });

    //Trigger delete
    document.querySelectorAll('button.delete').forEach(elem => {
        elem.addEventListener('click', async () => {
            const id = elem.dataset.id;
            const response = await model.deleteAcc(id);
            if (response) {
                updateTable()
                pagination.createPagination(await model.getAccounts());
                pagination.addEvent(updateTable, await model.getAccounts());

            }

        })
    });

    document.querySelectorAll('.upload').forEach(btn => {
        btn.addEventListener('click', () => {
            uploadModal();
        });
    })
}


