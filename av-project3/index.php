<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ana Vaquera, CSC 170 Project 3</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/navigation.css">
        <link rel="stylesheet" href="sss/sss.css">
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110853844-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-110853844-2');
        </script>
    </head>
    <body id="homepage">
        <section class = "banner">
            <?php include "inc/banner.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section> <!--.banner-->
        <div class="container">    
            
        <section class = "hero">
            <h2>Welcome to CSC 170 Project 3: People</h2>
           
            <div class="slider">
                <img src="images/billhome.jpeg" alt="Bill Gates">
                <img src="images/adalovelacehome.jpeg" alt="Ada Lovelace">
                <img src="images/elonmusk.png" alt="Elon Musk">
                <img src="images/nikola_tesla.jpeg" alt="Nikola Tesla">
            </div>

            <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Bill Gates</a></li>
              <li><a href="#tabs-2">Ada Lovelace</a></li>
              <li><a href="#tabs-3">Elon Musk</a></li>
              <li><a href="#tabs-4">Nikola Telsa</a></li>
            </ul>

            <div id="tabs-1">
            <figure class = "fig1">
                <img src="images/bill.jpg" alt="Bill Gates">
                <figcaption>William H. Gates in June 2015</figcaption>
            </figure>
                <p>William Henry Gates III, better known as Bill Gates, was born October 28, 1955. He is a co-founder of the Microsoft Corporation and is an American business magnate, investor, author and philanthropist. Bill Gates is a technologist, business leader, and philanthropist. He grew up in Seattle, Washington, with an amazing and supportive family who encouraged his interest in computers at an early age. He dropped out of college to start Microsoft with his childhood friend Paul Allen. He married Melinda French in 1994 and they have three children. Today, Bill and Melinda Gates co-chair the charitable foundation bearing their names and are working together to give their wealth back to society.</p>
                <p>In 1975, Gates and Paul Allen launched Microsoft, which became the world's largest PC software company. During his career at Microsoft, Gates held the positions of chairman, CEO and chief software architect, while also being the largest individual shareholder until May 2014. Gates stepped down as chief executive officer of Microsoft in January 2000, but he remained as chairman and created the position of chief software architect for himself. In June 2006, Gates announced that he would be transitioning from full-time work at Microsoft to part-time work and full-time work at the Bill and Melinda Gates Foundation. He gradually transferred his duties to Ray Ozzie and Craig Mundie. He stepped down as chairman of Microsoft in February 2014 and assumed a new post as technology adviser to support the newly appointed CEO Satya Nadella.</p>
                <p class = "morebill"><a href = "bill-gates.php">Read More </a></p>
            </div>

            <div id="tabs-2">
            <figure class = "fig1">
                <img src="images/adalovelace.jpg" alt="Sorry, picture not found">
		        <figcaption>Portrait of Ada Lovelace by Alfred Chalon, 1838</figcaption>
		    </figure>
                <p>British mathematician Augusta Ada Byron, who after marriage became Countess of Lovelace and was better known simply as Ada Lovelace, was born in London on December 10, 1815.</p>
                <p>In 1842, more than a century before the start of the information age, in a brilliant flash of penetrating insight, Ada Lovelace had a glimpse of the future. She saw that with suitable modifications, Charles Babbage’s proposed Analytical Engine would be capable of much more than its intended purpose of simple mathematical calculation. Lovelace realised that such a device could be set to execute any logically coherent sequence of instructions, and in this she became the world’s first computer programmer: together with Babbage, she invented what we now call software. When she had her marvellous insight she was in the twenty-seventh year of her short life, and had less than ten years left to live.</p>
                <p class = "moreada"><a href = "ada-lovelace.php">Read More </a></p>
            </div>

            <div id="tabs-3">
            <figure class = "fig1">
                <img src="./images/elonmusk.png" alt = "Elon Musk">
                <figcaption>Elon Musk</figcaption>
            </figure>
              <p>Musk is the founder, CEO, and CTO of SpaceX; a co-founder, a Series A investor, CEO, and product architect of Tesla Inc.; co-chairman of OpenAI; founder and CEO of Neuralink. He was previously co-founder and chairman of SolarCity; co-founder of Zip2; and founder of X.com, which merged with Confinity and took the name PayPal. As of July 2017, he has an estimated net worth of $16.1 billion, making him the 80th-wealthiest person in the world. In December 2016, Musk was ranked 21st on the Forbes list of The World's Most Powerful People.</p>
              <p>Musk has stated that the goals of SolarCity, Tesla, and SpaceX revolve around his vision to change the world and humanity. His goals include reducing global warming through sustainable energy production and consumption, and reducing the "risk of human extinction" by "making life multiplanetary" by establishing a human colony on Mars.</p>
              <p class = "moreelon"><a href = "elon-musk.php">Read More </a></p>
            </div>

            <div id="tabs-4">
            <figure class = "fig1">
                <img src="images/nikola_tesla.jpeg" alt = "Nikola Tesla">
                 <figcaption>This would've been Nikola's Facebook pic</figcaption>
            </figure>
              <p>Nikola Tesla was a Serbian-American inventor, electrical engineer, mechanical engineer, physicist, and futurist who is best known for his contributions to the design of the modern alternating current (AC) electricity supply system. Born and raised in the Austrian Empire, Tesla received an advanced education in engineering and physics in the 1870s and gained practical experience in the early 1880s working in telephony and at Continental Edison in the new electric power industry. He emigrated to the United States in 1884, where he would become a naturalized citizen. He worked for a short time at the Edison Machine Works in New York City before he struck out on his own.</p>
              <p>With the help of partners to finance and market his ideas, Tesla set up laboratories and companies in New York to develop a range of electrical and mechanical devices. His alternating current (AC) induction motor and related polyphase AC patents, licensed by Westinghouse Electric in 1888, earned him a considerable amount of money and became the cornerstone of the polyphase system which that company would eventually market. Attempting to develop inventions he could patent and market, Tesla conducted a range of experiments with mechanical oscillators/generators, electrical discharge tubes, and early X-ray imaging. He also built a wireless-controlled boat, one of the first ever exhibited. Tesla became well known as an inventor and would demonstrate his achievements to celebrities and wealthy patrons at his lab, and was noted for his showmanship at public lectures.</p>
              <p class = "morenikola"><a href = "nikola-tesla.php">Read More </a></p>
            </div>
          </div>
        </section><!--.hero-->

        <footer>
            <?php include "inc/footer.inc"; ?>
        </footer>
   
    </div><!--.container-->
    <?php include "inc/scripts.inc"; ?>

    <script src="sss/sss.min.js"></script>
    <script>
        $('.slider').sss();
    </script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    $( "#tabs" ).tabs();
} );
</script>

    </body>
</html>