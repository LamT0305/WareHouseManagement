fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        let productsHtml = '';
        products.forEach(product => {
            productsHtml += `
                    
                        <div class="col">
                            <div class="card-body item">  
                                <div class="img-product">
                                    <img src="${product.image_url}"/>
                                </div>                                                          
                                <a href="/product/${product.id}"><p>${product.name}</p></a>
                                <p>Mô tả: ${product.description}</p>
                                <p>Giá tiền: ${product.price}</p>
                                <p>Số Lượng: ${product.quantity}</p>
                            </div>
                        </div>                        
                    
                `;
        });
        document.querySelector('#products').innerHTML = productsHtml;

       
    })
    .catch(error => console.error(error));

alert('Success');

fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        // Get the first 5 elements of the products array
        const firstFiveProducts = products.slice(0, 9);

        let productsHtml = '';
        firstFiveProducts.forEach(product => {
            productsHtml += `
                <div class="col-pre">
                    <div class="card-body pre">
                        <img src="${product.image_url}"/>
                        <a href="/product/${product.id}"><p>${product.name}</p></a>
                        <p>${product.description}</p>
                        <p>${product.price}</p>
                        <p>${product.quantity}</p>
                    </div>
                </div>                        
            `;
        });
        document.querySelector('#preview').innerHTML = productsHtml;
    })
    .catch(error => console.error(error)); 

    




