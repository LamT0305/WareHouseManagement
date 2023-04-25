fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        let productsHtml = '';
        products.forEach(product => {
            productsHtml += `
                    
                        <div class="col">
                            <div class="item">  
                                <div class="img-product">
                                    <img src="${product.image_url}"/>
                                </div>    
                                <div style="margin:20px 0;">
                                    <a href="/product/${product.id}"><p>${product.name}</p></a>
                                    
                                    <p>Giá tiền: ${product.price}</p>
                                    <p>Số Lượng: ${product.quantity}</p>
                                    <a href="/product/${product.id}" class="btnView">View</a>
                                </div>                                                      
                                
                            </div>
                        </div>                        
                    
                `;
        });
        document.querySelector('#products').innerHTML = productsHtml;


    })
    .catch(error => console.error(error));

// alert('Success');

fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        // Get the first 5 elements of the products array
        const firstFiveProducts = products.slice(0, 9);

        let productsHtml = '';
        firstFiveProducts.forEach(product => {
            productsHtml += `
                <div class="col-pre">
                    
                        <div class="item">  
                            <div class="img-product">
                                <img src="${product.image_url}"/>
                            </div>    
                            <div style="margin:20px 0;">
                                <a href="/product/${product.id}"><p>${product.name}</p></a>
                                
                                <p>Giá tiền: ${product.price}</p>
                                <p>Số Lượng: ${product.quantity}</p>
                                <a href="/product/${product.id}" class="btnView">View</a>
                            </div>                                                      
                            
                        </div>
                   
                </div>                        
            `;
        });
        document.querySelector('#preview').innerHTML = productsHtml;
    })
    .catch(error => console.error(error));






