@extends('layouts.masterhome')

@section('title','About Us')

@section('htext', 'Discover the Future at Newland University')

@section('subtext')
Are you ready to take the next step in your education and career? Look no further than Newland University! Our institution offers a wide range of undergraduate and graduate degree programs in fields such as business, engineering, education, and the sciences. Our faculty is made up of experts in their respective fields and are dedicated to providing you with a high-quality education.
@endsection

@section('homestyle')


<style>
    * {
        font-family: Helvetica, sans-serif;
    }

    .page-img {
        background-image: url('/images/abot-us.jpg');
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
        padding: 20px;
        border-radius: 30px;
    }

    .c-images {
        width: 30%;
        border-radius: 10px;
    }

    .exra {
        color: white;
        font-size: 1.2rem;
        font-family: Helvetica;
        width: 40%;
        padding: 10px;
        text-align: center;
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

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 100%;
    }

    .card {
        width: 20%;
        background-color: #f2f2f2;
        text-align: center;
        border-radius: 10px;
        box-shadow: 2px 2px 10px black;
        margin-bottom: 20px;
    }

    .card img {
        width: 100%;
        border-radius: 10px;
    }

    h3 {
        margin-top: 20px;
        font-weight: bold;
    }

    p {
        margin-top: 10px;
        font-size: 14px;
        line-height: 1.5;
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
</style>
@endsection

@section('homecontent')

<div class="leader" style="display:flex;justify-content:center;flex-direction:column;">
    <p class="campus">About Us</p>
    <p class="desc"><span style="color:#2DE2BE;font-size:2rem;">Newland University</span> is a prestigious, private research university located in the heart of a vibrant, cosmopolitan city. Founded in 1900, the university has a rich history of academic excellence and a commitment to providing students with a well-rounded education.

        With a student body of over 25,000, XYZ University offers a diverse and inclusive community where students can thrive and grow. The university offers over 200 academic programs at the undergraduate, graduate, and doctoral levels, across a range of disciplines, including business, engineering, humanities, and the sciences.
        <br><br>
        The campus is equipped with state-of-the-art facilities, including cutting-edge research labs, modern classrooms, and a variety of recreational and athletic options. Students have access to on-campus housing, dining, and healthcare services, making their time at XYZ University a truly holistic experience.

        Faculty at XYZ University are leaders in their respective fields, bringing real-world experience and innovative ideas to the classroom. The university is dedicated to fostering a culture of research and collaboration, and students have the opportunity to participate in cutting-edge projects and initiatives.
        <br><br>
        With a strong alumni network and a commitment to civic engagement, graduates of XYZ University are well-prepared to make a positive impact in their communities and the world.The university also has a robust student life program, with over 200 student organizations and clubs, volunteer opportunities, and a thriving arts and cultural scene. Campus events, including guest lectures, concerts, and athletic competitions, provide students with opportunities to connect with each other and the wider community.
    </p>

</div>
<div class="leader">

    <p class="campus">Our leaders</p>
    <div class="card-container" style="margin-top:20px;">
        <div class="card">
            <img src="/images/leader1.jpg" alt="Card 1">
            <h3>Andrew Adams</h3>
            <p>Andrew is a driven individual with a passion for [specific field or interest]. he has 12 in this area and have had the privilege of working on many projects.</p>
        </div>
        <div class="card">
            <img src="/images/leader2.jpg" alt="Matthew James">
            <h3>Mathew James</h3>
            <p>Mathew has a strong background in IT, and he is always looking for new opportunities to grow and improve. Outside of work/school.</p>
        </div>
        <div class="card">
            <img src="/images/leader3.jpg" alt="Johnny">
            <h3>Johnny Sams</h3>
            <p> Johnny has a passion for [specific field or interest], and I have been working/studying in this area for [time period]. I am excited to [future goal or current project]. Nice to meet you!</p>
        </div>
        <p class="desc" style="font-size:1rem;"><span style="color:#2DE2BE;font-size:1.5rem;">Our leaders</span> are a group of dedicated and knowledgeable individuals who possess a passion for guiding and empowering others. They possess a unique combination of strategic thinking, problem-solving skills, and a commitment to excellence. Their experience and expertise in their respective fields, combined with their ability to communicate and collaborate effectively, have enabled them to drive positive change within the organization. They have a clear vision for the future and inspire their teams to work together to achieve common goals.
        </p>
    </div>

</div>
<div class="leader" style="display:flex;flex-direction:column;">
    <p class="campus" style="align-self:center;">Our Allumies</p>
    <p class="desc" style="width:80%;align-self:center;text-align:center;margin-bottom:5%;">Our alumni are a vital part of our university's legacy and contribute to its continued success. They are accomplished professionals, entrepreneurs, and leaders in their respective fields, and they have made a significant impact on the world. Our alumni network is a supportive and dynamic community, dedicated to staying connected with the university and each other. They provide valuable support to current students and recent graduates, sharing their knowledge and experience to help them reach their career and personal goals. </p>
    <center>
        <table>
            <tr>
                <th>Name</th>
                <th>Graduation Year</th>
                <th>Current Occupation</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>2022</td>
                <td>Software Engineer</td>
            </tr>
            <tr>
                <td>Jane Doe</td>
                <td>2017</td>
                <td>Data Administrator</td>
            </tr>
            <tr>
                <td>James charles</td>
                <td>2021</td>
                <td>Data Scientist</td>
            </tr>
            <tr>
                <td>Joy Willliams</td>
                <td>2019</td>
                <td>Data Scientist</td>
            </tr>
            <tr>
                <td>Will Yu</td>
                <td>2020</td>
                <td>Data Scientist</td>
            </tr>
        </table>
    </center>
</div>

@endsection