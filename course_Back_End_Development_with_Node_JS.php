<?php include 'includes/header.php'; ?>


<!-- course details starts -->
<div class="course_detail">
    <div class="cr_detail_sec">

        <h3><strong>Full Stack With Node js Training In Jaipur</strong></h3>

        <p><img alt="4.5 Star Rating: Very Good" src="https://1.bp.blogspot.com/-NGZOUDhazes/XiggetbcFJI/AAAAAAAAADg/__9gzm22fzowvVCl0n7FXO01teE74ZrswCLcBGAsYHQ/s1600/star%2Brating%2B002.jpg" /> 4.7 out of 5 based on 3812 Votes.</p>

        <p>Are you Looking for the <strong>Best Institute for Full Stack With Node js training in Jaipur</strong>? GROOT ACADEMY offers Full Stack With Node js&nbsp;training classes with live project by expert trainer in Jaipur. Our Full Stack With Node js training program in Jaipur is specially designed for Under-Graduates (UG), Graduates, working professional and also for Freelancers. We provide end to end learning on Full Stack With Node js&nbsp;Domain with deeper dives for creating a winning career for every profile.</p>

        <h4><strong>Why To Enroll In Our Full Stack With Node js&nbsp;Training Course in Jaipur?</strong></h4>

        <p>We Focus on Innovative ideas, High-quality Training, Smart Classes, 100% job assistance, Opening the doors of opportunities. Our Full Stack With Node js&nbsp;Trainees are working across the nation. We at GROOT ACADEMY India, No#1 Full Stack With Node js&nbsp;Course in Jaipur with 100% Placement.&nbsp;Certified Trainers with Over 10,000 Students Trained in <strong>Full Stack With Node js Course in Jaipur.</strong></p>

        <h4>What Our Students Will Get During Full Stack With Node js&nbsp;Training Course?</h4>

        <p>Get dedicated student support, career services, industry expert mentors and real world projects. Career Counselling. Timely Doubt Resolution. 50% Salary Hike, Career Counselling Case Studies + Tools + Certificate.</p>

        <h4><strong>How GROOT ACADEMY Provides Best Placement Assistance?</strong></h4>

        <ul>
            <li>GROOT ACADEMY is the best institute for <strong>Full Stack With Node js Training In Jaipur&nbsp;</strong>in providing placement assistance to every student.</li>
            <li>We also teach students how to build their Resumes.</li>
            <li>Our Placement cell helps every student to get a job in MNCs like Tech Mahindra, Wipro, TCS, Accenture, etc.</li>
            <li>Internships are also available in GROOT ACADEMY.</li>
        </ul>

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


<!-- course details ends -->



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