var plus = document.querySelectorAll(".plus");
var minus = document.querySelectorAll(".minus");
var detail = document.querySelectorAll(".detail");

for(var i = 0;i < plus.length;i++) {
    (function(i) {
        plus[i].onclick = function() {
            detail[i].style.display = "block";
            plus[i].style.display = "none";
            minus[i].style.display = "block";
        }; 
        minus[i].onclick = function() {
            detail[i].style.display = "none";
            plus[i].style.display = "block";
            minus[i].style.display = "none";
        };
    })(i);
}