async function getPosts() {

    let res = await fetch('http://127.0.0.1/orders');
                
                console.log(res)
                let orders = await res.json();
                var isJson = true;
                try {
                    JSON.parse(orders);
                } catch(e) {
                    isJson = false;
                    console.log(e);
                }

    orders.forEach(order => {
        console.log(`Айдишник заказа ${order.id}`);
        document.querySelector('.post-list').innerHTML += `
        <div class="card">
            <div class="card-body">${order.id}</div>
        </div>
        `
    });

}

getPosts();