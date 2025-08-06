function loadHTML(targetSelector, url) {
  const target = document.querySelector(targetSelector);
  return fetch(url)
    .then(res => res.text())
    .then(data => {
      target.innerHTML = data;
      const parser = new DOMParser();
      const doc = parser.parseFromString(data, 'text/html');
      const scriptEl = doc.querySelector('script');
      if (scriptEl) eval(scriptEl.textContent);
    });
}