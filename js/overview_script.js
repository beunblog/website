    const postdiv = document.querySelector('#postdiv')
    fetch('/posts/overview/files/helloworld.html')
        .then(res=>res.text())
        .then(data=>{
            postdiv.innerHTML=data
            const parser = new DOMParser()
            const doc = parser.parseFromString(data, 'text/html')
            eval(doc.querySelector('script').textContent)
        });