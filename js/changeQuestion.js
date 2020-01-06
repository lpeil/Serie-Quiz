var currentQuestion = 0;

var questions = document.getElementsByClassName("questionTab");
var form = document.getElementById("testForm");

var nextButton = document.getElementById("nextButton");
var prevButton = document.getElementById("prevButton");

showQuestion();

nextButton.onclick = function() {nextQuestion()};
prevButton.onclick = function() {prevQuestion()};

function showQuestion() {
    questions[currentQuestion].style.display = "flex";

    if(currentQuestion == 0) {
        prevButton.style.display = "none"
    } else {
        prevButton.style.display = "flex"
    }

    if (currentQuestion == (questions.length - 1)) {
        nextButton.innerHTML = "Enviar";
    } else {
        nextButton.innerHTML = "Próximo";
    }
}

function nextQuestion() {
    if(!validateForm()) {
        return false;
    } else {
        currentQuestion++;
        if(currentQuestion >= questions.length) {
            form.submit();
            return false;
        } else {
            questions[currentQuestion - 1].style.display = "none";
            showQuestion(currentQuestion);
        }
    }
}

function prevQuestion() {
    questions[currentQuestion].style.display = "none";

    currentQuestion--;

    showQuestion(currentQuestion);
}

function validateForm() {
    let checked = document.querySelector('input[name="'+ currentQuestion +'"]:checked');

    if(checked) {
        return true;
    } else {
        return false;
    }
}