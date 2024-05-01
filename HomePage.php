<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        h1
        {
            text-align: center;
            top : 25%;
            left : 45%;
            margin-bottom: 20px;
            color: #0fa;
            text-shadow:
                    0 0 7px #0fa,
                    0 0 10px #0fa,
                    0 0 21px #0fa,
                    0 0 42px #0fa,
                    0 0 82px #0fa,
                    0 0 92px #0fa,
                    0 0 102px #0fa,
                    0 0 151px #0fa;
        }
        body {
            align-items: center;
            min-height: 100vh;
            justify-content: center;
            background: #000; /* Fixed background color */
        }
        nav a {
            left: 30%;
            position: relative;
            font-size: 1.1em;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            padding: 6px 20px;
            transition: 0.5s;
        }
        nav a:hover {
            color: #8ef;
        }
        nav a span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            border-bottom: 2px solid #bef;
            border-radius: 15px;
            transform: scale(0) translateY(50px);
            opacity: 0;
            transition: 0.5s;
        }
        nav a:hover span {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
        p,ul{
            color: white;
            text-align: left;
        }
        h2
        {
            margin-bottom: 20px;
            color: #8ef;
            text-shadow:
                    0 0 7px #8ef,
                    0 0 10px #8ef,
                    0 0 21px #8ef,
                    0 0 42px #8ef,
                    0 0 82px #8ef,
                    0 0 92px #8ef,
                    0 0 102px #8ef,
                    0 0 151px #8ef;
        }
    </style>
</head>
<body>
<br><br>
<h1>Cognitron</h1><br>
<nav>
    <a href="#">Home <span></span></a>
    <a href="Employee_Registration.php">Enroll<span></span></a>
    <a href="Task_Logger.php">Log a Task<span></span></a>
    <a href="LeaderBoard.php">LeaderBoard <span></span></a>
    <a href="View.php">DataBase<span></span></a>
    <a href="Fire.php">Fire<span></span></a>
</nav><br><br>

<p>At Cognitron, we're pioneering the future with Artificial Intelligence. Our mission is to harness the power of AI to revolutionize industries, streamline processes, and enhance human experiences. With a team of dedicated experts in AI, machine learning, and data science, we're committed to delivering innovative solutions that drive tangible results for our clients.</p>
<br>
<h2>Who We Are</h2>

<p>At our core, we're a team of passionate individuals with a shared vision: to leverage AI technology to solve complex challenges and create opportunities for growth. From seasoned AI veterans to fresh minds with a drive for innovation, our diverse team brings together a wealth of knowledge and experience to every project we undertake.</p>
<br>
<h2>What We Do</h2>

<p>At Cognitron, we specialize in developing cutting-edge AI solutions tailored to meet the unique needs of our clients. Whether it's predictive analytics, natural language processing, computer vision, or intelligent automation, we have the expertise to design and deploy AI systems that unlock new possibilities and drive business success.</p>
<br>
<h2>Why Choose Us</h2>

<ul>
    <li><strong>Expertise:</strong> Our team consists of top AI professionals with extensive experience in developing AI solutions across various industries.</li>
    <li><strong>Innovation:</strong> We stay ahead of the curve by continuously exploring new technologies and techniques to deliver innovative AI solutions that keep our clients ahead of the competition.</li>
    <li><strong>Customization:</strong> We understand that every business is unique. That's why we work closely with our clients to develop bespoke AI solutions that address their specific challenges and goals.</li>
    <li><strong>Results-Driven:</strong> Our track record speaks for itself. We measure our success by the tangible results we achieve for our clients, whether it's increased efficiency, cost savings, or revenue growth.</li>
</ul>
<br>
<h2>Our Services</h2>

<ul>
    <li><strong>AI Consulting:</strong> From strategy development to implementation, we provide end-to-end AI consulting services to help businesses harness the full potential of AI.</li>
    <li><strong>AI Development:</strong> We design and develop custom AI solutions, including machine learning models, predictive analytics systems, and intelligent automation platforms.</li>
    <li><strong>AI Integration:</strong> We seamlessly integrate AI technology into existing systems and processes, ensuring a smooth transition and maximum efficiency.</li>
    <li><strong>AI Training:</strong> We offer comprehensive training programs to empower businesses and individuals with the skills and knowledge they need to succeed in the age of AI.</li>
</ul>
<br>
<h2>Get in Touch</h2>

<p>Ready to take your business to the next level with AI? Contact us today to learn more about our services and how we can help you achieve your goals. Let's build the future together with AI.</p>

</body>
</html>


