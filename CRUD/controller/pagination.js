
export class Pagination {
   paginationContainer = $('.pagination');
   
   createPagination(data) {
      this.paginationContainer.empty();
      
      for (let index = 0; index < Math.ceil(data.length / 6); index++) {
         this.paginationContainer.append(`<button data-page="${index + 1}" value="taer" class="pag-btn-${index + 1}">${index + 1}</button>`);
      }

   }
   
   addEvent(refresh, data) {
      //Add event for pagination
    $('.pagination button').on('click', async function () {
      const page = $(this).attr('data-page');
      let accountList = data;

      //Calculation for pagination
      let start = ((page * 6) - 6) != 0 ? (page * 6) - 6 : (page * 6) - 6;
      let end = (page * 6);
      let selectedItems = accountList.slice(start, end);

      //Table animation
      $('#test tr').hide(1000);
      setTimeout(() => {
         refresh(selectedItems);
      }, 1000);

      //Showing active button
      $('.pagination button').removeClass('active-btn');
      $(this).addClass('active-btn');
  });
   }
}