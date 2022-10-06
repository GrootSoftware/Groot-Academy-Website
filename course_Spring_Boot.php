<?php include 'includes/header.php'; ?>


<!-- course details starts -->
<div class="course_detail">
    <div class="cr_detail_sec">

        <h3>SPRING BOOT &amp; MICROSERVICES SECURITY WITH HIBERNATE &amp; JPA TRAINING</h3>

        <p>In Spring Microservices training first of all we discuss principles, characteristics, design and use cases along with project implementation. Microservices is an architectural style which says decompose big applications into smaller services. Thereafter communicate those services either synchronously or asynchronously. Besides that the microservices projects are developed by using Boot.</p>
    </div>

    <div class="cr_query">
        <div class="q_form" style="width: 100%;">
            <form action="">

                <h3 class="text-center">Have A Query?</h3>
                <input type="text" class="form-control my-3" placeholder="Name">
                <input type="email" class="form-control my-3" placeholder="Email">
                <input type="text" class="form-control my-3" placeholder="Contact Number">
                <button class=" my-3">SUBMIT</button>
            </form>
            <!-- <textarea type="text" class="form-control" placeholder="Query Here" > -->
        </div>
    </div>

</div>

<div class="rs-services style4 modify1 gray-color pt-40 pb-120 md-pt-75 md-pb-40 sm-pb-70">
    <div class="px-4 d-flex justify-content-around">
        <h4 class="mt-4">Spring Boot</h4>
    </div>
    <div class="px-4 d-flex justify-content-around">

        <div class="contentAcc">

            <div class="sergio">

                <h2>Introduction to Spring Framework <span class="down_arrow">&#8682;</span> </h2>



                <h2>What’s new Spring 5?<span class="down_arrow">&#8682;</span> </h2>


                <h2>IOC & Dependency Injection<span class="down_arrow">&#8682;</span> </h2>




                <h2>Introduction to Spring Boot<span class="down_arrow">&#8682;</span> </h2>



                <h2>Building a Spring Boot Application<span class="down_arrow">&#8682;</span> </h2>




                <h2>Introduction to Spring Web MVC<span class="down_arrow">&#8682;</span> </h2>



                <h2>Creating a Web Application in Spring Boot<span class="down_arrow">&#8682;</span> </h2>




                <h2>Creating Rest Services in Spring Boot<span class="down_arrow">&#8682;</span> </h2>



                <h2>Introduction to Hibernate & JPA<span class="down_arrow">&#8682;</span> </h2>



                <h2>Spring Data JPA<span class="down_arrow">&#8682;</span> </h2>



                <h2>Introduction to Microservices<span class="down_arrow">&#8682;</span> </h2>
            </div>
        </div>
        <div class="contentAcc">

            <div class="sergio">



                <h2>Creating Microservices using Spring Boot<span class="down_arrow">&#8682;</span> </h2>


                <h2>Integration of Microservices<span class="down_arrow">&#8682;</span> </h2>


                <h2>Introduction to Spring Security<span class="down_arrow">&#8682;</span> </h2>


                <h2>Securing Microservices using JWT<span class="down_arrow">&#8682;</span> </h2>


                <h2>Securing MVC Web Applications Using Spring Security<span class="down_arrow">&#8682;</span> </h2>

                <h2>Implementing Single-sign on<span class="down_arrow">&#8682;</span> </h2>



                <h2>Implementing Remember Me feature<span class="down_arrow">&#8682;</span> </h2>



                <h2>Introduction to Oauth-2<span class="down_arrow">&#8682;</span> </h2>


                <h2>Spring cloud and Netflix OSS<span class="down_arrow">&#8682;</span> </h2>


                <h2>A sample Project<span class="down_arrow">&#8682;</span> </h2>



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