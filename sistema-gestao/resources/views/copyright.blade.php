
<style>
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

    a {
        margin: 12px 8px;
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: opacity 0.4s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a:hover {
        opacity: 0.8;
    }

    a i {
        color: #fff;
        font-size: 1.4em;
    }

    /* Social media colors */
    a.github {
        background-color: #24292e;
    }

    a.twitter {
        background-color: #1da1f2;
    }

    a.pinterest {
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
    <link rel="stylesheet" href="./style.css">
    <title>Devs</title>
</head>
<body>

<div class="card">
    <div class="card-image">
        <img src="./images/profile1.png" alt="Profile image">
    </div>
    <p class="name">Igor Oliveira</p>
    <p>Back-End developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <a href="https://github.com/IgorOliverx" class="github"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/igor-oliveira-69a556246" class="twitter"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<div class="card">
    <div class="card-image">
        <img src="./images/profile2.jpg" alt="Profile image">
    </div>
    <p class="name">Luigi Sousa</p>
    <p>Mobile Developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <a href="https://github.com/LuigiSousaa" class="github"><i class="fab fa-github"></i></a>
        <a href="https://br.linkedin.com/in/luigisousaa" class="twitter"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<div class="card">
    <div class="card-image">
        <img src="./images/profile3.jpg" alt="Profile image">
    </div>
    <p class="name">Ezequiel Samuel</p>
    <p>Front-End developer</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur delectus, mollitia tenetur libero quam recusandae alias in incidunt.</p>
    <div class="socials">
        <a href="https://github.com/Ezequielzz" class="github"><i class="fab fa-github"></i></a>
        <a href="https://br.linkedin.com/in/ezequiel-samuel-681b32270" class="twitter"><i class="fab fa-linkedin"></i></a>

    </div>
</div>

</body>
</html>
