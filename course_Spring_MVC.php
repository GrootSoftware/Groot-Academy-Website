<?php include 'includes/header.php'; ?>


<!-- course details starts -->
<div class="course_detail">
    <div class="cr_detail_sec">

        <h3>JAVA EXPERT TRAINING</h3>

        <h4>Open the Doors of Opportunity by Becoming an Expert in Java</h4>

        <p>If you are looking to become an expert web application developer or an in-demand software programmer, then <strong>Java Expert Training</strong> is the language to learn. Java is an Object Oriented Programming language which requires sharp logical thinking abilities. The trainers at Groot Academy have more than a decade of experience in developing software solutions using Java. Groot Academy has an edge as a <strong>Best Java Expert Training Institute in Jaipur</strong> because we have global alliances which enable us to create courses based on the current industry requirements. The mentors at Groot Academy guide each student in mastering the basic to advanced concepts of Java. We aim at making every student industry ready and not just learn theoretical knowledge.</p>
    </div>

    <?php include 'includes/query_form.php'; ?>
</div>


<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out ">
        <h4>Why should you learn Java?</h4>

        <p><strong>Java Training</strong> is the most widely used programming language with a wide range of application. Java was released in the year 1995 by Sun Microsystems. It has been here for more than twenty years. It is used for the development of the Internet of Things, APIs, e-commerce websites, financial trading platforms, scientific applications and a lot more. It is Java that powers Android. <strong>Java Professional Training</strong> is present in every aspect of the digital environment. Learning a language from <strong>Java Professionals</strong> makes it easy to learn other languages if you want to broaden your horizons.</p>

        <p>You may have no background in programming but you can still learn Java and can become <strong>Expert in Java Training</strong>. Groot Academy is the <strong>Best Java Professional Training Institute in Jaipur</strong> as it gives you a hands-on learning experience in creating various, in-demand solutions using Java.</p>
    </div>
</div>

<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out ">
        <h4>Jobs for Java Programmers</h4>

        <p><strong>Java Expert</strong> developers earn handsome money. As mentioned earlier there is a huge range of possibility for Java programmers. They are in high demand not only in India but in other countries like U.S. and U.K. as well. Some of the career options for Java programmers are Software Developer, Web Developer, Application Developer, Web Programmer, EJB Programmer, Back-End Developer, Big Data Developer, Android Developer, Embedded Devices Developer and a lot more. From mobile phones to supercomputers, there are vast options for usage and application of Java. Become a Java Professional by learning from the <strong>Best Java Training Institute</strong>.</p>
    </div>
</div>

<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out ">
        <h4>Training and Placement</h4>


        <p>Our trainers are <strong>Java Experts &amp; Java Professionals</strong> with over (X) years of practical experience. It doesn&rsquo;t matter if you are a beginner or want to improve your existing knowledge of Java. Our trainers will mentor you to become the best in your field. <strong>Groot Academy Jaipur</strong> has been a leading training institute for the past twenty years. We prepare you for interviews and provide 100% assistance in job placement with leading tech companies of India. Our ability to provide practical training to our students has made us the <strong>Best Java training institute in Jaipur, Ghaziabad, Gurgaon, Gr. Jaipur, Faridabad</strong>.</p>
    </div>
</div>

<div class="rs-services style4 modify1 gray-color pt-40 pb-120 md-pt-75 md-pb-40 sm-pb-70">
    <div class="px-4 d-flex justify-content-around">
        <h4 class="mt-4">Spring MVC</h4>
    </div>
    <div class="px-4 d-flex justify-content-around">


        <div class="contentAcc">
            <div class="sergio">




                <h2>Overview<span class="down_arrow">&#8682;</span> </h2>


                <h2>What Is Spring MVC?<span class="down_arrow">&#8682;</span> </h2>


                <h2>Spring MVC Using Java Configuration <span class="down_arrow">&#8682;</span> </h2>


                <h2>Spring MVC Using XML Configuration<span class="down_arrow">&#8682;</span> </h2>
            </div>
        </div>
        <div class="contentAcc">
            <div class="sergio">

                <h2>Controller and Views<span class="down_arrow">&#8682;</span> </h2>

                <h2>Spring MVC With Boot<span class="down_arrow">&#8682;</span> </h2>
                <ul>
                    <li>Spring Boot Starters</li>
                    <li> Spring Boot Entry Point </li>
                </ul>

                <h2> Conclusion<span class="down_arrow">&#8682;</span> </h2>




            </div>

        </div>
        <!-- 
        <div class="q_form">
            <form action="">

                <h3 class="text-center">Have A Query?</h3>
                <input type="text" class="form-control my-3" placeholder="Name">
                <input type="email" class="form-control my-3" placeholder="Email">
                <input type="text" class="form-control my-3" placeholder="Contact Number">
                <button class=" my-3">SUBMIT</button>
            </form>
            <textarea type="text" class="form-control" placeholder="Query Here" >
        </div> -->

    </div>

</div>
< <!-- course details ends -->



    <?php include 'includes/footer.php'; ?>

    <script>
        // var acc1 = document.getElementsByClassName("contentAcc");
        var acc = document.getElementsByTagName("h2");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;

                var arrow = this.firstElementChild;
                console.log(panel);

                // console.log(arrow)
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                    arrow.style.transform = "rotate(180deg)";

                } else {
                    panel.style.display = "block";
                    arrow.style.transform = "rotate(0deg)";

                }
            });
        }
    </script>