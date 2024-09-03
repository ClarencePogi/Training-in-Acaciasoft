export function getTableRow(data) {
    let html = data.map(obj => `
        <tr>
            <td>${obj.name}</td>
            <td>${obj.phonenumber}</td>
            <td>${obj.email}</td>
            <td><button class="btn btn-primary edit" data-obj='${JSON.stringify(obj)}'><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
            <td><button class="btn btn-success upload" data-id="${obj.id}" ><i class="fa fa-upload" aria-hidden="true"></i></button></td>
            <td><button class="btn btn-danger delete" data-id="${obj.id}" ><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
        </tr>`).join();

    return html;
}

export function uploadModal() { 
    Swal.fire({
        title: "Upload file",
        input: "text",
        inputAttributes: {
          autocapitalize: "off"
        },
        showCancelButton: true,
        confirmButtonText: "Look up",
        showLoaderOnConfirm: true,
        preConfirm: async (login) => {
          try {
            const githubUrl = `
              https://api.github.com/users/${login}
            `;
            const response = await fetch(githubUrl);
            if (!response.ok) {
              return Swal.showValidationMessage(`
                ${JSON.stringify(await response.json())}
              `);
            }
            return response.json();
          } catch (error) {
            Swal.showValidationMessage(`
              Request failed: ${error}
            `);
          }
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: `${result.value.login}'s avatar`,
            imageUrl: result.value.avatar_url
          });
        }
      });

      console.log('taeee');
 }