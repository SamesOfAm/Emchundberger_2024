<script>
  if(document.querySelector('.mod_newscategories') && window.location.href.indexOf('category') !== -1) {
    const results = document.querySelector('.trennstrich');
    console.log(results.offsetTop);
    window.scrollTo(0, results.offsetTop);
  }
  if(document.querySelector('.mod_newscategories')) {
    const categoryContainer = document.querySelector('.mod_newscategories');
    const allSpans = categoryContainer.querySelectorAll('span');
    allSpans.forEach(span => {
      if (span.innerHTML === 'Alle Kategorien') {
        span.innerHTML = 'Alle Standorte';
      }
    })
  }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Emch+Berger GmbH",
        "url": "https://www.emchundberger.de"
    }
</script>
