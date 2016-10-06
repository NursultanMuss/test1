



    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.siftscience.com/s.js"></script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            Login.init();
            $('.login').attr('style', '');

            $.backstretch([
                "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/6.jpg?v=2.3.2",
                "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/7.jpg?v=2.3.2",
                "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/8.jpg?v=2.3.2"
            ], {
                fade: 1000,
                duration: 1000
            });

        });
    </script>
    <script>
        $(document).ready(function(){
            $(".add-to-cart").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/"+id, {}, function (data) {
                    $("#cart-count").html(data);
                });
                return false;
            });
        });
    </script>

</body>
</html>