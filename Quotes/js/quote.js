$(document).ready(function() {
  
  var einsteinQuotes = [
"Imagination is more important than knowledge. ~Albert. Einstein",
"Gravitation is not responsible for people falling in love. ~Albert. Einstein",
"I want to know God's thoughts; the rest are details. ~Albert. Einstein",
"The hardest thing in the world to understand is the income tax. ~Albert. Einstein",
"Reality is merely an illusion, albeit a very persistent one. ~Albert. Einstein",
"The only real valuable thing is intuition. ~Albert. Einstein",
"A person starts to live when he can live outside himself. ~Albert. Einstein",
"I am convinced that He (God) does not play dice. ~Albert. Einstein",
"God is subtle but he is not malicious. ~Albert. Einstein",
"Weakness of attitude becomes weakness of character. ~Albert. Einstein",
"I never think of the future. It comes soon enough. ~Albert. Einstein",
"The eternal mystery of the world is its comprehensibility. ~Albert. Einstein",
"Sometimes one pays most for the things one gets for nothing. ~Albert. Einstein",
"Science without religion is lame. Religion without science is blind. ~Albert. Einstein",
"Anyone who has never made a mistake has never tried anything new. ~Albert. Einstein",
"Great spirits have often encountered violent opposition from weak minds. ~Albert. Einstein",
"Everything should be made as simple as possible, but not simpler. ~Albert. Einstein",
"Common sense is the collection of prejudices acquired by age eighteen. ~Albert. Einstein",
"Science is a wonderful thing if one does not have to earn one's living at it. ~Albert. Einstein",
"The secret to creativity is knowing how to hide your sources. ~Albert. Einstein",
"The only thing that interferes with my learning is my education. ~Albert. Einstein",
"God does not care about our mathematical difficulties. He integrates empirically. ~Albert. Einstein",
"The whole of science is nothing more than a refinement of everyday thinking. ~Albert. Einstein",
"Technological progress is like an axe in the hands of a pathological criminal. ~Albert. Einstein",
"Peace cannot be kept by force. It can only be achieved by understanding. ~Albert. Einstein",
"The most incomprehensible thing about the world is that it is comprehensible. ~Albert. Einstein",
"We can't solve problems by using the same kind of thinking we used when we created them. ~Albert. Einstein",
"Education is what remains after one has forgotten everything he learned in school. ~Albert. Einstein",
"The important thing is not to stop questioning. Curiosity has its own reason for existing. ~Albert. Einstein",
"Do not worry about your difficulties in Mathematics. I can assure you mine are still greater. ~Albert. Einstein",
"Equations are more important to me, because politics is for the present, but an equation is something for eternity. ~Albert. Einstein",
"If A is a success in life, then A equals x plus y plus z. Work is x; y is play; and z is keeping your mouth shut. ~Albert. Einstein",
"Two things are infinite: the universe and human stupidity; and I'm not sure about the the universe. ~Albert. Einstein",
"As far as the laws of mathematics refer to reality, they are not certain, as far as they are certain, they do not refer to reality. ~Albert. Einstein",
"Whoever undertakes to set himself up as a judge of Truth and Knowledge is shipwrecked by the laughter of the gods. ~Albert. Einstein",
"I know not with what weapons World War III will be fought, but World War IV will be fought with sticks and stones.",
"In order to form an immaculate member of a flock of sheep one must, above all, be a sheep. ~Albert. Einstein",
"The fear of death is the most unjustified of all fears, for there's no risk of accident for someone who's dead. ~Albert. Einstein",
    ];
    
    var quoteArray = [

      // Einstein Quotes
      einsteinQuotes

    

    ];

  function einstein() {

    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = einsteinQuotes;
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
  }

  document.getElementById("quoteButton").onclick = einstein;

  einstein();
  
  

  });