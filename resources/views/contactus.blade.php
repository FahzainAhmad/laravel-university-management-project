@extends('layouts.mastersimple')
@section('title','Contact Us')
@section('homestyle')
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        background-color: #001923;
    }

    .navbar {
        background-color: #002736;
        width: 100%;
        display: flex;
        flex-direction: row;
    }

    .navbar li {
        float: right;
        list-style: none;
        margin-right: 4%;

    }

    .navbar li a {
        text-decoration: none;
        color: white;
        transition-duration: 300ms;
    }

    .navbar li a:hover {
        color: #5150fd;
        text-shadow: 10px;
        transition-duration: 300ms;
    }

    .search {
        float: left;
        color: white;
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
    }

    ul {
        width: 100%;
    }

    .logo {
        width: 10%;
    }

    .bttn {
        width: 5%;
        float: right;

    }

    .navv {
        margin-right: 10%;
        width: 70%;
        display: flex;
        align-items: center;
    }

    p {
        font-size: 1.5rem;
        cursor: pointer;
    }

    .btns {
        width: 30%;
        display: flex;
        align-items: center;
    }

    .btn {
        height: 30px;
        width: 70px;
        border: none;
        border-radius: 30px;
        margin-left: 4%;
        background-color: #5150fd;
        color: white;
        transition-duration: 300ms;
    }

    .btn:hover {
        background-color: white;
        color: #5150fd;
        transition-duration: 300ms;
    }

    .cnts {
        border: 1px solid white;
        border-radius: 10px;
        width: 80%;
        margin-left: 10%;
        margin-top: 5%;


    }

    .chead {
        text-align: center;
        color: white;
        font-size: 2.5rem;
    }

    .flname {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .inp {
        height: 40px;
        width: 40%;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        color: white;
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
        width: 100%;
        background: #001923;
    }

    section::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(#ffeb3b, #e91e63);
        border-radius: 50%;
        transform: translate(-420px, -180px);
    }

    section::after {
        content: '';
        position: absolute;
        width: 350px;
        height: 350px;
        background: linear-gradient(#2196f3, #83d8ff);
        border-radius: 50%;
        transform: translate(400px, 180px);
    }

    .container {
        position: relative;
        z-index: 1000;
        width: 100%;
        max-width: 1000px;
        padding: 50px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        overflow: hidden;
        backdrop-filter: blur(25px);
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -40%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.05);
        pointer-events: none;
        transform: skewX(-15deg);
    }

    .container h2 {
        width: 100%;
        text-align: center;
        color: #fff;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .container .row100 {
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .container .row100 .col {
        position: relative;
        width: 100%;
        padding: 0 10px;
        margin: 30px 0 20px;
    }

    .container .row100 .col .inputBox {
        position: relative;
        width: 100%;
        height: 40px;
        color: #fff;
    }

    .container .row100 .col .inputBox input,
    .container .row100 .col .inputBox textarea {
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        box-shadow: none;
        border: none;
        outline: none;
        font-size: 15px;
        padding: 0 15px;
        z-index: 1;
        color: #000;
    }

    .container .row100 .col .inputBox .text {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 40px;
        font-size: 18px;
        padding: 0 10px;
        display: block;
        transition: 0.5s;
        pointer-events: none;
    }

    .container .row100 .col .inputBox input:focus+.text,
    .container .row100 .col .inputBox input:valid+.text,
    .container .row100 .col .inputBox textarea:focus+.text,
    .container .row100 .col .inputBox textarea:valid+.text {
        top: -35px;
        left: -10px;
    }

    .container .row100 .col .inputBox .line {
        position: absolute;
        bottom: 0;
        display: block;
        width: 100%;
        height: 2px;
        background: #fff;
        transition: 0.5s;
        border-radius: 2px;
        pointer-events: none;
    }

    .container .row100 .col .inputBox input:focus~.line,
    .container .row100 .col .inputBox input:valid~.line {
        height: 100%;
    }

    .container .row100 .col .inputBox.textarea {
        position: relative;
        width: 100%;
        height: 150px;
        padding: 10px 0;

    }

    .container .row100 .col .inputBox textarea:focus~.line,
    .container .row100 .col .inputBox textarea:valid~.line {
        height: 100%;
    }

    .container .row100 .col input[type="submit"] {
        border: none;
        padding: 10px 40px;
        cursor: pointer;
        outline: none;
        background: #fff;
        color: #000;
        font-weight: 800;
        font-size: 18px;
        border-radius: 2px;
    }

    .fixed {
        position: fixed;
        bottom: 30%;
        left: 0;
        width: 300px;
        z-index: 99999;
        display: flex;
        flex-direction: column;
    }

    .icon {
        width: 35px;
    }

    input[type="submit"]:hover {
        background-color: white;
        color: #5150fd;
        border-radius: 30px;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }
</style>
@endsection

@section('homecontent')

<section style="margin-top:5%;">
<form action="\contacts" method="post" style="width:50%;;">
    @csrf
    <div class="container">
        <h2>Contact Us</h2>


        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span class="text">Full Name</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>


        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span class="mail">Email</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="col">
                <div class="inputBox">
                    <input type="text" name="mobile" required="required">
                    <span class="tel">Mobile</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea required="required" name="cmsg"></textarea>
                    <span class="text">Type Your Message Here...</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <input type="submit" value="Send" style="background-color: #5150fd;border-radius: 30px;font-family: Arial, Helvetica, sans-serif;color: white;" class="nice">
            </div>
        </div>
        </form>

    </div>
</section>

<div class="fixed">
    <img src="/images/facebook.png" class="icon">
    <img src="/images/twitter.png" class="icon">
    <img src="/images/instagram.png" class="icon">
    <img src="/images/linkedin.png" class="icon">
    <img src="/images/youtube.png" class="icon">
    <img src="/images/gmail.png" class="icon">
</div>
@endsection