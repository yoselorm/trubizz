<script>
    $('[role="tablist"], [role="tab"]').on('click', (e) => {
        if (e.target.getAttribute("href")) {
            window.location.href = e.target.getAttribute("href");
        }
    });

    $(document).ready(function() {
        console.log("document loaded");

        if (window.location.hash != "") {
            $('[role="tablist"] li').removeClass("active");
            $('[data-tab-name="' + window.location.hash.replace("#", "") + '"]')[0].classList.add("active")

            $('.tab-pane').removeClass("active");
            $('.tab-pane').removeClass("in");

            let IdElm = $('[id="' + window.location.hash.replace("#", "") + '"]')[0];

            IdElm.classList.add("active")
            IdElm.classList.add("in")
            window.setTimeout(()=>{
                window.scrollTo(0,0)
            },400)

        }
    });
</script>