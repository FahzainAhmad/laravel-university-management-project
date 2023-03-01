@extends('layouts.masterhome')

@section('title','Home')

@section('htext', 'Transforming the Future')

@section('subtext')
Are you ready to take the next step in your education and career? Look no further than Newland University! Our institution offers a wide range of undergraduate and graduate degree programs in fields such as business, engineering, education, and the sciences. Our faculty is made up of experts in their respective fields and are dedicated to providing you with a high-quality education.
@endsection

@section('homestyle')


<style>
    * {
        font-family: Helvetica, sans-serif;
    }

    .page-img {
        background-image: url('/images/bg-img.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .desc {
        color: white;
        font-size: 1.2rem;
        font-family: Helvetica;
        margin-top: 5%;
        padding-left: 5%;
        padding-right: 5%;
    }

    .campus {
        color: #2DE2BE;
        font-family: Helvetica, sans-serif;
        font-size: 3rem;
        text-align: center;
        margin-top: 2%;
    }

    .camp1 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 2%;
        border-radius: 30px;
    }

    .c-images {
        width: 20%;
        border-radius: 10px;
    }

    .exra {
        color: white;
        font-size: 1.2rem;
        font-family: Helvetica;
        width: 60%;
        padding: 10px;
        align-self: center;
    }

    table {
        width: 80%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #2DE2BE;
        padding: 8px;
        text-align: left;
        color: white;
    }

    th {
        background-color: black;
        font-weight: bold;
        color: white;
    }

    a {
        text-decoration: none;
    }

    a:active {
        text-decoration: none;
    }
</style>
@endsection

@section('homecontent')

<div class="leader" style="display:flex;justify-content:center;flex-direction:column;">
    <p class="campus">Who are we?</p>
    <p class="desc"><span style="color:#2DE2BE;font-size:2rem;">W</span>elcome to Newland University, a premier institution of higher education. Our university offers a diverse range of undergraduate and graduate degree programs in fields such as business, engineering, education, and the sciences. Our faculty consists of highly qualified and dedicated educators who are experts in their respective fields and are committed to providing students with a high-quality education.

        Here we provide a dynamic and challenging education that prepares our students for a successful future. With a wide range of undergraduate and graduate programs, we offer something for everyone. Our dedicated faculty and staff are committed to providing an outstanding learning experience in a supportive and inclusive environment. Apply now and join our community of thinkers, innovators, and leaders. Your education is the key to your future, and XYZ University is here to help you unlock your full potential.

        We also pride ourselves in providing research opportunities for students to gain hands-on experience in their field of interest, and our state-of-the-art facilities and cutting-edge technology support this. <br><br>
        Unlock Your Potential with a Degree from Our University! Experience a dynamic learning environment, top-notch faculty, and endless opportunities for personal and professional growth. Apply now and join a diverse community of students and alumni who are making a difference in the world.Discover a world of possibilities at our university! From innovative programs in cutting-edge fields to hands-on learning experiences and real-world internships, we provide a comprehensive education designed to prepare you for success. With state-of-the-art facilities, a vibrant campus life, and a commitment to student success, there's never been a better time to join our community. Apply now and take the first step towards your future!</p>

</div>
<div class="leader">

    <p class="campus">Student Life</p>
    <div class="camp1">
        <img src="/images/camp1-home.jpg" class="c-images">
        <span class="exra"><span style="color:#2DE2BE;">University campus</span> life provides a diverse range of extracurricular activities and clubs for students to get involved in, such as sports teams, music groups, and student government. Our faculty consists of highly qualified and dedicated educators who are experts in their respective fields and are committed to providing students with a high-quality education.</span>
    </div>
    <div class="camp1">
        <span class="exra">Are you tired of the same old <span style="color:#2DE2BE;">Cafeteria</span> food? Come check out the Newland College Canteen! We offer a wide variety of delicious and nutritious meals to satisfy all tastes. Our faculty consists of highly qualified and dedicated educators who are experts in their respective fields and are committed to providing students with a high-quality education.</span>
        <img src="/images/library.jpg" class="c-images">
    </div>
    <div class="camp1">
        <img src="/images/safety.jpg" class="c-images">
        <span class="exra"><span style="color:#2DE2BE;">Safety and security services.</span>Highlight emergency preparedness measures, such as emergency response plans, training programs, and security personnel.
            Encourage students to be aware of their surroundings and to report any suspicious activity.
            Share information on campus safety resources, such as blue light emergency phones, escort services, and self-defense classes.</span>
    </div>
</div>
<div class="leader" style="display:flex;flex-direction:column;">
    <p class="campus" style="align-self:center;">Courses</p>
    <p class="desc" style="width:80%;align-self:center;text-align:center;">Our university offers a wide range of courses across various disciplines, including:

        Business: Study finance, marketing, management, and more to prepare for a career in the fast-paced world of business.

        Computer Science: Learn coding, algorithms, and data structures to become a software developer or data analyst.

        Engineering: Choose from specializations like mechanical, electrical, and civil engineering to design, build, and solve real-world problems.

        Humanities: Explore topics like history, literature, and philosophy to gain a deeper understanding of human experience.

        Natural Sciences: Study subjects like biology, chemistry, and physics to gain a deeper understanding of the natural world.</p>
    <table style="align-self:center;margin-top:5%;">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Fees</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CSCI 101</td>
                <td>Introduction to Computer Science</td>
                <td>Rs 30000</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CSCI 102</td>
                <td>Bachelor's of Computer Application</td>
                <td>Rs 21000</td>
                <td>6</td>
            </tr>

            <tr>
                <td>CSCI 103</td>
                <td>Bachelor's of Technology</td>
                <td>Rs 40000</td>
                <td>8</td>
            </tr>

            <tr>
                <td>CSCI 104</td>
                <td>Master's of Technology</td>
                <td>Rs 45000</td>
                <td>4</td>
            </tr>

            <tr>
                <td>CSCI 105</td>
                <td>Master's of Computer Application</td>
                <td>Rs 30000</td>
                <td>5</td>
            </tr>
            <tr>
                <td>CSCI 106</td>
                <td>Master's of Science in IT</td>
                <td>Rs 30000</td>
                <td>6</td>
            </tr>
            <tr>
                <td>CSCI 107</td>
                <td>Bachelor's of Science in IT</td>
                <td>Rs 30000</td>
                <td>7</td>
            </tr>


        </tbody>
    </table>
</div>

@endsection