<div id="footer" class="">
    <div class="container">
        <p class="text-muted">CvBuilder | Emmathem Media Company</p>
        <p class="text-muted">&copy;
            <?php echo date('Y'); ?> All Right Reserved.</p>
    </div>
</div>
<!-- Page Content -->


<script src="assets/javascript/wow.min.js"></script>
<script>
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();

</script>
<script src="assets/javascript/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/owl.carousel.min.js"></script>
<script src="assets/javascript/main.js"></script>
</body>

</html>
