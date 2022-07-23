const txtElement = ['Student of Information System Hasanuddin University 2020                      '];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik(){

	currentTxt = txtElement[count];

	words = currentTxt.slice(0, ++txtIndex);
	document.querySelector('.efek-ngetik').textContent = words;

	if(words.length == currentTxt.length){
		txtIndex = 0;
	}

	setTimeout(ngetik, 100);

})();