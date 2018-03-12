@extends('play.index')

@section('content')

<div id='puzzle'></div>
<h1 id="h1"><time>00:00:00</time></h1>
        <div class="temporizador">
        </div>
<div id='words'></div>
<div><button id='solve'>Solve Puzzle</button><button id='fin'>Terminar</button></div>
<div></div>

<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/wordfind.js"></script>
<script type="text/javascript" src="js/wordfindgame.js"></script>
<script src="/js/temporizer.js"></script>
<script>

  var longitud={{$palabras}};
  var newword=[];
  var h1 = document.getElementById('h1'),
       start = document.getElementById('start'),
       stop = document.getElementById('stop'),
       clear = document.getElementById('clear'),
            seconds = 0, minutes = 0, hours = 0,
       t;
 temporizer(seconds, minutes, hours);
 var time=0;
  var words = ['cows', 'tracks', 'arrived', 'located', 'sir', 'seat',
               'division', 'effect', 'underline', 'view', 'annual',
               'anniversary', 'centennial', 'millennium', 'perennial',
               'artisan', 'apprentice', 'meteorologist', 'blizzard', 'tornado',
               'intensify','speed','count','consonant','someone',
               'sail','rolled','bear','wonder','smiled','angle', 'absent',
               'decadent', 'excellent', 'frequent', 'impatient', 'cell',
               'cytoplasm', 'organelle', 'diffusion', 'osmosis',
               'respiration'];
for (var i = 0; i < longitud; i++) {
  newword[i]= words[i];
}
  // start a word find game
  var gamePuzzle = wordfindgame.create(newword, '#puzzle', '#words');

  $('#solve').click( function() {
    wordfindgame.solve(gamePuzzle, newword);
  });
  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle(
    newword,
    {height: 18, width:18, fillBlanks: false}
  );
  wordfind.print(puzzle);
  $('#fin').click( function() {
    var timePartida=$("#h1").html();

    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            url: '/save_play',
            type: 'post',
            data: {cadena: gamePuzzle, usuario: {{$user}}, time:timePartida, level:longitud},
            success: function (data, textStatus, jqXHR) {
                clearTimeout(t);
                console.log(data);
                location.href = "/fin";

                }
            });
  });
</script>
@endsection
