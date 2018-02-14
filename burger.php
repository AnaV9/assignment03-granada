<!DOCTYPE html>
<html  lang="en">
<head>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <title>About John Burger</title>
</head>

<body>
    <header>
        <h1>Team Granada</h1>
    </header>

    <?php 
      //$current = 'burger';
      include 'inc/navigation.php';?>

    <div class="container">
        <h1>John Burger</h1>
        <img src="img/jburger.jpg" alt="picture of John Burger" height="250" width="250">

        <h2>About Me</h2>
          <p>I’m a Senior here at the U of R, trying my hardest to send out as many job
            applications as I can while still working hard to make the most of this last
            semester!</p>
          <p>I’m a Central New York kid who found his love for computer programming and
            web art through video games as a kid. Some of my hobbies include running 5ks,
            collecting old and new video game software/hardware, repairing old computers,
            playing video games from just about every genre on just about every device,
            drawing, and drinking all kinds of beer (especially a good, cloudy Belgian
            white).</p>

        <h2>Work Experience</h2>
          <p>I spent a year researching in our Computer Science department’s Human Computer
            Interaction lab on a web app project designed to provide users with feedback on
            their group dynamics. Learnt a lot about how research in a scientific environment
            works from that one, and decided that what I’m looking for out of the next few
            years is probably more suited to industry work.</p>
          <p>Last summer, with no job prepared, I went to New York City to stay with my uncle
            and aunt in the Westchester area in order to try and find work as a programmer.
            I managed to get an interview with a startup off reddit, but I bombed the thing
            drastically, having forgotten how to work on software development from years of
            schooling and nothing else. Luckily, at the end of the day, I was still able to
            find some work at another small startup in an incubator program in NYU. The gig
            offered up free food and a cozy, air-conditioned office space to work in while
            learning about work in an Agile, team-based software startup. I met a lot of cool
            people while working there, and learnt a lot that I don’t think you really can
            learn in school (not to knack on school though, you just happen to learn different
            sorts of things while working in software).</p>
          <p>Getting back to school, I spent the last semester working on two web apps with
            some fantastic people. One of them was a collaborative music-making sequencer app
            called Grooploop, that we built in Django using a SQLite database and the Javascript
            Web Audio API. The other was a brainstorming/idea-voting web app called Thunderbrain
            that we built in the MERN stack (MongoDB, Express.js, React.js, Node.js) with
            websockets for user interaction with each other, and the lobbies they joined.</p>
          

        <h2>Academic</h2>
             <p>I’m planning on graduating this semester with my Bachelor of Arts in Computer
            Science, but don’t let the B.A. mark fool you, I’ve taken my fair share of theory
            and math courses to come out prepared for work as a more engineering-minded
            programmer. I’ve taken courses in Artificial Intelligence, Machine Vision, Web
            Development, Linear Algebra, Calculus, Computer Organization, Computer Models,
            and Human Computer Interaction. I like that programming can be a skill set where
            you can either go hard on the science or prolific on the creativity. One of my
            idols, John Carmack of ID Software, practically pioneered the real-time computer
            graphics industry through his own studies of both programming and CS (and later
            on, lots of help from an incredibly hard-working team). Guys like that are who
            I hope to be like one day, so here’s hoping I eventually get to working in
            Computer Graphics not too far after college.</p>

        <h2>Things I want to share</h2>
            <p>Currently, I’ve got a couple things going on, but it’s all good fun. First of
            all, well, I’ve got this class! So that’s pretty cool. I’m also taking the Video
            Game Development course this semester, as well as Confucius to Zen (A Chinese
            Religion course) and Life and Anime, because I’m garbage (though that class looks
            legit, so don’t judge, playah). On top of that, I’m helping a friend of mine with
            a side-project he’s trying to do (super classified, since it’s business related :3),
            and I’m also helping the Campus Times with their website (now that I’ve passed
            on the illustrations editor to better-prepared hands), as well as a few side
            projects they’re trying to do that have to do with the web. And the, on top of
            THAT, I’m trying to get a job, which is a grand ole’ fun numbers game that is
            nothing at all like you’d expect it to be, especially considering that the i
            ndustry moves fast and pushes past outdated tech like theres no tomorrow.</p>
          <p>So there you go, that’s me! I know, I know, very boring. But hey, if ya like
            what you read, hit me up! I’m always down to work with people on cool projects
            where my skills might be useful, and I’d love to learn from people like all of
            yourselves who are probably far better than me at whatever skills niche you might
            fit into! For now though, hasta legguci, Vespucci.</p>
    </div>

    <?php include "inc/footer.php";?>
</body>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>
</html>
