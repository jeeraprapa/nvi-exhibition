require('./bootstrap');

car_drive1();
car_drive2();
car_drive3();
// train_drive1();
train_drive2();

function car_drive1(){
    var count = 0;
    var left = 0;
    setInterval(() => {
        if(count <= 28){
            motion_left = 62+left;
            motion_top = 42+left;
            $('#car-1').fadeIn();
            if(count >= 14 ){
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
            motion_right = 17+right;
            motion_top = 61+right;
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
    }, 300);
}

function car_drive3(){
    var count = 0;
    var right = 0;
    setInterval(() => {
        if(count <= 26){
            motion_right = 45+right;
            motion_top = 40+right;
            if(count >= 13 ){
                $('#car-3').fadeOut(260);
                count = 0;
                right = 0;
                motion_right = 0;
                motion_top = 0;
            }else{
                $('#car-3').fadeIn();
                $('#car-3').css('top',motion_top+'%');
                $('#car-3').css('right',motion_right+'%');
                right +=0.5;
            }
        }else{
            count = 0;
            right = 0;
            motion_right = 0;
            motion_top = 0;
        }
        count++;
    }, 250);
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
    }, 200);
}

function train_drive2(){
    var count = 0;
    var right = 0;
    setInterval(() => {
        if(count <= 18){
            motion_right = 68+right;
            motion_top = 18+right;
            if(count >= 9 ){
                $('#train-2').fadeOut(100);
                count = 0;
                right = 0;
                motion_right = 0;
                motion_top = 0;
            }else{
                $('#train-2').css('top',motion_top+'%');
                $('#train-2').css('right',motion_right+'%');
                $('#train-2').fadeIn();
                right +=0.4;
            }
        }else{
            count = 0;
            right = 0;
            motion_right = 0;
            motion_top = 0;
        }
        count++;
    }, 200);
}


