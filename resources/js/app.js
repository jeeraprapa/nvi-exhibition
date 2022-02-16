require('./bootstrap');
const {delay} = require("lodash/function");

car_drive1();
car_drive2();
train_drive1();

function car_drive1(){
    var count = 0;
    var left = 0;
    setInterval(() => {
        if(count <= 38){
            motion_left = 62+left;
            motion_top = 28+left;
            $('#car-1').fadeIn();
            if(count >= 19 ){
                // $('#car-1').css('top',motion_top+'%');
                // $('#car-1').css('left',motion_left+'%');
                $('#car-1').fadeOut(260);
                // left -=0.5;
                count = 0;
                left = 0;
                motion_left = 0;
                motion_top = 0;
            }else{
                $('#car-1').css('top',motion_top+'%');
                $('#car-1').css('left',motion_left+'%');
                $('#car-1').fadeIn(260);
                left +=0.5;
            }
        }else{
            count = 0;
            left = 0;
            motion_left = 0;
            motion_top = 0;
        }
        count++;
    }, 260);
}

function car_drive2(){
    var count = 0;
    var right = 0;
    setInterval(() => {
        if(count <= 26){
            motion_right = 17.5+right;
            motion_top = 42+right;
            if(count >= 13 ){
                $('#car-2').fadeOut(260);
                count = 0;
                right = 0;
                motion_right = 0;
                motion_top = 0;
            }else{
                $('#car-2').fadeIn();
                $('#car-2').css('top',motion_top+'%');
                $('#car-2').css('right',motion_right+'%');
                right +=0.5;
            }
        }else{
            count = 0;
            right = 0;
            motion_right = 0;
            motion_top = 0;
        }
        count++;
    }, 280);
}



function train_drive1(){
    var count = 0;
    var right = 0;
    setInterval(() => {
        if(count <= 50){
            motion_right = 42+right;
            motion_top = 82+right;
            if(count >= 25 ){
                $('#train-1').fadeOut(100);
                count = 0;
                right = 0;
                motion_right = 0;
                motion_top = 0;
            }else{
                $('#train-1').css('top',motion_top+'%');
                $('#train-1').css('right',motion_right+'%');
                $('#train-1').fadeIn();
                right +=0.5;
            }
        }else{
            count = 0;
            right = 0;
            motion_right = 0;
            motion_top = 0;
        }
        count++;
    }, 100);
}


