$(document).ready(function() {
  
    
    var theresaQuotes = ["Peace begins with a smile. ~Mother Theresa",
"Spread love everywhere you go. Let no one ever come to you without leaving happier. ~Mother Theresa",
"If we have no peace, it is because we have forgotten that we belong to each other. ~Mother Theresa",
"There are no great things, only small things with great love. Happy are those. ~Mother Theresa",
"If you judge people, you have no time to love them. ~Mother Theresa",
"I have found the paradox that if I love until it hurts, then there is no hurt, but only more love. ~Mother Theresa",
"Let us always meet each other with smile, for the smile is the beginning of love. ~Mother Theresa",
"I'm a little pencil in the hand of a writing God, who is sending a love letter to the world. ~Mother Theresa",
"Yesterday is gone. Tomorrow has not yet come. We have only today. Let us begin. ~Mother Theresa",
"If you can't feed a hundred people, then feed just one.~Mother Theresa"]

    var quoteArray = [
      theresaQuotes
    ];

  function theresa() {
    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = theresaQuotes;
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
  }

  document.getElementById("quoteButton").onclick = theresa;

  theresa();
  
  

  });