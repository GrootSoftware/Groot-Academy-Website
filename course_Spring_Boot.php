<?php include 'includes/header.php'; ?>


<!-- course details starts -->
<div class="course_detail">
    <div class="cr_detail_sec">
        <h4>Open the Doors of Opportunity by Becoming a Expert Spring Boot Programmer</h4>
        <p>Spring helps you to solve almost any enterprise problem but for that, you have to set up and configure everything manually. For this you have to learn too many things at once and will eventually feel overwhelmed and you get frustrated. Which makes it incredibly hard when you just get started.

            On the other hand, Spring Boot provides almost all configuration and set up automatically without doing it manually. As a programmer, our main aim is to focus on business logic rather than to do manual configuration. And this is the reason for most of the developers to select spring boot over spring.
        </p>
        <h4>Why should you learn Spring Boot Programming</h4>
        <p>We are programmers/developers and our one and only aim is to do the task with the available solutions or tools and complete the task with satisfying all the needs. You can proceed to learn spring boot directly without worrying about the spring framework.
            <li>Spring has flexible and comprehensive set of extensions and third-party libraries</li>
            <li>Spring is fast and productive</li>
            <li>Spring is everywhere</li>
            <li>Spring is secure</li>
        </p>
        <h4>Jobs for Spring Boot Programmer</h4>
        <p>For a few years Spring has been the most popular server-side frameworks in the developer community. Since it is being used widely the number of job opportunities has been on the rise. This rise can be seen as the number of libraries related to Spring in Github is increasing, where out of 100 Github libraries 15 of them are Spring related. Also, developers are able to create Spring applications and several services with ease. Today the need of the hour for the Java developers looking for impressive growth is to learn Spring Framework.
        </p>
        <h4>Training and Placement
        </h4>
        <p>This course focuses on building APIs (application programming interfaces), but Spring can be used to build much more, including cloud services, front-end web apps, and microservices. In this course, you will learn how to build RESTful APIs with the annotations-based approach to Spring and Spring Boot. You’ll first get acquainted with the framework, exploring the file structure, and starting up your own Spring app on your computer. After that, you’ll learn how to handle, route, and respond to requests using controllers.

            Groot Academy has been a leading programming training institute in jaipur. Our ability to provide practical training to our students has made us the Best Spring Framework development training institute in Jaipur and nearby cities of Rajasthan.

        </p>
    </div>

    <?php include 'includes/query_form.php'; ?>

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