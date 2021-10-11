<!-- To Top -->
<button onclick="topFunction()" id="toTop" title="Go to top"><i class="fa fa-chevron-up"></i></button>

<script>
    //Get the button
    var mybutton = document.getElementById("toTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<style>
    #toTop:hover {
        background-color: rgba(180, 180, 180, 0.472);
        box-shadow: 0px 3px 6px 0px rgba(50, 50, 50, 0.62);
    }

    #toTop:focus {
        outline: none;
    }

    /* To Top Button */
    #toTop {
        position: fixed;
        bottom: 25px;
        right: 25px;
        display: none;
        padding: 15px;
    }

    #toTop{
        background-color: #045de9;
        background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
        color: white;
        border: none;
        font-size: 13px;
        padding: 7px 12px 7px 12px;
        border-radius: 15px;
        margin-left: 6%;
    }

</style>