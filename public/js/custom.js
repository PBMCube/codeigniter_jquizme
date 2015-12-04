/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

// There was an extra comma at the end of multiList array.

// Setting up jquizme sample demo page

	var quizMulti = {
	multi: [{
        ques: "Which should you use to mark up list items?",
        ans: "<li>",
        ansSel: ["<div>", "<img>"]
    },
    {
        ques: "2+2",
        ans: "4",
        ansSel: [ 1,2,3,null ]
    }],
    multiList: [
	{
        ques: "2+2",
        ans: "<big>4</big>",
        ansSel: [ 1,2,3,null ]
    },
	{
        ques: "Which should you use to mark up list items?",
        ans: "<li>",
        ansSel: ["<div>", "<img>"]
    },
    {
        ques: "2+2",
        ans: "4",
        ansSel: [ 1,2,3,null ]
    }]
    },
	
	/*
	var quizMulti = {
		multiList: [
		{
			ques: "2+2",
			ans: "<big>4</big>",
			ansSel: [ 1,2,3,null ]
		}]
    },
	*/
    options = {
        //help: "All the information required can be found in the <a href='introduction/'>Introductory Lesson</a>. You can go through the lesson again if you struggle with this quiz.",
        animationType: 0,
		showHTML: true,
        showWrongAns: true,
        title: "Bug with getting ans"
	};
	$("#quizArea").jQuizMe(quizMulti, options);

// Setting up jquizme sample demo page

// auto-generate carousel indicator html //
var myCarousel = $("#myCarousel");
myCarousel.append("<ol class='carousel-indicators'></ol>");
var indicators = $(".carousel-indicators"); 
myCarousel.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myCarousel' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myCarousel' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myCarousel').carousel({
interval: 0
});

// auto-generate carousel indicator html //
var myBudget = $("#myBudget");
myBudget.append("<ol id='myBudget-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myBudget-carousel-indicators"); 
myBudget.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myBudget' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myBudget' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myBudget').carousel({
interval: 0
});

// auto-generate carousel indicator html //
var myMeal = $("#myMeal");
myMeal.append("<ol id='myMeal-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myMeal-carousel-indicators"); 
myMeal.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myMeal' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myMeal' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myMeal').carousel({
interval: 0
});

// auto-generate carousel indicator html //
var myDiet = $("#myDiet");
myDiet.append("<ol id='myDiet-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myDiet-carousel-indicators"); 
myDiet.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myDiet' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myDiet' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myDiet').carousel({
interval: 0
});

// auto-generate carousel indicator html //
var myTheme = $("#myTheme");
myTheme.append("<ol id='myTheme-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myTheme-carousel-indicators"); 
myTheme.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myTheme' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myTheme' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myTheme').carousel({
interval: 0
});

// auto-generate carousel indicator html //
var myTypes = $("#myTypes");
myTypes.append("<ol id='myTypes-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myTypes-carousel-indicators"); 
myTypes.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myTypes' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myTypes' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myTypes').carousel({
interval: 0
});


// auto-generate carousel indicator html //
var myHome = $("#myHome");
myHome.append("<ol id='myHome-carousel-indicators' class='carousel-indicators'></ol>");
var indicators = $("#myHome-carousel-indicators"); 
myHome.find(".carousel-inner").children(".item").each(function(index) {
	var indicatorNumber = index + 1;
    (index === 0) ? 
    indicators.append("<li data-target='#myHome' data-slide-to='"+index+"' class='active'>"+indicatorNumber+"</li>") : 
    indicators.append("<li data-target='#myHome' data-slide-to='"+index+"'>"+indicatorNumber+"</li>");
});     


//$('#zoom_container').css('width', '100%');
$('#myHome').carousel({
interval: 0
});




$('#myRecipe').carousel({
interval: 0
});

        
   $('.RecipeContainer').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );

    
$('.dropzone').html5imageupload({
	onAfterProcessImage: function() {
		//console.log($('.main').attr('src'));
                console.log($('.final').val());
	}
});
    
    
    $(".various").fancybox({
        maxWidth: 800,
        maxHeight: 600,
        fitToView: false,
        width: '70%',
        height: '100%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });
    
   

    $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

    //$("#processPanel").processPanel();
 $('.dropdown-toggle').dropdown();
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
      });

/*----------------------------------------------------*/
/*	Tootltip Initialize
/*----------------------------------------------------*/
$("[data-toggle='tooltip']").tooltip();


   var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end



});


