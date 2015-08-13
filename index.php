<!DOCTYPE HTML>
<?php include_once('head.php'); ?>


<body class="index">
    <div class="page-wrapper" class="group">

<?php //include_once('header.php'); ?>



    <div id="slideshow">
        <div id="slides" >
                <a href="home.php"><img src="images/ebhconcept-c1.png" width="950" height="500"></a>
                <a href="home.php"><img src="images/ebhconcept-com.png" width="950" height="500"></a>
                <a href="home.php"><img src="images/ebhconcept-com-tagline1.png" width="950" height="500"></a>
                <a href="home.php"><img src="images/ebhconcept-com-tagline2.png" width="950" height="500"></a>
        </div>
    </div>


<?php //include_once('footer.php'); ?>

    
    </div><!-- page-wrapper close -->


<script type="text/javascript" src="js-jquery/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js-jquery/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
    $(document).ready( function( ){
        $('#slides').cycle({
            fx: 'fade',
            speed: 2000,// 3seconds, amount of time between each cycle
            timeout: 550,// .55seconds, amount of time the transition takes 
            delay: 0,
            pager: '#homeShowNav',
            nowrap: true,//cycles through only once
            end: function (){
                $(location).attr('href', 'home.php');
            }//redirects from one page to another

        });
    });
</script>


<!--<script type="text/javascript">
function onpageload('index.php')
{
    loadanimation();
    function loadanimation('#slides')
    {
        //load animation
        partialviewpage('#slides'); //when animation finishes call 
    }
    function partialviewpage('header.php')
    {
        //insert html file
    }
}
</script>-->



</body>
</html>
