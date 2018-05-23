$(document).ready(function() {
  
    
    var alexQuotes = ["When one door closes another door opens; but we so often look so long and so regretfully upon the closed door, that we do not see the ones which open for us.. ~Alexander Graham",
      "Before anything else, preparation is the key to success.. ~Alexander Graham",
      "Concentrate all your thoughts upon the work at hand. The sun's rays do not burn until brought to a focus.. ~Alexander Graham",
      "Sometimes we stare so long at a door that is closing that we see too late the one that is open.~Alexander Graham",
      "A man, as a general rule, owes very little to what he is born with - a man is what he makes of himself..~Alexander Graham",
    "The most successful men in the end are those whose success is the result of steady accretion.~Alexander Graham",
"America is a country of inventors, and the greatest of inventors are the newspaper men.~Alexander Graham",
"Neither the Army nor the Navy is of any protection, or very little protection, against aerial raids.~Alexander Graham",
"The nation that secures control of the air will ultimately control the world.~Alexander Graham"]

    var quoteArray = [

      
      alexQuotes

    ];

  function alex() {

    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = alexQuotes;
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
  }

  document.getElementById("quoteButton").onclick = alex;

  alex();
  
  

  });