<style>

    ul {
        position: relative;
        margin: 0;
        padding: 0;
        display: flex;
    }
    ul li {
        list-style: none;
        width: 40px;
        height: 40px;
        margin: 0 15px;
        background-color: #ccc;
        transform: rotate(-30deg) skew(25deg);
    }

    ul li span {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        transition: 0.5s;
        display: flex !important;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 30px !important;
    }

    ul li:hover span {
        box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.1);
    }
    ul li:hover span:nth-child(5) {
        transform: translate(40px, -40px);
    }
    ul li:hover span:nth-child(4) {
        transform: translate(30px, -30px);
        opacity: 0.8;
    }
    ul li:hover span:nth-child(3) {
        transform: translate(20px, -20px);
        opacity: 0.6;
    }
    ul li:hover span:nth-child(2) {
        transform: translate(10px, -10px);
        opacity: 0.4;
    }
    ul li:hover span:nth-child(1) {
        transform: translate(0, 0);
        opacity: 0.2;
    }

    ul li:nth-child(4) span {
        background-color: #e4405f;
    }

    ul li:nth-child(3) span {
        background-color: rgb(67, 67, 246);
    }
    ul li:nth-child(2) span {
        background-color: rgb(212, 52, 52);
    }
    ul li:nth-child(1) span {
        background-color: rgba(63, 176, 245, 0.744);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
        color: #54677c;
    }

    body {
        min-height: 100vh;
        width: 100%;
        background-color: #e4e4e4;
        display: flex;
        /* Responsive behaviour */
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 40px 16px;
    }

    .card {
        position: relative;
        width: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15);
        padding: 16px;
        margin:  56px 24px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 15px 35px -15px rgba(0, 0, 0, 0.5),
        0 5px 20px 0 rgba(0, 0, 0, 0.1);
    }

    .card-image img {
        width: 100%;
        transform: scale(1.2);
    }

    p {
        line-height: 24px;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
        text-align: center;
    }

    .name {
        margin-top: 80px;
        font-size: 1.4em;
        color: #333;
        font-weight: bold;
        letter-spacing: 0.8px;
        margin-bottom: 8px;
    }

    .socials {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    button {
        margin: 12px 8px;
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: opacity 0.4s;
    }

    button:hover {
        opacity: 0.8;
    }

    button i {
        color: #fff;
        font-size: 1.4em;
    }

    /* Social media colors */
    button.github {
        background-color: #24292e;
    }

    button.twitter {
        background-color: #1da1f2;
    }

    button.pinterest {
        background-color: #d3263a;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Team profile cards</title>
</head>
<body>

<div class="card">
    <div class="card-image">
        <img src="./images/profile1.png" alt="Profile image">
    </div>
    <p class="name">Julie Watson</p>
    <p>UX / UI developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <ul>
            <li>
                <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-google-plus" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-linkedin" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-instagram" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-image">
        <img src="./images/profile2.jpg" alt="Profile image">
    </div>
    <p class="name">Marc McKnew</p>
    <p>Front-End developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <button class="github"><i class="fab fa-github"></i></button>
        <button class="pinterest"><i class="fab fa-pinterest-p"></i></button>
    </div>
</div>

<div class="card">
    <div class="card-image">
        <img src="./images/profile3.jpg" alt="Profile image">
    </div>
    <p class="name">Jenny McKnew</p>
    <p>Back-End developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <button class="github"><i class="fab fa-github"></i></button>
        <button class="twitter"><i class="fab fa-twitter"></i></button>
    </div>
</div>

</body>
</html>
