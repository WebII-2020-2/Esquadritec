<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    function goBack() {
        window.history.back();
    }
</script>

<script src="{{ asset('site/jquery.js') }}" async defer></script>
<script src="{{ asset('site/bootstrap.js') }}" async defer></script>
