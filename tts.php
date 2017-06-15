<input type="button" onclick='var 
su = new SpeechSynthesisUtterance();
su.lang = "en"; // Dont forget you must add your lang this line.
su.text = "Hello World"; // Dont frget you must add your text this line.
speechSynthesis.speak(su);
'>