$(document).ready(function() {
  
    
    var abrahamQuotes = ["All that I am, or hope to be, I owe to my angel mother. ~Abraham Lincoln",
      "I remember my mother's prayers and they have always followed me. They have clung to me all my life. ~Abraham Lincoln",
      "Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing. ~Abraham Lincoln",
      "My dream is of a place and a time where America will once again be seen as the last best hope of earth.~Abraham Lincoln",
      "Always bear in mind that your own resolution to succeed is more important than any other.~Abraham Lincoln"];
    
    var quoteArray = [

      
      abrahamQuotes

    ];

  function abraham() {

    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = abrahamQuotes;
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
  }

  document.getElementById("quoteButton").onclick = abraham;

  abraham();
  
  

  });