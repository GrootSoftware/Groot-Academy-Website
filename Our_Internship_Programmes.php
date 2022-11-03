<?php include 'includes/header.php'; ?>


<!-- course details starts -->
<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out ">

        <h3><strong><span itemprop="itemreviewed">Groot Academy Internship Program&nbsp;</span></strong></h3>

        <p><span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating"><img alt="4.9 Star Rating: Very Good" src="assets/images/star_rating_groot_Academy.jpg" style="margin-left: 22px;" /> <span itemprop="average">4.9</span> out of <span itemprop="best">5</span> </span>based on <span itemprop="votes">1854</span> Votes.</p>
        <h4>Join our next generation of technologists
</h4>
        <p style="text-align: justify;">Through our Software Engineer Internship, you could help develop innovative solutions that impact the day-to-day lives of customers, clients and businesses around the world.</p>
        <p style="text-align: justify;">Spend your internship with one of the best technology-driven programming institute in jaipur. With the scale of our in-house projects, you could get hands-on experience in any programming technology you are looking for. We’re committed to advancing your career helping you acquire new skills, opportunities and a global network of support that will help you take your career in any direction imaginable.</p>

    </div>

    <?php include 'includes/query_form.php'; ?>
</div>
</div>

</div>


</div>

<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out">
        <h4>What we offer?</h4>
        <p style="text-align: justify;">This 3 month internship will give you the opportunity to learn about our
            technology business, build your coding skills and prepare you for your career. You could work on projects
            that deliver real solutions for our customers, clients and businesses. No matter if you’re working on
            payment solutions or trading algorithms, you’ll see tangible results from your work.</strong></p>

        <h4>On-the-job experience</h4>
        From the start, you’ll have the support you need to succeed. Dive head-first and gain hands-on experience
        creating innovative solutions that make a difference for our customers, clients and employees. You’ll be given a
        peer mentor who completed the Software Engineer Internship to help you navigate the firm and the program. A
        senior engineer will also check in with you to offer advice, help make connections and oversee your development.
        Our managers receive extensive training on how to help interns to make the most of their program. You’ll have
        clear priorities and opportunities for check ins throughout the internship to make sure you’re achieving your
        goals.

        <p>Interns are encouraged to take time to explore, shadowing other teams and networking with various people. We
            offer social events and other activities in our business resource groups to help you expand your
            professional network across our lines of business. You’ll also work in teams with other interns to solve a
            business challenge or on a project assigned specifically to your group.
        </p>
        <h4>Training</h4>
        You'll begin with an induction covering our tech strategies, products and systems, as well as an overview of our
        technology community. You'll work on agile teams with peers and experienced software engineers to grow your
        skills, share ideas and innovate with our technology community all over the world, as well as gain deeper
        insight into what it means to work here through networking events, senior speaker sessions and peer-mentorship
        programs.

        <p>We also provide access to hack-a-thon where you’ll work alongside our engineers to solve real business
            challenges in a fun, collaborative environment. Because we’re always looking for new ways to innovate, your
            ideas and contributions are welcome from the beginning.

        </p>
        <p>Throughout the course of the summer, you’ll hear from senior leaders during our speaker series and have other
            opportunities for training on technical and professional skills.
        </p>
        <h4>Career Progression</h4>
        Those who successfully complete the program may be offered a position in our full-time Software Engineer
        Program.

    </div>


</div>
</div>

<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out">
        <h4>What you will do?</h4>

        <p style="text-align: justify;">Your responsibilities will vary based on your location and team assignment. You
            could be developing digital and mobile features that give our customers and clients more control over how
            they bank with us. You could be strategizing on how big data can make our trading systems quicker. You could
            help create the next innovation in payments for merchants. You could be engineering automated recovery
            solutions on a global scale. You could be supporting the integration of our private and public cloud
            platforms. No matter your role, you’ll have the opportunity to learn new coding languages, introduce new
            products for our clients and work with innovative new technology such as machine learning.

            </strong></p>

        <p style="text-align: justify;">You’ll develop the skills and acumen to take your career in any direction and
            make a genuine contribution to our businesses from the start.
        </p>

    </div>


</div>
</div>

<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out">
        <h4>Who we are looking for?</h4>


        <p style="text-align: justify;">Valued qualities
            We’re looking for motivated and enthusiast computer programmers who want to directly contribute to coding
            industry from day one. No matter your background, we’re looking for those with a strong interest coding
            skills. Our teams work collaboratively, so we’re looking for those who have excellent teamwork and
            demonstrated leadership abilities.

            </strong></p>



    </div>


</div>
</div>


<div class="course_detail">
    <div class="cr_detail_sec cr_detail_sec_out">
        <h4>Key skills</h4>


        <p style="text-align: justify;">You should have basic coding skills, be able to understand the coding tasks and
            technicalities fluently. You should have exceptional problem solving and analytical thinking skills. We’re
            looking for those who are intellectually curious, collaborative and open to new challenges, as well as being
            able to take ownership of projects to bring them to fruition.


            </strong></p>



    </div>


</div>
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