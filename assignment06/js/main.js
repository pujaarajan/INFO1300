/*
* Inspired by INFO/CS 1300 Fall 2016 Steve Paling and
* http://stackoverflow.com/questions/12013658/trying-to-get-simple-javascript-gallery-with-next-and-previous-buttons-to-loop-b
*/

var i=0
var photos = ["1.jpg", "2.jpg", "3.jpg", "4.jpg"];


function backward(){
    if (i>0){
     i=i-1;
    } else {
     i=photos.length-1;
    }
    document.getElementById("prev").src='images/' + photos[i];
 }

 function forward()
 {
    if (i<photos.length-1){
     i=i+1;
    } else {
     i=0;
    }
 document.getElementById("prev").src='images/' + photos[i]; }



