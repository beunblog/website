function getPostSlug() {
  const params = new URLSearchParams(window.location.search);
  return params.get('post');
}

function loadMarkdownPost(slug) {
  if (!slug) {
    document.getElementById('blog-post').innerHTML = '<p>No post specified.</p>';
    return;
  }

  const postPath = `posts/${slug}.md`;

  fetch(postPath)
    .then(response => {
      if (!response.ok) {
        throw new Error('Post not found.');
      }
      return response.text();
    })
    .then(markdown => {
      const html = marked.parse(markdown);
      document.getElementById('blog-post').innerHTML = html;
    })
    .catch(error => {
      document.getElementById('blog-post').innerHTML = `<p>Error: ${error.message}</p>`;
    });
}

// Initialize
const slug = getPostSlug();
loadMarkdownPost(slug);