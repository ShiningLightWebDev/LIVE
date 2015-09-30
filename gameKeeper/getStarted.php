<?php
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/header.php");
?>
<script type='text/javascript'>
function nameTeams() {
	var numTeams = prompt('How many teams would like to play?', '');
	if (isNaN(numTeams)) {
		prompt('That is not an appropriate number. Please try again.');
		location.reload();
	} else {
		if (numTeams == 2) {
			var team1 = prompt('What would you like to call team one?', '');
			var team2 = prompt('What would you like to call team two?', '');
			document.write('<h1>'+team1+'</h1><br>');
			document.write('<h1>'+team2+'</h1><br>');
		} else if (numTeams == 3) {
			var team1 = prompt('What would you like to call team one?', '');
			var team2 = prompt('What would you like to call team two?', '');
			var team3 = prompt('What would you like to call team three?', '');
			document.writeln('<h1>'+team1+'</h1><br>');
			document.write('<h1>'+team2+'</h1><br>');
			document.write('<h1>'+team3+'</h1><br>');
		} else if (numTeams == 4) {
			var team1 = prompt('What would you like to call team one?', '');
			var team2 = prompt('What would you like to call team two?', '');
			var team3 = prompt('What would you like to call team three?', '');
			var team4 = prompt('What would you like to call team four?', '');
			document.write('<h1>'+team1+'</h1><br>');
			document.write('<h1>'+team2+'</h1><br>');
			document.write('<h1>'+team3+'</h1><br>');
			document.write('<h1>'+team4+'</h1><br>');
		} else {
			prompt('That is not an appropriate number. Please try again.');
			location.reload();
		}
	}
	//break;
}
</script>
<?php
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/bottomHeader.php");
?>
<script>
prompt('How old are you?', '');
document.write('<button onClick="nameTeams()">Choose Teams</button>');
</script>
<?php
include_once("$_SERVER[DOCUMENT_ROOT]/gameKeeper/footer.php");
?>