$(document).ready(function() {
  
    
    var albertQuotes = ["Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. ~Albert Schweitzer",
"Until he extends his circle of compassion to include all living things, man will not himself find peace. ~Albert Schweitzer",
"There are two means of refuge from the miseries of life: music and cats. ~Albert Schweitzer",
"Happiness is nothing more than good health and a bad memory.~Albert Schweitzer",
"Example is not the main thing in influencing others. It is the only thing. ~Albert Schweitzer",
"The only ones among you who will be really happy are those who will have sought and found how to serve. ~Albert Schweitzer",
"Sometimes our light goes out but is blown into flame by another human being. Each of us owes deepest thanks to those who have rekindled this light. ~Albert Schweitzer",
"The purpose of human life is to serve, and to show compassion and the will to help others. ~Albert Schweitzer",
"Constant kindness can accomplish much. As the sun makes ice melt, kindness causes misunderstanding, mistrust, and hostility to evaporate. ~Albert Schweitzer",
"Think occasionally of the suffering of which you spare yourself the sight. ~Albert Schweitzer"]

    var quoteArray = [
      albertQuotes
    ];

  function albert() {
    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = albertQuotes;
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
  }

  document.getElementById("quoteButton").onclick = albert;

  albert();
  
  

  });