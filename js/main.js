document.addEventListener('DOMContentLoaded', () => {
    const postListContainer = document.getElementById('post-list');

    // Load posts.json
    fetch('data/posts.json')
        .then(response => {
            if (!response.ok) throw new Error('Failed to load post list');
            return response.json();
        })
        .then(posts => {
            posts.forEach(post => {
                const postPreview = document.createElement('div');
                postPreview.classList.add('post-preview');
                postPreview.classList.add('row');
                postPreview.classList.add('item');
                postPreview.classList.add('pt-5');

                postPreview.innerHTML = `
                        <div id="image" class="col-2">
                            <img src=${post.img} alt="${post.title}" style="height: 250px;">
                        </div>
                        <div id="text" class="col-8">
                            <div id="title">
                                <h1 id="title_text">${post.title}</h1>
                            </div>
                            <div id="summary">
                                <p id="summary_text">${post.summary}</p>
                            </div>
                        </div>
                        <div id="info" class="col-2">
                            <div id="date" class="row" style="text-align:center;">
                                <b id="date_text">${post.date}</b>
                            </div>
                            <div id="button" class="row" style="margin-top:100%;">
                                <a href="blog.html?post=${post.id}" class="btn btn-danger" role="button" aria-disabled="true">Read More</a>
                            </div>
                        </div>
                    `;

                postListContainer.appendChild(postPreview);
            });
        })
        .catch(error => {
            postListContainer.innerHTML = `<p>Error loading posts: ${error.message}</p>`;
        });
});

