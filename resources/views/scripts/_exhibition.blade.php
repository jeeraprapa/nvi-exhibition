<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-url-hash@0.2.3/dist/js/splide-extension-url-hash.min.js"></script>

<script>
    var splide = new Splide( '.splide', {
        arrows: true,
        perPage    : 1,
        breakpoints: {
            640: {
                perPage: 1,
            },
        }
    } ).mount(window.splide.Extensions);

    var splide_mb = new Splide( '.splide-mb', {
        arrows: true,
        perPage    : 1,
        breakpoints: {
            640: {
                perPage: 1,
            },
        }
    } ).mount(window.splide.Extensions);

    $('#pagetwo__pointer__one').click(function(e){
        $('#four__pointer__hr').modal('hide');
        e.preventDefault();
        $('#two__pointer__one').modal('show');
        splide.go(1);
    });

    //slide1
    $('.one__pointer__one').click(function(){
        $('#one__pointer__one').modal('show');
    });
    $('.one__pointer__two').click(function(){
        $('#one__pointer__two').modal('show');
    });
    $("#close_one_one").click(function(){
        $("#one__pointer__one").modal('hide');
    });
    $("#close_one_two").click(function(){
        $("#one__pointer__two").modal('hide');
    });
    //slide2
    $('.two__pointer__one').click(function () {
        $('#two__pointer__one').modal('show');
    });
    $("#close_two_one").click(function(){
        $("#two__pointer__one").modal('hide');
    });
    $('.two__pointer__two').click(function () {
        $('#two__pointer__two').modal('show');
    });
    $("#close_two_two").click(function(){
        $("#two__pointer__two").modal('hide');
    });

    $('.two__pointer__three').click(function () {
        $('#two__pointer__three').modal('show');
    });
    $("#close_two_three").click(function(){
        $("#two__pointer__three").modal('hide');
    });

    $('.two__pointer__four').click(function () {
        $('#two__pointer__four').modal('show');
    });
    $("#close_two_four").click(function(){
        $("#two__pointer__four").modal('hide');
    });
    //slide3
    $('.three__pointer__one').click(function () {
        $('#three__pointer__one').modal('show');
    });
    $("#close_three_one").click(function(){
        $("#three__pointer__one").modal('hide');
    });

    $('.three__pointer__two').click(function () {
        $('#three__pointer__two').modal('show');
    });
    $("#close_three_two").click(function(){
        $("#three__pointer__two").modal('hide');
    });
    $('.three__pointer__three').click(function () {
        $('#three__pointer__three').modal('show');
    });
    $("#close_three_three").click(function(){
        $("#three__pointer__three").modal('hide');
    });
    $('.three__pointer__four').click(function () {
        $('#three__pointer__four').modal('show');
    });
    $("#close_three_four").click(function(){
        $("#three__pointer__four").modal('hide');
    });
    //slide4
    $('.four__pointer__discovery').click(function () {
        $('#four__pointer__discovery').modal('show');
    });
    $("#close_four_discovery").click(function(){
        $("#four__pointer__discovery").modal('hide');
    });
    $('.four__pointer__hr').click(function () {
        $('#four__pointer__hr').modal('show');
    });
    $("#close_four_hr").click(function(){
        $("#four__pointer__hr").modal('hide');
    });
    $('.four__pointer__pd').click(function () {
        $('#four__pointer__pd').modal('show');
    });
    $("#close_four_pd").click(function(){
        $("#four__pointer__pd").modal('hide');
    });
    $('.four__pointer__networking').click(function () {
        $('#four__pointer__networking').modal('show');
    });
    $("#close_four_networking").click(function(){
        $("#four__pointer__networking").modal('hide');
    });
    $('.four__pointer__pp').click(function () {
        $('#four__pointer__pp').modal('show');
    });
    $("#close_four_pp").click(function(){
        $("#four__pointer__pp").modal('hide');
    });
    $('.four__pointer__rl').click(function () {
        $('#four__pointer__rl').modal('show');
    });
    $("#close_four_rl").click(function(){
        $("#four__pointer__rl").modal('hide');
    });
    $('.four__pointer__ct').click(function () {
        $('#four__pointer__ct').modal('show');
    });
    $("#close_four_ct").click(function(){
        $("#four__pointer__ct").modal('hide');
    });
    $('.four__pointer__lc').click(function () {
        $('#four__pointer__lc').modal('show');
    });
    $("#close_four_lc").click(function(){
        $("#four__pointer__lc").modal('hide');
    });
    $('.four__pointer__production').click(function () {
        $('#four__pointer__production').modal('show');
    });
    $('#close_four_production').click(function () {
        $('#four__pointer__production').modal('hide');
    });
    //slide5
    $('.five__pointer__one').click(function () {
        $('#five__pointer__one').modal('show');
    });
    $('#close_five_one').click(function () {
        $('#five__pointer__one').modal('hide');
    });

    $('.five__pointer__two').click(function () {
        $('#five__pointer__two').modal('show');
    });
    $('#close_five_two').click(function () {
        $('#five__pointer__two').modal('hide');
    });

    $('.five__pointer__three').click(function () {
        $('#five__pointer__three').modal('show');
    });
    $('#close_five_three').click(function () {
        $('#five__pointer__three').modal('hide');
    });

    $('.five__pointer__four').click(function () {
        $('#five__pointer__four').modal('show');
    });
    $('#close_five_four').click(function () {
        $('#five__pointer__four').modal('hide');
    });

    $('.five__pointer__five').click(function () {
        $('#five__pointer__five').modal('show');
    });
    $('#close_five_five').click(function () {
        $('#five__pointer__five').modal('hide');
    });

    $('.five__pointer__center').click(function(){
        $('#five__pointer__center').modal('show');
    });
    $('#close_five_center').click(function () {
        $('#five__pointer__center').modal('hide');
    });

    $('.five__pointer__green').click(function () {
        $('#five__pointer__green').modal('show');
    });
    $('#close_five_green').click(function () {
        $('#five__pointer__green').modal('hide');
    });

    $('.five__pointer__red').click(function () {
        $('#five__pointer__red').modal('show');
    });
    $('#close_five_red').click(function () {
        $('#five__pointer__red').modal('hide');
    });

    $('.five__pointer__blue').click(function () {
        $('#five__pointer__blue').modal('show');
    });
    $('#close_five_blue').click(function () {
        $('#five__pointer__blue').modal('hide');
    });

    $('.five__pointer__car').click(function () {
        $('#five__pointer__car').modal('show');
    });
    $('#close_five_car').click(function () {
        $('#five__pointer__car').modal('hide');
    });
</script>
