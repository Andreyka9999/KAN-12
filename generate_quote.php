<?php
// Define an array of quotes
$quotes = [
    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe. ― Albert Einstein",
    "You've gotta dance like there's nobody watching, Love like you'll never be hurt, Sing like there's nobody listening, And live like it's heaven on earth. ― William W. Purkey",
    "You know you're in love when you can't fall asleep because reality is finally better than your dreams ― Dr. Seuss",
    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Believe you can and you're halfway there. - Theodore Roosevelt",
    "Don’t watch the clock; do what it does. Keep going. - Sam Levenson",
    "You miss 100% of the shots you don’t take. - Wayne Gretzky",
    "Whether you think you can or you think you can’t, you’re right. - Henry Ford",
    "I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.”
    ― Marilyn Monroe",


];

// Select a random quote from the array
$random_quote = $quotes[array_rand($quotes)];

// Display the random quote
echo "<p>$random_quote</p>";

