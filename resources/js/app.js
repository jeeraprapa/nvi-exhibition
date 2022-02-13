require('./bootstrap');

car_drive();
function car_drive(){
    count = 0;
    right = 0;
    setInterval(() => {
        if(count < 10){
            number = '0'+count;
        }else{
            number = count;
        }

        if(count <= 25){
            motion_right = 10+right;
            motion_top = 55+right;
            if(count >= 13 ){
                $('#car-1').css('top',motion_top+'%');
                $('#car-1').css('right',motion_right+'%');
                right -=0.5;
            }else{
                $('#car-1').css('top',motion_top+'%');
                $('#car-1').css('right',motion_right+'%');
                right +=0.5;
            }
        }else{
            count = 0;
            motion_right = 0;
        }
        count++;
    }, 250);
}
