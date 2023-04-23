fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        let productsHtml = '';
        products.forEach(product => {
            productsHtml += `
                    
                        <div class="col">
                            <div class="card-body">
                                <h2>${product.name}</h2>
                                <p>${product.description}</p>
                                <p>${product.price}</p>
                                <p>${product.quantity}</p>
                            </div>
                        </div>                        
                    
                `;
        });
        document.querySelector('#products').innerHTML = productsHtml;
    })
    .catch(error => console.error(error));

// alert('Success');






