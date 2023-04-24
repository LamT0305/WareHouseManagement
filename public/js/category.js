fetch('/api/category')
    .then(response => response.json())
    .then(res => {

        let productsHtml = '';
        res.forEach(item => {
            productsHtml += `
                <tr class="table-primary" data-id="${item.id}">
                <td scope="row">${item.id}</td>
                <td>${item.name}</td>
                
                <td class="action">
                    <a href="/category/edit/${item.id}">Edit</a>
                    <Button onClick={deleteData(${item.id})}>Delete</Button>
                </td>                   
                </tr>
                `;
        });
        document.querySelector('#category').innerHTML = productsHtml;


    })
    .catch(error => console.error(error));

function deleteData(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        fetch(`/api/category/${id}`, {
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

function handleAddCategory() {
    let name = document.querySelector('#name').value;
    fetch('/api/category', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: name })
    }).then(response => response.json())
        .then((res) => {
            if(res.success === true) {
                alert('Updated category in category list');
            }else{
                alert('Category name was not updated');
            }
        }).catch(e => console.error(e));
}

function handleUpdateCategory(id) {
    let name = document.querySelector('#cate-name').value;
    fetch('/api/category/' + id, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: name })
    }).then(response => response.json())
        .then((res) => {
            if(res.success) {
                alert('Updated category in category list');
            }else{
                alert('Category name was not updated');
            }
            
        }).catch(e => console.error(e));
}