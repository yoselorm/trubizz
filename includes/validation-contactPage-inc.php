<script>
  function setValidation() {

    for (let i = 0; i < $("[validation='alpha']").length; i++) {
      const element = $("[validation='alpha']")[i];
      element.oninput = () => {
        element.value = element.value.replace(/[^A-Za-z\s]/g, '');
      }
    }

    for (let i = 0; i < $("[validation='message']").length; i++) {
      const element = $("[validation='message']")[i];
      element.oninput = () => {
        element.value = element.value.replace(/[^A-Z.,\-a-z0-9\s]/g, '');
      }
    }


  }

  window.addEventListener("load", (event) => {
    setValidation();

  });
</script>