async function getPosts() {
    let res = await fetch('http://jsonplaceholder.typicode.com/posts');
    let posts = await res.json(); 


    posts.forEach(post => {
        console.log('foreach')
        document.querySelector('.post-list').innerHTML += `
        <div class="card">
            <div class="card-body">${post.body}</div>
        </div>
        `
    });

}
getPosts();