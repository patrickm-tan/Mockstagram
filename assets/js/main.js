function favouriter(temp) {

    currHeart = document.getElementById(temp.id);
    
    //Check which heart is currently active
    if (temp.id == "liked") {
        //Change the class name given which heart is current
        //Change id to the now current heart
        currHeart.className = "fa fa-heart-o fa-2x"
        currHeart.id = "nonLiked";
    } else {
        currHeart.className = "fa  fa-heart fa-2x";
        currHeart.id = "liked"
    }
}

//Global variable to track slider changes
var count = 0;

function changeSlide(direction) {
    //Array of images titles to easily change the img src
    var arrayofImages = ['1', '2', '3', '4', '5', '6'];

    //If the direction is 0, next button was selected, thus move forward
    //Set the image via array[index]
    if (direction == 0) {
        //Check if the count is 5, to reloop to the beginning
        if (count == 5) {
            count = -1;
        }
        document.getElementById("currImage").src = "assets/images/" + arrayofImages[count + 1] + ".png";
        count++;
    } else {
        //Check if the count is 0, to reloop to the end
        if (count == 0) {
            count = 6;
        }
        
        document.getElementById("currImage").src = "assets/images/" + arrayofImages[count - 1] + ".png";
        count--;
    }
}