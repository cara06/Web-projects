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
    ];
     var theresaQuotes = ["Peace begins with a smile. ~Mother Theresa",
"Spread love everywhere you go. Let no one ever come to you without leaving happier. ~Mother Theresa",
"If we have no peace, it is because we have forgotten that we belong to each other. ~Mother Theresa",
"There are no great things, only small things with great love. Happy are those. ~Mother Theresa",
"If you judge people, you have no time to love them. ~Mother Theresa",
"I have found the paradox that if I love until it hurts, then there is no hurt, but only more love. ~Mother Theresa",
"Let us always meet each other with smile, for the smile is the beginning of love. ~Mother Theresa",
"I'm a little pencil in the hand of a writing God, who is sending a love letter to the world. ~Mother Theresa",
"Yesterday is gone. Tomorrow has not yet come. We have only today. Let us begin. ~Mother Theresa",
"If you can't feed a hundred people, then feed just one.~Mother Theresa"];

 var alexQuotes = ["When one door closes another door opens; but we so often look so long and so regretfully upon the closed door, that we do not see the ones which open for us.. ~Alexander Graham",
      "Before anything else, preparation is the key to success.. ~Alexander Graham",
      "Concentrate all your thoughts upon the work at hand. The sun's rays do not burn until brought to a focus.. ~Alexander Graham",
      "Sometimes we stare so long at a door that is closing that we see too late the one that is open.~Alexander Graham",
      "A man, as a general rule, owes very little to what he is born with - a man is what he makes of himself..~Alexander Graham",
    "The most successful men in the end are those whose success is the result of steady accretion.~Alexander Graham",
"America is a country of inventors, and the greatest of inventors are the newspaper men.~Alexander Graham",
"Neither the Army nor the Navy is of any protection, or very little protection, against aerial raids.~Alexander Graham",
"The nation that secures control of the air will ultimately control the world.~Alexander Graham"]

    var albertQuotes = ["Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. ~Albert Schweitzer",
"Until he extends his circle of compassion to include all living things, man will not himself find peace. ~Albert Schweitzer",
"There are two means of refuge from the miseries of life: music and cats. ~Albert Schweitzer",
"Happiness is nothing more than good health and a bad memory.~Albert Schweitzer",
"Example is not the main thing in influencing others. It is the only thing. ~Albert Schweitzer",
"The only ones among you who will be really happy are those who will have sought and found how to serve. ~Albert Schweitzer",
"Sometimes our light goes out but is blown into flame by another human being. Each of us owes deepest thanks to those who have rekindled this light. ~Albert Schweitzer",
"The purpose of human life is to serve, and to show compassion and the will to help others. ~Albert Schweitzer",
"Constant kindness can accomplish much. As the sun makes ice melt, kindness causes misunderstanding, mistrust, and hostility to evaporate. ~Albert Schweitzer",
"Think occasionally of the suffering of which you spare yourself the sight. ~Albert Schweitzer"];

    var abrahamQuotes = ["All that I am, or hope to be, I owe to my angel mother. ~Abraham Lincoln",
      "I remember my mother's prayers and they have always followed me. They have clung to me all my life. ~Abraham Lincoln",
      "Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing. ~Abraham Lincoln",
      "My dream is of a place and a time where America will once again be seen as the last best hope of earth.~Abraham Lincoln",
      "Always bear in mind that your own resolution to succeed is more important than any other.~Abraham Lincoln",];
    
    var movieQuotes = ["Frankly, my dear, I don't give a damn. ~Gone with the wind",
	"I'm gonna make him an offer he can't refuse. ~The Godfather", 
	"Toto, I've a feeling we're not in Kansas anymore. ~The Wizard of Oz"];
    
    var lifeQuotes = [ "Life isn’t about getting and having, it’s about giving and being. -- Kevin Kruse"
	,"Whatever the mind of man can conceive and believe, it can achieve. -- Napoleon Hill",
	"Strive not to be a success, but rather to be of value. -- Albert Einstein",
	"Two roads diverged in a wood, and I—I took the one less traveled by, And that has made all the difference. -- Robert Frost",
	"I attribute my success to this: I never gave or took any excuse. -- Florence Nightingale",
	"You miss 100% of the shots you don’t take. -- Wayne Gretzky",
	"I’ve missed more than 9000 shots in my career. I’ve lost almost 300 games. 26 times I’ve been trusted to take the game winning shot and missed. I’ve failed over and over and over again in my life. And that is why I succeed. -- Michael Jordan",
	"The most difficult thing is the decision to act, the rest is merely tenacity. -- Amelia Earhart",
	"Every strike brings me closer to the next home run. -- Babe Ruth","Definiteness of purpose is the starting point of all achievement. -- W. Clement Stone","We must balance conspicuous consumption with conscious capitalism. -- Kevin Kruse","Life is what happens to you while you’re busy making other plans. -- John Lennon","We become what we think about. -- Earl Nightingale","14.Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do, so throw off the bowlines, sail away from safe harbor, catch the trade winds in your sails.  Explore, Dream, Discover. -- Mark Twain","15.Life is 10% what happens to me and 90% of how I react to it. -- Charles Swindoll","The most common way people give up their power is by thinking they don’t have any. -- Alice Walker","The mind is everything. What you think you become. -- Buddha","The best time to plant a tree was 20 years ago. The second best time is now. -- Chinese Proverb","An unexamined life is not worth living. -- Socrates","Eighty percent of success is showing up. -- Woody Allen","Your time is limited, so don’t waste it living someone else’s life. -- Steve Jobs","Winning isn’t everything, but wanting to win is. -- Vince Lombardi","I am not a product of my circumstances. I am a product of my decisions. -- Stephen Covey","Every child is an artist.  The problem is how to remain an artist once he grows up. -- Pablo Picasso","You can never cross the ocean until you have the courage to lose sight of the shore. -- Christopher Columbus","I’ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. -- Maya Angelou","Either you run the day, or the day runs you. -- Jim Rohn","Whether you think you can or you think you can’t, you’re right. -- Henry Ford","The two most important days in your life are the day you are born and the day you find out why. -- Mark Twain","Whatever you can do, or dream you can, begin it.  Boldness has genius, power and magic in it. -- Johann Wolfgang von Goethe","The best revenge is massive success. -- Frank Sinatra","People often say that motivation doesn’t last. Well, neither does bathing.  That’s why we recommend it daily. -- Zig Ziglar","Life shrinks or expands in proportion to one’s courage. -- Anais Nin","If you hear a voice within you say “you cannot paint,” then by all means paint and that voice will be silenced. -- Vincent Van Gogh","There is only one way to avoid criticism: do nothing, say nothing, and be nothing. -- Aristotle","Ask and it will be given to you; search, and you will find; knock and the door will be opened for you. -- Jesus"];
    
    var loveQuotes = ["Love consists of this: two solitudes that meet, protect and greet each other.", 
	"Love is like the wind, you can't see it but you can feel it.",
	"All you need is love. But a little chocolate now and then doesn't hurt.",
	"Love is that condition in which the happiness of another person is essential to your own.", "Love loves to love love.",
	"It is better to love wisely, no doubt: but to love foolishly is better than not to be able to love at all.", 
"Love is a promise; love is a souvenir, once given never forgotten, never let it dispear.", "Love is a serious mental disease.", "Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.", "There is a madness in loving you, a lack of reason that makes it feel so flawless.", "And in the end, the love take, is equal to the love you make.", "When I say I love you more, I don't mean I love you more than you love me. I mean I love you more that the bad days ahead of us, I love you more than any fight we will ever have. I love you more than the distance between us, I love you more than any obstacle that could try and come between us. I love you the most.", "You don't love someone for their looks, or their clothes, or for their fancy car, but because they sing a song only you can hear.", "I have decided to stick to love; hate is too great a burden to bear.", "You deserve love, and you'll get it.", "If you love two people at the same time, choose the second. Because if you really loved the first one, you wouldn't have fallen for the second.", "I love yo without knowing how, or when, or from where. I love you simply, without problems or pride: I love you in this way because I do not know any other way of loving but this, in which there is no I or you, so intimate that your hand upon my chest is my hand, so intimate that when I fall asleep your eyes close.", "Love is that condition in which the happiness of another person is essential to your own.", "There is nothing I would not do for those who are really my friends. I have no notion of loving people by halves, it is not my nature.", "To love at all is to be vulnerable. Love anything and your heart will be wrung and possibly broken. If you want to make sure of keeping it intact you must give it to no one, not even an animal. Wrap it carefully round with hobbies and lttle luxuries; avoid all entanglements. Lock it up safe in the casket or coffin of your selfishness. But in that casket, safe, dark, motionless, airless, it will change. It will not be broken; it will become unbreakable, inpenetrable, irredeemable. To love is to be vulnerable.", "When I despair, I remember that all through history the way of truth and love have always won. There have been tyrants and murderers, and for a time they can seem invincible, but in the end, they always fall. Think of it—always.", "Love is always patient and kind. It is never jealous. Love is never boastful or conceited. It is never rude or selfish. It does not take offense and is not resentful. Love takes no pleasure in other people's sins, but delights in the truth. It is always ready to excuse, to trust, to hope, and to endure whatever comes.", "Love is something sent from heaven to worry the hell out of you.", "There is always some madness in love. But there is also always some reason in madness.", "...There's nothing you can ever do to lose my love. I will protect you until you die, and after your death I will still protect you. I am stronger than depression and I am braver than loneliness and nothing will ever exhaust me.", "Men are a luxury. Not a necessity.", "LIVE without pretending, LOVE with depending, LISTEN without defending, SPEAK without offending.", "There is only one page left to write on. I will fill it with words of only one syllable. I love. I have loved. I will love.", "Love is an act of endless forgiveness, a tender look which becomes a habit.", "If you love somebody, let them go, for if they return, they were always yours. And if they don't, they never were."];
    
    var leiaQuotes = [      "Help me, Obi-Wan Kenobi. You're my only hope. \n-Princess Leia Organa",
      "Aren't you a little short for a stormtrooper? \n-Princess Leia Organa",
      "Someone has to save our skins. Into the garbage chute, fly boy. \n-Princess Leia Organa",
      "Will someone get this big walking carpet out of my way? \n-Leia Organa",
      "You needn't worry about your reward. If money is all that you love, then that's what you'll receive. \n-Leia Organa"];
    
    var emperorQuotes = ["Young fool... Only now, at the end, do you understand... \n-The Emperor",
      "Your feeble skills are no match for the power of the Dark Side. \n-The Emperor",
      "Now, you will pay the price for your lack of vision! \n-The Emperor",
      "I will make it legal. \n-Darth Sidious"];
    
    var miscQuotes = ["Many Bothans died to bring us this information. \n-Mon Mothma",
      "Charming to the last. You don't know how hard I found it, signing the order to terminate your life. \n-Governor Tarkin",
      "It's a trap! \n-Admiral Ackbar",
      "So this is how liberty dies…with thunderous applause. \n-Padmé Amidala",
      "He's no good to me dead. \n-Boba Fett",
      "I've got a bad feeling about this. \n-Various characters in Star Wars",
      "May the force be with you. \n-Various characters in Star Wars"];
    
    var quoteArray = [

      // Einstein Quotes
      einsteinQuotes,

      // abraham Quotes
      abrahamQuotes,
	  
	   // abraham Quotes
      alexQuotes,

	   // abraham Quotes
      theresaQuotes,

      //Movie Quotes
      movieQuotes,

      // life Quotes
    lifeQuotes,

      // Han Solo Quotes
      loveQuotes,

      // Princess Leia Organa Quotes
      albertQuotes,

	   // abraham Quotes
      leiaQuotes,

      // Emperor / Darth Sidious Quotes
      emperorQuotes,

      // Miscellaneous Quotes
      miscQuotes

    ];

 function generateQuote() {

    // First get a random array, then get a random index from that array
    // Math.random() returns a number between 0 and 1. Math.floor rounds a number down to the nearest whole number.
    var randomArray = quoteArray[Math.floor(Math.random() * quoteArray.length)];
    var randomQuote = randomArray[Math.floor(Math.random() * randomArray.length)];
    document.getElementById("Quote").innerHTML = randomQuote;
    // Using the Twitter API
    var quoteLink = 'https://twitter.com/intent/tweet?text=' + randomQuote;
    document.getElementById("tweetQuote").href = quoteLink;
	
	 // Using the Facebook API
    var quoteShare = 'https://www.facebook.com/sharer/sharer.php?u=' + 'daily.html';
    document.getElementById("shareQuote").href = quoteShare;
  }

  document.getElementById("quoteButton").onclick = generateQuote;

  generateQuote();
  
});