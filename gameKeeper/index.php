<?php
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/header.php");
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/bottomHeader.php");
?>
<div id='content'>
<div id='nav'>
	<ol class='h1'>
		<li><a href='#whatDo'>What does this app do?</a></li>
		<li><a href='#genRules'>General Rules</a></li>
			<ol class='h2'>
				<li><a href='#goal'>The Goal</a></li>
				<li><a href='#accScore'>Accumulating Score</a></li>
				<li><a href='#typeBooks'>Types of Books</a></li>
				<li><a href='#gameplay'>Gameplay</a></li>
					<ol class='h3'>
						<li><a href='#cardValues'>Card Values</a></li>
						<li><a href='#goDown'>Going Down</a></li>
						<li><a href='#contPlay'>Continuing Play</a></li>
						<li><a href='#endRound'>Ending a Round</a></li>
					</ol>
				<li><a href='#roundScore'>Scoring the Rounds</a></li>
					<ol class='h3'>
						<li><a href='#calcBase'>Calculating Base Count</a></li>
						<li><a href='#calcCard'>Calculating Card Count</a></li>
					</ol>
			</ol>		
		<li><a href='#houseRules'>House Rules</a></li>
			<ol class='h2'>
				<li><a href='#bookLimits'>Book Limits</a></li>
				<li><a href='#threeWild'>Books of Threes and Wilds</a></li>
				<li><a href='#specialThree'>Special Points for Threes</a></li>
				<li><a href='#altCount'>Alternate Hands and Feet Counts</a></li>
				<li><a href='#addPlayers'>Additional Players</a></li>
				<li><a href='#more'>More Decks</a></li>
			</ol>
	</ol>
</div>
<div id='rules'>
	<div id='start'>
	<a class='button' href='getStarted.php'>Get Started</a>
	</div>
	<h1 id='whatDo'>What does this app do?</h1>
		<p>
		This app is to keep track of "Hand and Foot" scores.
		After clicking "<a href='getStarted.php' title='Get Started'>Get Started</a>",
		simply choose the teams that are playing, choose any
		house rules that may apply, and begin playing. After
		each round, fill the blanks for base score and card
		count. After the fourth round the score keeper will
		declare a winner and enter your score into a database.
		</p>
		<p>Right now, the game keeper only keeps a bank of scores.
		Eventually, the game keeper will track of high scores,
		low scores, greatest win, closest game, most books of
		threes and wilds, and other interesting stats.</p>
	<h1 id='genRules'>General Rules</h1>
		<h2 id='goal'>The Goal</h2>
			<p>The goal of "Hand and Foot" is to have the highest accumulated 
			score at the end of four rounds. Four to six players 
			(playing in teams of two or three) are allowed, 
			but the gameplay changes somewhat with more players.
			One deck of cards, including two jokers, is required for each player.</p>
		<h2 id='accScore'>Accumulating Score</h2>
			<p>Score is accumulated by creating "books" or "melds" 
			of cards. To start a new book on the table, you must have three
			of a kind, or two of a kind with a wild. Twos and
			jokers are wild. Other players on the same team will
			add to the book when it is their turn to play.</p>
			<p>To start new books, players must have at least two of a kind. 
			Playing two wilds and a queen, for example, will not open a book 
			of queens. There must be at least two queens. This remains true 
			for the rest of gameplay.</p>
			<p>A book is closed when there are seven cards on the stack in
			front of the team member designated to be "holder". A book 
			cannot contain less than three or more than seven cards.</p>
		<h2 id='typeBooks'>Types of Books</h2>
			<p>There are two types of books: dirty books, and clean
			books. A dirty book is any seven cards with at least one
			wild. No more than three wilds are allowed in a single
			book. A clean book is seven of a kind, with no wilds
			allowed. You must have at least one dirty book and at
			least one clean book to "go out" and end the round
			(described in "Ending the Round" on this page).</p>
			<p>While melds are fanned out face up, closed books are 
			squared up and the cards placed on top shows the type - 
			a red card for a clean pile, a black card for a dirty pile, 
			and a joker for a wild pile (or a two if it contains no joker). 
			Usually the complete piles of seven cards are kept in front 
			of one member of a partnership, while 
			the other partner keeps the incomplete melds of three to six 
			cards. This is completely up to the teams preference, however.
			</p>
		<h2 id='gameplay'>Gameplay</h2>
			<p>To begin, two players on the same team will shuffle 
			all the decks together and then deal 
			a hand of 11 cards each for each player. The easiest
			way to deal is to create a stack for each player directly
			in front of the dealer. Deal cards one at a time onto
			each stack until the stacks reach 11. Then hand the
			stacks to individual players.</p>
			<p>Players may choose, without looking at the card, 
			which stack of 11 cards will be
			their hand, and which will be their foot. The hand is
			picked up immediately, while the foot is set, facedown, 
			to the side. Cards remaining after dealing are put in one 
			stack in the middle of the table -- this is the "draw pile" 
			or "stock".</p>
			<p>For a four person game, either player on the team that
			did not deal is able to start the game. Play will proceed
			clockwise around the table until one of the teams "goes
			out" (described in "Ending a Round"). For a six or eight
			player game, the player between the two dealers will start.
			</p>
			<p>The first player will draw two cards off the stock.
			He may either keep the cards, play the cards, or discard
			one. The "discard pile" is immediately next to the draw
			pile. Some groups will find it easier to pass both the
			stock and discard piles around the table; others will find
			it easier to keep the stock and discard piles in the middle
			of the table.</p>
			<h3 id='cardValues'>Card Values</h3>
				<p>Cards have different values. Values will determine when
				a team may "go down" and will add to or detract from the
				team's score at the end of each round. Face cards, tens, and
				nines are worth 10 points each. Eights on down
				to fours are worth 5 points each. Black threes are
				negative 300 points each. Red threes are negative 500 points
				each. Twos (wild) and aces are worth 20 points each, and
				jokers (wild) are worth 50 points each.</p>
			<h3 id='goDown'>Going Down</h3>
				<p>The first player of each team who is able to place cards
				on the table is said to "go down". To qualify for going down
				a certain score is required. For the first round, 60
				points are required; for the second, 90 points. The third round
				requires that 120 points, and the fourth (and last) requires 
				150. After a team member has gone down, other team members,
				on their turns, may start new books or add to the books the
				first player placed down, without meeting the score requirement.
				</p>
			<h3 id='contPlay'>Continuing Play</h3>
				<p>After the first player has discarded his card, other players 
				may choose to either draw two new cards, or to pick up the top 
				card from the discard pile. If a player chooses to pick the top
				card, he must also take the four cards directly beneath the top
				card. If the top card of the discard pile is a three, the pile is
				considered dead: players are not allowed to pick up the three. If 
				a player picks up a discard, he must be able to play it immediately, 
				without the help of the cards underneath.
				</p>
				<p>When a player is out of cards in his hand, he may play his foot. 
				There are two ways to achieve this. A player may play all the cards 
				in his hand except the last one, and may discard this card. On his 
				next turn, he is allowed to begin playing his foot. The second way 
				a player may go into his foot is to play all the cards in his hand, 
				without discarding any. Then he is allowed to pick up his foot and 
				continue playing. The second method is called "walking into your 
				foot".</p>
			<h3 id='endRound'>Ending a Round</h3>
				<p>To end a round, one player must play all the cards in both his hand 
				and his foot. This is called "going out" and earns the team an extra 100 
				points. There are a few qualifications for going out. First,
				all team members must have played at least one card from their feet. 
				Also, there must be at least one closed clean and one closed dirty book. 
				A book is closed when there are seven cards on the stack. A last 
				requirement is that the person wanting to go out must have the permission 
				of his team members.</p>
				<p>If a player's team members have not played from their foot, or if 
				the team does not give permission, then the player must keep at least 
				one card in his hand at all times. He is not allowed to have no cards. 
				After one player has gone out, gameplay ends for that round.</p>
				<p>If the stock is depleted, the play will end as soon as someone 
				wishes to draw from the stock and there are insufficient cards 
				there. Both sides score for the melds they have put down, less the 
				points for the cards remaining in their hands and feet, and no one 
				gets the bonus for going out.</p>
		<h2 id='roundScore'>Scoring the Rounds</h2>
			<p>At the end of each round, base is scored, and card count is scored. The 
			team with the highest score wins the round. The team with the highest total 
			score at the end of the game wins the game, regardless of how many rounds 
			they may have won or lost.
			<h3 id='calcBase'>Calculating Base Count</h3>
				<p>"Base" is the total points accrued by closed books. Each closed clean 
				book will score 500 points, and each closed dirty book will score 300 
				points. Unclosed books do not count as base.</p>
			<h3 id='calcCard'>Calculating Card Count</h3>
				<p>Usually one player will count the team's positive points, and the other 
				will count the team's negative points.
				Each card that has been played on the table will add to the team's card 
				count.(See <a href=''>Card Values</a> to remember how to score the cards.) 
				Each card that remains in the hands and feet of the team that did not go 
				out will count as negative points. Card counts should always be divisible by 
				five. The team that went out will not have any negative 
				points, no matter what the team members may have had left in their hands.</p>
	<h1 id='houseRules'>House Rules</h1>
		<h2 id='bookLimits'>Book Limits</h2>
			<ul><li><p>Some houses allow more than seven cards in a book.</p></li>
			<li><p>Some houses further limit the number of wilds allowed in a book. 
			Wilds are allowed, as long as the book contains twice as many 
			naturals than wilds. Books of three, four, or five cards can have 
			at most one wild, and a book of six or seven cards can have at 
			most two wilds. Along with this rule is a requirement that teams 
			complete at least one clean, one dirty, and one wild book before 
			they are allowed to go out.</p></li></ul>
		<h2 id='threeWild'>Books of Threes or Wilds</h2>
			<ul><li><p>When all the players agree, books may be made of exclusively threes 
			and/or wilds. These books will count as 1500 base, if closed at the end 
			of the round. If they are unclosed at the end of the round, threes will 
			count as negative points (reds are -500 each, blacks are -300 each), 
			and wilds will count as positive points (twos are 20 each, jokers are 
			50 each). These books must be "clean", in that no wilds are allowed in 
			books of threes, and no other cards are allowed in books of wilds. If 
			books of threes are allowed, then threes are able to be picked up off the 
			discard pile, as long as the player picks up the four cards directly 
			under the three.</p></li></ul>
		<h2 id='specialThree'>Special Points for Threes</h2>
			<ul><li><p>Some houses play that red threes are worth 100 points each, if 
			placed on the table before the end of the round. They will count 
			as negative 100 points if they remain in a player's hand or foot. 
			If you find a red three in your hand, or pick it up in your foot, 
			or draw it from the stock, you should immediately place it face 
			up on the table with your melds and draw a new card from the 
			stock to replace it. Black threes still kill the discard pile, 
			and count as -5 points if found in your hand or foot at 
			the end of the round.</p></li>
			<li><p>Some houses play that instead of -5 points, black threes are 
			worth -50 points.</p></li></ul>
		<h2 id='altCount'>Alternate Hands and Feet Counts</h2>
			<ul><li><p>Some houses will deal 11 cards for the hand, and 13 cards for the feet. 
			This does not affect card scoring.</p></li></ul>
		<h2 id='addPlayers'>Additional Players</h2>
			<ul><li><p>Some houses allow each player to play individually, with no teams. 
			In this case, any player that did not win the round must count the 
			remaining cards in his hand and/or foot as negative.</p></li>
			<li><p>Some houses allow up to eight players, working in four teams of 
			two, or two teams of four. Gameplay flows in drastically different 
			ways with this many cards and players.</p></li></ul>
		<h2 id='more'>More Decks</h2>
			<ul><li><p>Some houses will play with five decks, or the number of players 
			plus one.</p></li></ul>
	</div>		
</div>
<?php
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/footer.php");
?>		
		
		