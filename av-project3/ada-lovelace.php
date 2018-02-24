<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Ada Lovelace, Ana Vaquera, CSC 170 Project 3</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/navigation.css">
	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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

	<body>

	<section class = "banner">
            
        <?php include "inc/banner.inc"; ?>

        <?php include "inc/nav.inc"; ?>

        </section> <!--.banner-->

        <div class="container">
		
		<article class = "articleada">
		<h2>Ada Lovelace (1815-1852)</h2>
		<div class="description">How a poet’s daughter invented the concept of software</div>
		
		<h3>Introducing...</h3>
		<figure> <img src="images/adalovelace.jpg" alt="Sorry, picture not found">
		<figcaption>Portrait of Ada Lovelace by Alfred Chalon, 1838</figcaption>
		</figure>
			<p>British mathematician Augusta Ada Byron, who after marriage became Countess of Lovelace and was better known simply as Ada Lovelace, was born in London on December 10, 1815.</p> 
			<p>In 1842, more than a century before the start of the information age, in a brilliant flash of penetrating insight, Ada Lovelace had a glimpse of the future. She saw that with suitable modifications, Charles Babbage’s proposed Analytical Engine would be capable of much more than its intended purpose of simple mathematical calculation. Lovelace realised that such a device could be set to execute any logically coherent sequence of instructions, and in this she became the world’s first computer programmer: together with Babbage, she invented what we now call software. When she had her marvellous insight she was in the twenty-seventh year of her short life, and had less than ten years left to live.</p>
		<h3>The Early Life of Ada</h3>
			<p>Let’s begin at the beginning. Ada Byron, as she was then called, was born in London on December 10, 1815 to recently married high-society parents. Her father, Lord Byron (George Gordon Byron) was 27 years old, and had just achieved rock-star status in England for his poetry. Her mother, Annabella Milbanke, was a 23-year-old heiress committed to progressive causes, who inherited the title Baroness Wentworth. Her father said he gave her the name “Ada” because “It is short, ancient, vocalic.”</p>
			<p>Ada’s parents were something of a study in opposites. Byron had a wild life — and became perhaps the top “bad boy” of the 19th century — with dark episodes in childhood, and lots of later romantic and other excesses. In addition to writing poetry and flouting the social norms of his time, he was often doing the unusual: keeping a tame bear in his college rooms in Cambridge, living it up with poets in Italy and “five peacocks on the grand staircase”, writing a grammar book of Armenian, and — had he not died too soon — leading troops in the Greek war of independence (as celebrated by a big statue in Athens), despite having no military training whatsoever.</p>
			<p>Annabella Milbanke was an educated, religious and rather proper woman, interested in reform and good works, and nicknamed by Byron “Princess of Parallelograms.” Her very brief marriage to Byron fell apart when Ada was just 5 weeks old, and Ada never saw Byron again (though he kept a picture of her on his desk and famously mentioned her in his poetry). He died at the age of 36, at the height of his celebrityhood, when Ada was 8. There was enough scandal around him to fuel hundreds of books, and the PR battle between the supporters of Lady Byron (as Ada’s mother styled herself) and of him lasted a century or more.</p>
			<p>Ada led an isolated childhood on her mother’s rented country estates, with governesses and tutors and her pet cat, Mrs. Puff. Her mother, often absent for various (quite wacky) health cures, enforced a system of education for Ada that involved long hours of study and exercises in self control. Ada learned history, literature, languages, geography, music, chemistry, sewing, shorthand and mathematics (taught in part through experiential methods) to the level of elementary geometry and algebra. When Ada was 11, she went with her mother and an entourage on a year-long tour of Europe. When she returned she was enthusiastically doing things like studying what she called “flyology” — and imagining how to mimic bird flight with steam-powered machines.</p>
			<p>But then she got sick with measles (and perhaps encephalitis) — and ended up bedridden and in poor health for 3 years. She finally recovered in time to follow the custom for society girls of the period: on turning 17 she went to London for a season of socializing. On June 5, 1833, 26 days after she was “presented at Court” (i.e. met the king), she went to a party at the house of 41-year-old Charles Babbage (whose oldest son was the same age as Ada). Apparently she charmed the host, and he invited her and her mother to come back for a demonstration of his newly constructed Difference Engine: a 2-foot-high hand-cranked contraption with 2000 brass parts, now to be seen at the Science Museum in London. Ada’s mother called it a “thinking machine”, and reported that it “raised several Nos. to the 2nd and 3rd powers, and extracted the root of a Quadratic Equation.” It would change the course of Ada’s life.</p>
		<h3>Charles Babbage</h3>
			<figure><img src="images/babbage.jpeg" alt="Sorry, picture not found">
			<figcaption>Charles Babbage, Lovelace's mentor and biggest claim to fame</figcaption>
			</figure>
			<p>What is the story of Charles Babbage? His father was an enterprising and successful (if personally distant) goldsmith and banker. After various schools and tutors, Babbage went to Cambridge to study mathematics, but soon was intent on modernizing the way mathematics was done there, and with his lifelong friends John Herschel (son of the discoverer of Uranus) and George Peacock (later a pioneer in abstract algebra), founded the Analytical Society (which later became the Cambridge Philosophical Society) to push for reforms like replacing Newton’s (“British”) dot-based notation for calculus with Leibniz’s (“Continental”) function-based one.</p>
			<p>Babbage graduated from Cambridge in 1814 (a year before Ada Lovelace was born), went to live in London with his new wife, and started establishing himself on the London scientific and social scene. He didn’t have a job as such, but gave public lectures on astronomy and wrote respectable if unspectacular papers about various mathematical topics (functional equations, continued products, number theory, etc.) — and was supported, if modestly, by his father and his wife’s family.</p>
			<p>In 1819, Babbage visited France and learned about the large-scale government project there to make logarithm and trigonometry tables. Mathematical tables were of considerable military and commercial significance in those days, being used across science, engineering and finance, as well as in areas like navigation. It was often claimed that errors in tables could make ships run aground or bridges collapse. Back in England, Babbage and Herschel started a project to produce tables for their new Astronomical Society, and it was in the effort to check these tables that Babbage is said to have exclaimed, “I wish to God these tables had been made by steam!” — and began his lifelong effort to mechanize the production of tables.</p>
		<h3>Sparks of Genius</h3>
			<p>In 1833, through their mutual friend Mary Somerville, she was introduced to Charles Babbage. Soon afterwards she visited his workshop to see his first mechanical computer, the Difference Engine, and her life changed dramatically.</p>
			<p>Charles Babbage (1791-1871), a mathematician, philosopher and inventor, became a lifelong friend of Ada. He was Lucasian Professor of Mathematics in Cambridge [the post has also been occupied by Isaac Newton and Stephen Hawking], and he helped to found both the Astronomical Society (1820) and the Statistical Society (1834). Although a man of wide interests, he seems to have had little feeling for poetry. After reading Tennyson’s The Vision of Sin, which includes the lines, “Every moment dies a man / Every moment one is born,” he wrote to the poet, urging him, on the grounds that the population was increasing, to replace ‘one’ by ‘one and one-sixteenth’. Since Ada was so badly treated by her father, perhaps she did not discuss poetry with Babbage.</p>
			<p>Babbage described how he came to his idea of a mechanical calculator: “I was sitting in the rooms of the Analytical Society in Cambridge with a book of logarithms open before me. Another member, coming into the room and seeing me half asleep, called out ‘Well Babbage, what are you dreaming about?’ to which I replied ‘I am thinking that these tables might be calculated by machinery’.” (Tables of logarithms and the like were at that time produced by ‘human calculators’, and were notoriously full of errors.) Although he was anticipated in the idea of an automatic calculating machine by both Pascal and Leibniz, Babbage’s proposals represented a huge step forward, and eventually came to display all the essentials of a modern computer. Babbage himself saw his machines purely in terms of mathematical calculation. It was Lovelace who grasped the wider implications.</p>
			<p>None of Babbage’s calculating devices were completed in his lifetime (although working versions have since been built), but his efforts to construct them aroused widespread interest. Following a seminar which Babbage gave at the University of Turin in 1842 describing his second and more advanced proposal for a computing machine, his Analytical Engine, an Italian mathematician, Louis Menebrea, wrote the ideas up in a memoir, in French. Babbage asked his friend Lovelace to translate it. She did so in a concentrated period of nine months of feverish work, and, crucially, added a comprehensive set of notes to her translation, much longer than the memoir itself. It was these notes that have made her famous. In them, whilst describing the revolutionary implications of Babbage’s ideas, Lovelace wrote out the first computer programme – to sum a Fibonacci series – and she made the sensational suggestion that such a device should be able to compose music if a suitable set of rules could be devised. She thus anticipated the development of both modern computing and artificial intelligence by more than a hundred years.</p>
			<p>It is hard to exaggerate or properly appreciate her prescience. Leonardo da Vinci had anticipated the development of flying machines by several centuries, but he had the advantage of having seen birds flying. What puts Ada Lovelace’s prescience in an altogether higher class, is that she had grasped how to make physical instantiations of wholly abstract concepts. In any computer it is the software which gives the hardware the ability to perform its wonders, and in 1842 this was a totally new and very strange idea. (Indeed, for many people, it still is.) However, one suspects that if Lovelace could have been shown a tablet or a smartphone, she would have immediately grasped the nature of the magic which makes them work, whereas it is reasonable to assume that Leonardo would have had a big problem.</p>
		</article>

		<aside class = "asideada">
			<h3>7 things you probably didn’t know about Ada Lovelace</h3>
			<figure>
				<img src="images/ada17.jpeg" alt="Sorry, picture not found.">
				<figcaption>The lovely Lovelace at 17 years of age</figcaption>
			</figure>
				<ol>
					<li>Lord Byron was her father.</li>

					<li>Fearing Lovelace would follow in her father’s footsteps, Lady Byron immersed her in mathematics.</li>

					<li>She was a visionary who predicted that computers could do more than just crunch numbers.</li>

					<li> She was a compulsive gambler. </li>

					<li>Charles Dickens read a passage from one of his novels to Lovelace on her deathbed.</li>

					<li>Lovelace was buried next to the father she never knew.</li>

					<li>A computer programming language is named in Lovelace’s honor.</li>
				</ol>
			<table>
				<tr>
					<th>DATE</th>
					<th>EVENT</th>
					<th>LIFE STAGE</th>
				</tr>
				<tr>
					<td>December 10, 1815</td>
					<td>Ada is born</td>
					<td>Ground zero</td>
				</tr>
				<tr>
					<td>April 19, 1824</td>
					<td>Lord Byron (Ada’s father) dies in a war in Greece</td>
					<td>Toddler</td>
				</tr>
				<tr>
					<td>January 1, 1828</td>
					<td>Ada designs a flying machine</td>
					<td>Child prodigy</td>
				</tr>
				<tr>
					<td>October 1, 1829</td>
					<td>Ada gets measles and is unable to leave bed</td>
					<td>Will she make it?</td>
				</tr>
				<tr>
					<td>January 1, 1833</td>
					<td>Ada meets Charles Babbage</td>
					<td>Life is changed forever</td>
				</tr>
				<tr>
					<td>June 30, 1838</td>
					<td>Ada becomes Countess of Lovelace</td>
					<td>Prestige</td>
				</tr>
				<tr>
					<td>August 1, 1843</td>
					<td>Ada’s translation and notes on the analytical engine are published</td>
					<td>Launch to fame</td>
				</tr>
				<tr>
					<td>November 27, 1852</td>
					<td>Ada dies</td>
					<td>Demise</td>
				</tr>
			</table>
		</aside>

		<footer>
			<h3>Citations</h3>
				<ul>
					<li><a href="http://www.history.com/news/10-things-you-may-not-know-about-ada-lovelace">10 Things You May Not Know About Ada Lovelace</a></li>
					<li><a href="https://www.wired.com/2015/12/untangling-the-tale-of-ada-lovelace/">Untangling the Tale of Ada Lovelace</a></li>
					<li><a href="https://philosophynow.org/issues/96/Ada_Lovelace_1815-1852">PhilosophyNow: Ada Lovelace 1815 - 1852</a></li>
					<li><a href="https://en.wikipedia.org/wiki/Ada_Lovelace">Wikipedia, Ada Lovelace</a></li>
					<li><a href="https://www.timetoast.com/timelines/ada-lovelace">TimeToast Timelines, Ada Lovelace</a></li>
				</ul>
				<p>From CSC 170 Project 1: <a href = "http://urcsc170.org/kagyarek/project1/">Ada Lovelace</a>. Webpage, by Kirsten Agyare.</p>
            <?php include "inc/footer.inc"; ?>
		</footer>
		</div><!--.container-->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>