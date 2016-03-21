$(document).ready(function(){
	//Get all keys from the document
var keys = document.querySelectorAll('#calculator span');
var operators=['+','-','x','÷'];
var decimalAdded = false;

//Add onClick event to all keys and perform operations
for(var i=0;i<keys.length;i++){
	keys[i].onclick = function(e){
		//Get input and button values
		var input= document.querySelector('.screen');
		var inputVal = input.innerHTML;
		var btnVal = this.innerHTML;

		//Append the key v3alues (btnValue) to the input string and use js eval function for result
		//If clear key is pressed, erase everything
		if(btnVal == 'C'){
			input.innerHTML = "";
			decimalAdded = false;
		}
		//if eval key is pressed, calculate and display it
		else if(btnVal=='='){
			var equation = inputVal;
			var lastChar = equation[equation.length-1];

			//Replace all instances of X and divide with * and /. Can be done using regex and 'g' tag which repalces all instances of matche charectar/substring
			equation = equation.replace(/x/g,'*').replace(/÷/g,'/');

			//Check last character of equation. If it's operator or decimal, remove it
			if(operators.indexOf(lastChar)>1 || lastChar == '.'){
				equation.replace(/.$/,"")
			}

			if(equation)
				input.innerHTML = eval(equation);

			decimalAdded = false;
		}

		//Fix issues  for consecutive added operators, equation cant start from an operator except - no more than 1 dec per number
		else if(operators.indexOf(btnVal)>-1){
			//operator is clicked
			//get last charectar from equation
			var lastChar = inputVal[inputVal.length -1];			

			//only add operator if input is not empty
			if(inputVal != "" && operators.indexOf(lastChar) == -1){
				input.innerHTML += btnVal;
			}

			//Allow minus if string is empty
			else if(ipnutVal =="" && btnVal =='-')
				input.innerHTML += btnVal;

			//Replace last operator (if it exsists) with the new pressed operator
			//'.' matches any character while $ denotes the end of the string so anything at the end will be replaced by new operator
			if(operators.indexOf(lastChar)>-1 && inputVal.length>1){
				input.innerHTML=inputVal.replace(/.$/, btnVal);
			}		

			decimalAdded = false;		
		}

		//decimal problem
		else if(btnVal == '.'){
			if(!decimalAdded){
				input.innerHTML += btnVal;
				decimalAdded = true;
			}
		}

		//if any other key is pressed, append it
		else{
			input.innerHTML += btnVal;
		}
		//prevent page jumps
		e.preventDefault();

		
	}

}

$("body").keydown(function(event) {

   	if (event.keyCode == 97) {
        $(".screen").append("1");
    }
    else if (event.keyCode == 96) {
        $(".screen").append("0");
  
    }
    else if (event.keyCode == 98) {
        $(".screen").append("2");
    }
    else if (event.keyCode == 99) {
        $(".screen").append("3");
    }
    else if (event.keyCode == 100) {
        $(".screen").append("4");
    }
    else if (event.keyCode == 101) {
        $(".screen").append("5");
    }
    else if (event.keyCode == 102) {
        $(".screen").append("6");    
    }
    else if (event.keyCode == 103) {
        $(".screen").append("7");
    }
    else if (event.keyCode == 104) {
        $(".screen").append("8");
    }
    else if (event.keyCode == 105) {
        $(".screen").append("9");
    }
    else if (event.keyCode == 107) {
        $(".screen").append("+");
    }
    else if (event.keyCode == 110) {
        $(".screen").append(".");
    }
    else if (event.keyCode == 111) {
        $(".screen").append("÷");
    }
    else if (event.keyCode == 106) {
        $(".screen").append("x");
    }
    else if (event.keyCode == 109) {
        $(".screen").append("-");
    }
    else if (event.keyCode == 13) {
        $(".screen").append("=");
    }
        });
});