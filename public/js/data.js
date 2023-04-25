// fetch('api/product')
//     .then(res => res.json())
//     .then(res => {
//         let product = '';
//         res.foreach(item => {
//             product += `
// <td scope="row">${item.id}</td>
// <td>${item.name}</td>
// <td>${item.description}</td>
// <td>${item.price}</td>
// <td>${item.quantity}</td>
// <td>${item.category_name}</td>
// <td>${item}</td>
//             `
//         })
//         document.querySelector('#item').innerHTML = product;
//     })
//     .catch(e => console.error(e));


fetch('/api/product')
    .then(response => response.json())
    .then(res => {

        let productsHtml = '';
        res.forEach(item => {
            productsHtml += `
                <tr class="table-primary" data-id="${item.id}">
                <td scope="row">${item.id}</td>
                <td>${item.name}</td>
                <td>${item.description}</td>
                <td>${item.price}</td>
                <td>${item.quantity}</td>
                <td>${item.category_name}</td> 
                <td class="action">
                    <a href="/product/${item.id}">Show</a>
                    <a href="/product/edit/${item.id}">Edit</a>
                    <Button onClick={deleteData(${item.id})}>Delete</Button>
                </td>                   
                </tr>
                `;
        });
        document.querySelector('#item').innerHTML = productsHtml;


    })
    .catch(error => console.error(error));

function deleteData(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        fetch(`/api/product/${id}`, {
            method: 'DELETE',
        })
            .then(response => response.json())

            .catch(e => console.error(e));
        let row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
            row.remove();
        }
    }

}