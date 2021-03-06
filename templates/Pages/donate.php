<?php $this->assign('title', 'Donate'); ?>

<section id="highlights" class="wrapper style3 has-text-centered">
    <h2 class="title is-2">Support Our Mission</h2>
    <h4 class="subtitle is-4">Help Power the Community Movement</h4>
    <p>Imperivm Romanvm is dedicated to the restoration and propagation of Roman culture and antique ideals in the era of Modernism and its successor ideologies. Our ultimate goal is the construction of Roma Tertia — Third Rome — to act as a successor to the original Rome and the New Rome of Constantinople.</p>
    <a href="https://paypal.me/qaeliusvolusus" class="button is-primary is-large is-fullwidth" id="learnMorePrimary">Contribute Today - PayPal Quinte Aeli Voluse</a>
</section>

<script>
    
    function changeText() {

        if ($(window).width() < 950) {
            $('#learnMorePrimary').text("Paypal Quinte Aeli Voluse")
        } else {
            $('#learnMorePrimary').text("Contribute Today - PayPal Quinte Aeli Voluse")
        }
    }
    $(document).ready(changeText());

    $(function() {

        var timer_id;

        $(window).resize(function() {

            clearTimeout(timer_id);



            timer_id = setTimeout(changeText(), 300);
        });
    });
</script>