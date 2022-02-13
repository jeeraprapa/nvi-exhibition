<script>

    var width = $(window).width();
    var isMobile = false;
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }



    var mouseX;
    var mouseY;
    $(document).mousemove(function (e) {
        // mouse coordinates
        mouseX = e.pageX;
        mouseY = e.pageY;

        $("#zoom").animate({
            scrollLeft: "250px",
        });



    });


    $('img[usemap]').rwdImageMaps();
    ////display only desktop
    if(isMobile == false){
        $('img[usemap]').maphilight({
            fillOpacity: 0.2,
            stroke: false,
        });
    }


    $(".area-map").mouseover(function () {
        // populate tooltip string
        var name = $(this).data('name');
        $('#tooltip span').html(name);

        // show tooltip
        $('#tooltip').stop(false, true).fadeIn(1);

        // position tooltip relative to mouse coordinates
        $(this).mousemove(function () {
            $('#tooltip').css({
                'top': mouseY - 100,
                'left': mouseX - 100
            });
        });
    }).mouseout(function () {
        // hide tooltip
        $('#tooltip').stop(false, true).fadeOut('slow');
    });


    $("#balloon").mouseover(function () {
        // populate tooltip string
        var name = $(this).data('name');
        $('#tooltip span').html(name);

        // show tooltip
        $('#tooltip').stop(false, true).fadeIn(1);

        // position tooltip relative to mouse coordinates
        $(this).mousemove(function () {
            $('#tooltip').css({
                'top': mouseY - 100,
                'left': mouseX - 100
            });
        });
    }).mouseout(function () {
        // hide tooltip
        $('#tooltip').stop(false, true).fadeOut('slow');
    });




    if(width <= 485 ){
        var areamobile = document.getElementById('zoom');
        window.pz = panzoom(areamobile, {
            bounds: true,
            initialZoom: 3,
            maxZoom: 3.5,
            minZoom:2.5,
        });
    }else if(width >= 769 && width <= 1024){

        var area_table = document.getElementById('zoom');
        window.pz = panzoom(area_table, {
            bounds: true,
            initialZoom: 2,
            maxZoom: 2.5,
            minZoom: 1.5,
        });

    }else{

        var area = document.getElementById('zoom');
        window.pz = panzoom(area, {
            bounds: true,
            initialZoom: 0.85,
            maxZoom: 2,
            minZoom: 0.85,
            contain: 'inside',
            initialX: 1100,
            initialY: 500,
        });
    }


    // $(".area-map").each(function() {

    //     $(this).on("click",function(){
    //         // console.log('dddd');
    //         // $(this)[0].click();
    //         url = $(this).attr('data-link');
    //         window.location.href = url;
    //     });

    // });


    var touch = 0;
    $(".area-map").each(function() {
        $(this).on("touchstart",function(){
            touch = 0;
            var hold_mobile  = setInterval(() => {
                touch++;
            }, 100);
        });

        $(this).on("touchend",function(){

            if( touch <= 1 ){

                url = $(this).attr('data-link');
                window.location.href = url;
            }

        });


    });



    $('#zoomIn').on("click touchend",function(){

        if(width <= 481 ){
            position_x = 0;
            position_y = 0;
        }else{
            position_x = 800;
            position_y = 500;
        }

        window.pz.smoothZoom(position_x, position_y, 1.5);

    });

    $('#zoomOut').on("click touchend",function(){
        if(width <= 481 ){
            position_x = 0;
            position_y = 0;
        }else{
            position_x = 1100;
            position_y = 500;
        }

        window.pz.smoothZoom(position_x, position_y, 0.5);

    });

    // trigger zoom

    if(width > 1024){
        $("#zoom").on('mousewheel', function(e){
            window.pz.smoothZoom(300, 500, 0.5);

        });

        var event = jQuery.Event( "mousewheel" );
        event.deltaY = -1;
        $("#zoom").trigger(event);
    }



    // zoom


    $('#menu').on("click",function(){
        if($('.menu').hasClass('show')){
            $('.menu').removeClass('show');
            $('.menu').css('display','none');
        }else{
            $('.menu').addClass('show');
            $('.menu').css('display','block');
        }
    });



    $('.area-map').mousedown(function(){

        count = 0;
        var hold  = setInterval(() => {
            count++;
        }, 500);

    }).mouseup(function(){
        if(count <=1){
            url = $(this).attr('data-link');
            window.location.href = url;
        }

        clearInterval(hold);
    });



    //gif
    gif_doctor();
    gif_nurse();
    gif_parent();
    gif_ppe();
    gif_woman1();
    gif_woman2();
    gif_girl();
    gif_man1();
    gif_man2();


    function gif_doctor(){
        count = 0;
        right = 0;
        setInterval(() => {
            if(count < 10){
                number = '0'+count;
            }else{
                number = count;
            }

            if(count <= 25){
                motion_right = 41+right;
                if(count >= 13 ){
                    $('#person_doctor').css('right',motion_right+'%');
                    right -=0.5;
                }else{
                    $('#person_doctor').css('right',motion_right+'%');
                    right +=0.5;
                }
                $('#person_doctor').attr("src","https://virtualexpo.asa.or.th/assets/gif/doctor/doctor_"+number+".gif");
            }else{
                count = 0;
                motion_right = 0;
            }
            count++;
        }, 250);
    }

    function gif_nurse(){
        nurse_count = 0;
        nurse_top = 0;
        setInterval(() => {

            if(nurse_count < 10){
                nurse_number = '0'+nurse_count;
            }else{
                nurse_number = nurse_count;
            }

            if(nurse_count <= 35){
                nurse_motion_top = 81-nurse_top;
                if(nurse_count < 13 ){

                    nurse_img = parseInt(nurse_number)+13

                    if(nurse_img < 10){
                        nurse_img = '0'+nurse_img;
                    }else{
                        nurse_img = nurse_img;
                    }
                    if(nurse_img == 26){
                        nurse_img =25;
                    }

                    $('#person_nurse').css('top',nurse_motion_top+'%');
                    nurse_top += 1 ;
                    $('#person_nurse').attr("src","https://virtualexpo.asa.or.th/assets/gif/nurse/nurse_"+nurse_img+".gif");
                }else if(nurse_count >= 13 &&  nurse_count < 23){
                    $('#person_nurse').attr("src","https://virtualexpo.asa.or.th/assets/gif/nurse/nurse_13.gif");
                }else{
                    nurse_img = parseInt(nurse_number)-23;
                    if(nurse_img < 10){
                        nurse_img = '0'+nurse_img;
                    }else{
                        nurse_img = nurse_img;
                    }


                    $('#person_nurse').css('top',nurse_motion_top+'%');
                    nurse_top -= 1 ;
                    $('#person_nurse').attr("src","https://virtualexpo.asa.or.th/assets/gif/nurse/nurse_"+nurse_img+".gif");
                }


            }else{
                nurse_count = 0;
                nurse_top = 0;
            }


            nurse_count++;


        }, 300);

    }


    function gif_parent(){
        parent_position_top = 58;
        parent_position_right = 53;
        parent_count = 0;
        parent_top = 0;
        parent_right =0;
        setInterval(() => {
            if(parent_count <= 25){
                parent_motion_top = parent_position_top;
                parent_motion_right = parent_position_right;

                if(parent_count <= 5){
                    parent_img = parseInt(parent_count)+13
                    if(parent_img < 10){
                        parent_img = '0'+parent_img;
                    }else{
                        parent_img = parent_img;
                    }

                    $('#person_parent').css('top',parent_motion_top+'%');
                    $('#person_parent').css('right',parent_motion_right+'%');
                    $('#person_parent').attr("src","https://virtualexpo.asa.or.th/assets/gif/parent/parent_"+parent_img+".gif");
                    parent_position_top = parent_position_top - 0.25;
                    parent_position_right =  parent_position_right - 0.50;

                }else if(parent_count > 5 && parent_count <= 13){
                    parent_img = parseInt(parent_count)+13
                    if(parent_img < 10){
                        parent_img = '0'+parent_img;
                    }else{
                        parent_img = parent_img;
                    }

                    if(parent_img == 26){
                        parent_img = 25;
                    }

                    $('#person_parent').css('top',parent_motion_top+'%');
                    $('#person_parent').css('right',parent_motion_right+'%');
                    $('#person_parent').attr("src","https://virtualexpo.asa.or.th/assets/gif/parent/parent_"+parent_img+".gif");
                    parent_position_top = parent_position_top - 0.25;
                    parent_position_right =  parent_position_right + 0.50;

                }else if(parent_count > 13 && parent_count <= 19){
                    parent_img = parseInt(parent_count)-13
                    if(parent_img < 10){
                        parent_img = '0'+parent_img;
                    }else{
                        parent_img = parent_img;
                    }

                    $('#person_parent').css('top',parent_motion_top+'%');
                    $('#person_parent').css('right',parent_motion_right+'%');
                    $('#person_parent').attr("src","https://virtualexpo.asa.or.th/assets/gif/parent/parent_"+parent_img+".gif");
                    parent_position_top = parent_position_top + 0.25;
                    parent_position_right =  parent_position_right - 0.50;

                }else if(parent_count > 19){
                    parent_img = parseInt(parent_count)-13
                    if(parent_img < 10){
                        parent_img = '0'+parent_img;
                    }else{
                        parent_img = parent_img;
                    }



                    $('#person_parent').css('top',parent_motion_top+'%');
                    $('#person_parent').css('right',parent_motion_right+'%');
                    $('#person_parent').attr("src","https://virtualexpo.asa.or.th/assets/gif/parent/parent_"+parent_img+".gif");
                    parent_position_top = parent_position_top + 0.25;
                    parent_position_right =  parent_position_right + 0.50;

                }
            }else{
                parent_position_top = 58;
                parent_position_right = 53;
                parent_count = 0;
                parent_right = 0;
                parent_top = 0;
            }


            parent_count++;


        }, 300);

    }


    function gif_ppe(){
        ppe_position_top = 37;
        ppe_position_right = 65;
        ppe_count = 0;
        ppe_top = 0;
        ppe_right =0;
        setInterval(() => {
            if(ppe_count <= 31){
                ppe_motion_top = ppe_position_top;
                ppe_motion_right = ppe_position_right;

                if(ppe_count < 8){
                    if(ppe_count < 10){
                        ppe_img = '0'+ppe_count;
                    }else{
                        ppe_img = ppe_count;
                    }

                    $('#person_ppe').css('top',ppe_motion_top+'%');
                    $('#person_ppe').css('right',ppe_motion_right+'%');
                    $('#person_ppe').attr("src","https://virtualexpo.asa.or.th/assets/gif/ppe/ppe_"+ppe_img+".gif");
                    ppe_position_top = ppe_position_top + 0.50;
                    ppe_position_right =  ppe_position_right - 0.50;

                }else if(ppe_count >= 8 && ppe_count <= 18 ){
                    $('#person_ppe').attr("src","https://virtualexpo.asa.or.th/assets/gif/ppe/ppe_14.gif");
                }else if(ppe_count > 19){
                    ppe_img = ppe_count-6;
                    if(ppe_img < 10){
                        ppe_img = '0'+ppe_img;
                    }else{
                        ppe_img = ppe_img;
                    }

                    $('#person_ppe').css('top',ppe_motion_top+'%');
                    $('#person_ppe').css('right',ppe_motion_right+'%');
                    $('#person_ppe').attr("src","https://virtualexpo.asa.or.th/assets/gif/ppe/ppe_"+ppe_img+".gif");
                    ppe_position_top = ppe_position_top - 0.50;
                    ppe_position_right =  ppe_position_right + 0.50;
                }
            }else{
                ppe_position_top = 37;
                ppe_position_right = 65;
                ppe_count = 0;
                ppe_right = 0;
                ppe_top = 0;
            }


            ppe_count++;


        }, 250);

    }


    function gif_woman1(){
        woman1_position_top = 25;
        woman1_position_right = 61;
        woman1_count = 0;
        woman1_top = 0;
        woman1_right =0;
        setInterval(() => {
            if(woman1_count <= 33){
                woman1_motion_top = woman1_position_top;
                woman1_motion_right = woman1_position_right;

                if(woman1_count < 4){
                    $('#person_woman1').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman1/woman1_14.gif");
                }else if(woman1_count >= 5 && woman1_count < 8 ){
                    if(woman1_count < 10){
                        woman1_img = '0'+woman1_count;
                    }else{
                        woman1_img = woman1_count;
                    }

                    $('#person_woman1').css('top',woman1_motion_top+'%');
                    $('#person_woman1').css('right',woman1_motion_right+'%');
                    $('#person_woman1').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman1/woman1_"+woman1_img+".gif");
                    woman1_position_top = woman1_position_top + 0.5;
                    woman1_position_right =  woman1_position_right - 1;
                }else if(woman1_count >= 8 && woman1_count < 18){
                    $('#person_woman1').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman1/woman1_01.gif");
                }else if(woman1_count >= 19 && woman1_count < 21){
                    woman1_img= woman1_count-8;
                    if(woman1_count < 10){
                        woman1_img = '0'+woman1_img;
                    }else{
                        woman1_img = woman1_img;
                    }

                    $('#person_woman1').css('top',woman1_motion_top+'%');
                    $('#person_woman1').css('right',woman1_motion_right+'%');
                    $('#person_woman1').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman1/woman1_"+woman1_img+".gif");
                    woman1_position_top = woman1_position_top + 0.5;
                    woman1_position_right =  woman1_position_right - 1;
                }else if(woman1_count >= 21){
                    woman1_img= woman1_count-8;
                    if(woman1_img < 10){
                        woman1_img = '0'+woman1_img;
                    }else{
                        woman1_img = woman1_img;
                    }

                    $('#person_woman1').css('top',woman1_motion_top+'%');
                    $('#person_woman1').css('right',woman1_motion_right+'%');
                    $('#person_woman1').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman1/woman1_"+woman1_img+".gif");
                    woman1_position_top = woman1_position_top - 0.25;
                    woman1_position_right =  woman1_position_right + 0.5;
                }

            }else{
                woman1_position_top = 25;
                woman1_position_right = 61;
                woman1_count = 0;
                woman1_right = 0;
                woman1_top = 0;
            }


            woman1_count++;


        }, 300);

    }

    function gif_woman2(){
        woman2_position_top = 51;
        woman2_position_right = 33;
        woman2_count = 0;
        woman2_top = 0;
        woman2_right =0;
        setInterval(() => {
            if(woman2_count <= 27){
                woman2_motion_top = woman2_position_top;
                woman2_motion_right = woman2_position_right;

                if(woman2_count < 5){
                    if(woman2_count < 10){
                        woman2_img = '0'+woman2_count;
                    }else{
                        woman2_img = woman2_count;
                    }

                    $('#person_woman2').css('top',woman2_motion_top+'%');
                    $('#person_woman2').css('right',woman2_motion_right+'%');
                    $('#person_woman2').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman2/woman2_"+woman2_img+".gif");
                    woman2_position_top = woman2_position_top + 0.5;
                    woman2_position_right =  woman2_position_right - 0.25;
                }else if(woman2_count >= 5 && woman2_count < 15 ){

                    $('#person_woman2').css('top',woman2_motion_top+'%');
                    $('#person_woman2').css('right',woman2_motion_right+'%');
                    $('#person_woman2').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman2/woman2_01.gif");

                }else if(woman2_count >= 15 ){

                    woman2_img = woman2_count-2;
                    if(woman2_img < 10){
                        woman2_img = '0'+woman2_img;
                    }else{
                        woman2_img = woman2_img;
                    }

                    $('#person_woman2').css('top',woman2_motion_top+'%');
                    $('#person_woman2').css('right',woman2_motion_right+'%');
                    $('#person_woman2').attr("src","https://virtualexpo.asa.or.th/assets/gif/woman2/woman2_"+woman2_img+".gif");
                    woman2_position_top = woman2_position_top - 0.5;
                    woman2_position_right =  woman2_position_right + 0.25;
                }

            }else{
                woman2_position_top = 51;
                woman2_position_right = 33;
                woman2_count = 0;
                woman2_right = 0;
                woman2_top = 0;
            }


            woman2_count++;


        }, 300);

    }


    function gif_girl(){
        girl_position_top = 54;
        girl_position_right = 62;
        girl_count = 0;
        girl_top = 0;
        girl_right =0;
        setInterval(() => {
            if(girl_count <= 34){
                girl_motion_top = girl_position_top;
                girl_motion_right = girl_position_right;

                if(girl_count < 5){
                    if(girl_count < 10){
                        girl_img = '0'+girl_count;
                    }else{
                        girl_img = girl_count;
                    }

                    $('#person_girl').css('top',girl_motion_top+'%');
                    $('#person_girl').css('right',girl_motion_right+'%');
                    $('#person_girl').attr("src","https://virtualexpo.asa.or.th/assets/gif/girl/girl_"+girl_img+".gif");
                    girl_position_top = girl_position_top;
                    girl_position_right =  girl_position_right + 0.5;
                }else if(girl_count >= 5 && girl_count < 13 ){

                    if(girl_count < 10){
                        girl_img = '0'+girl_count;
                    }else{
                        girl_img = girl_count;
                    }

                    $('#person_girl').css('top',girl_motion_top+'%');
                    $('#person_girl').css('right',girl_motion_right+'%');
                    $('#person_girl').attr("src","https://virtualexpo.asa.or.th/assets/gif/girl/girl_"+girl_img+".gif");
                    girl_position_top = girl_position_top-0.5;
                    girl_position_right =  girl_position_right + 0.5;


                }else if(girl_count >= 13 && girl_count <=23  ){
                    $('#person_girl').attr("src","https://virtualexpo.asa.or.th/assets/gif/girl/girl_14.gif");
                }else if(girl_count > 23 && girl_count <= 28 ){
                    girl_img = girl_count-19;
                    if(girl_img < 10){
                        girl_img = '0'+girl_img;
                    }else{
                        girl_img = girl_img;
                    }

                    $('#person_girl').css('top',girl_motion_top+'%');
                    $('#person_girl').css('right',girl_motion_right+'%');
                    $('#person_girl').attr("src","https://virtualexpo.asa.or.th/assets/gif/girl/girl_"+girl_img+".gif");
                    girl_position_top = girl_position_top+0.75;
                    girl_position_right =  girl_position_right - 0.75;
                }else if(girl_count > 19 ){
                    girl_img = girl_count-9;
                    if(girl_img < 10){
                        girl_img = '0'+girl_img;
                    }else{
                        girl_img = girl_img;
                    }

                    $('#person_girl').css('top',girl_motion_top+'%');
                    $('#person_girl').css('right',girl_motion_right+'%');
                    $('#person_girl').attr("src","https://virtualexpo.asa.or.th/assets/gif/girl/girl_"+girl_img+".gif");
                    girl_position_top = girl_position_top;
                    girl_position_right =  girl_position_right - 0.5;
                }

            }else{
                girl_position_top = 54;
                girl_position_right = 62;
                girl_count = 0;
                girl_right = 0;
                girl_top = 0;
            }


            girl_count++;


        }, 200);

    }

    function gif_man1(){
        man1_position_top = 60;
        man1_position_right = 71;
        man1_count = 0;
        man1_top = 0;
        man1_right =0;
        setInterval(() => {
            if(man1_count <= 35){
                man1_motion_top = man1_position_top;
                man1_motion_right = man1_position_right;

                if(man1_count <= 11){

                    if(man1_count < 10){
                        man1_img = '0'+man1_count;
                    }else{
                        man1_img = man1_count;
                    }

                    $('#person_man1').css('top',man1_motion_top+'%');
                    $('#person_man1').css('right',man1_motion_right+'%');
                    $('#person_man1').attr("src","https://virtualexpo.asa.or.th/assets/gif/man1/man1_"+man1_img+".gif");
                    man1_position_top = man1_position_top+0.75;
                }else if(man1_count > 11 && man1_count <= 21){
                    $('#person_man1').attr("src","https://virtualexpo.asa.or.th/assets/gif/man1/man1_14.gif");

                }else if(man1_count > 21 ){
                    man1_img = man1_count-10;
                    if(man1_img < 10){
                        man1_img = '0'+man1_img;
                    }else{
                        man1_img = man1_img;
                    }

                    $('#person_man1').css('top',man1_motion_top+'%');
                    $('#person_man1').css('right',man1_motion_right+'%');
                    $('#person_man1').attr("src","https://virtualexpo.asa.or.th/assets/gif/man1/man1_"+man1_img+".gif");
                    man1_position_top = man1_position_top-0.9;

                }

            }else{
                man1_position_top = 60;
                man1_position_right = 71;
                man1_count = 0;
                man1_right = 0;
                man1_top = 0;
            }


            man1_count++;


        }, 400);

    }


    function gif_man2(){
        man2_position_top = 70;
        man2_position_right = 45;
        man2_count = 0;
        man2_top = 0;
        man2_right =0;
        setInterval(() => {
            if(man2_count <= 25){
                man2_motion_top = man2_position_top;
                man2_motion_right = man2_position_right;

                if(man2_count < 10){
                    man2_img = '0'+man2_count;
                }else{
                    man2_img = man2_count;
                }


                if(man2_count <= 13){
                    $('#person_man2').css('top',man2_motion_top+'%');
                    $('#person_man2').css('right',man2_motion_right+'%');
                    $('#person_man2').attr("src","https://virtualexpo.asa.or.th/assets/gif/man2/man2_"+man2_img+".gif");
                    man2_position_top = man2_position_top+0.75;

                }else if(man2_count > 13 ){
                    $('#person_man2').css('top',man2_motion_top+'%');
                    $('#person_man2').css('right',man2_motion_right+'%');
                    $('#person_man2').attr("src","https://virtualexpo.asa.or.th/assets/gif/man2/man2_"+man2_img+".gif");
                    man2_position_top = man2_position_top-0.75;

                }

            }else{
                man2_position_top = 70;
                man2_position_right = 45;
                man2_count = 0;
                man2_right = 0;
                man2_top = 0;
            }


            man2_count++;


        }, 350);

    }


    $('.body-1').css('display','none');

</script>
