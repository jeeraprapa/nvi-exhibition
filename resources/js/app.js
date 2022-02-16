require('./bootstrap');

car_drive();
train_drive();

function car_drive(){
    count = 0;
    left = 0;
    setInterval(() => {
        if(count <= 26){
            motion_left = 62+left;
            motion_top = 27+left;
            if(count >= 13 ){
                $('#car-1').css('top',motion_top+'%');
                $('#car-1').css('left',motion_left+'%');
                $('#car-1').fadeOut(260);
                left -=0.5;
            }else{
                $('#car-1').css('top',motion_top+'%');
                $('#car-1').css('left',motion_left+'%');
                $('#car-1').fadeIn();
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



function train_drive(){
    count = 0;
    right = 0;
    setInterval(() => {
        if(count <= 26){
            motion_right = 42+right;
            motion_top = 82+right;
            if(count >= 13 ){
                $('#train-1').css('top',motion_top+'%');
                $('#train-1').css('right',motion_right+'%');
                $('#train-1').fadeOut(260);
                right -=0.5;
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
    }, 260);
}


