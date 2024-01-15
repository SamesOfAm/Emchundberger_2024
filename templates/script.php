<script>
  if(document.querySelector('.mod_newscategories') && window.location.href.indexOf('category') !== -1) {
    const results = document.querySelector('.trennstrich');
    console.log(results.offsetTop);
    window.scrollTo(0, results.offsetTop);
  }
</script>
