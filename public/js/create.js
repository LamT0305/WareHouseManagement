
const headers = new Headers();
headers.append('Content-Type', 'application/json');
// const handleSubmit = () => {
//     const form = document.getElementById('myForm');

//     form.addEventListener('submit', async (event) => {
//         event.preventDefault();

//         const name = document.getElementById('name').value;
//         const description = document.getElementById('description').value;
//         const price = document.getElementById('price').value;
//         const quantity = document.getElementById('quantity').value;
//         const unit = document.getElementById('unit').value;
//         const image_url = document.getElementById('image_url').value;
//         console.log(name)
//         const categorySelect = document.getElementById('category');
//         let selectedCategoryId = categorySelect.value; // Store initial selected value
//         console.log(selectedCategoryId)
//         categorySelect.addEventListener('change', (event) => {
//             selectedCategoryId = event.target.value; // Update selected value
//             console.log(selectedCategoryId);
//         });
//         const formData = new FormData();
//         formData.append('name', name);
//         formData.append('description', description);
//         formData.append('price', price);
//         formData.append('quantity', quantity);
//         formData.append('unit', unit);
//         formData.append('image_url', image_url);
//         formData.append('selectedCategoryId', selectedCategoryId);

//         try {
//             const response = await axios.post('/api/product', formData, {
//                 headers: {
//                     "Content-type": "application/json",
//                 },
//             });
//             if (response) {
//                 console.log(response.data)
//             }
//         } catch (e) {
//             console.log(e)
//         }

//         // fetch('/api/product', {
//         //     method: 'POST',
//         //     headers: headers,
//         //     body: formData
//         // })
//         //     .then(response => {
//         //         if (response.ok) {
//         //             return response.json();
//         //         }
//         //         throw new Error('Network response was not ok.');
//         //     })
//         //     .then(data => {
//         //         alert('Success');
//         //         console.log(data);
//         //     })
//         //     .catch(error => {
//         //         console.error('Error:', error);
//         //         console.log('Error message:', error.message);
//         //     });
//     });
// }




// const selectElement = document.getElementById('category');
// const defaultCategoryId = 1;

// fetch('/api/category')
//     .then(response => response.json())
//     .then(data => {
//         let categoryHTML = '';
//         data.forEach(dataItem => {
//             categoryHTML += `
//         <option value="${dataItem.id}" ${dataItem.id === defaultCategoryId ? 'selected' : ''}>${dataItem.name}</option>
//       `;
//         });
//         document.getElementById('category').innerHTML = categoryHTML;
//     })
//     .catch(e => console.error(e));



function handleSubmit() {
    alert('Edit Successfully!');
}