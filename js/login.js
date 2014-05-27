// Login Form

$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
        event.stopPropagation();
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});

// accordion

$(document).ready(function() {
    $("#accordion > h5").click(function() {
        var paragraph = $(this).next();
        var icon = $(this).children();

        if ($("#accordion > div").is(':hidden')) {
            $(" #accordion > h5 > span").removeClass('icon-minus-circled').addClass('icon-plus-circled');
        }

        if ((paragraph.is('div')) && (paragraph.is(':visible'))) {
            icon.removeClass('icon-minus-circled').addClass('icon-plus-circled'); 
            paragraph.slideUp('normal');
        }
        if ((paragraph.is('div')) && (!paragraph.is(':visible'))) {
            icon.removeClass('icon-plus-circled').addClass('icon-minus-circled');
            $('#accordion div:visible').slideUp('normal');
            paragraph.slideDown('normal');
        }

        if (paragraph.is('div')) {
            return false;
        } else {
            return true;
        }
    });
    $("#accordion_r > h5").click(function() {
        var paragraph = $(this).next();
        var icon = $(this).children();

        if ($("#accordion_r > div").is(':hidden')) {
            $(" #accordion_r > h5 > span").removeClass('icon-minus-circled').addClass('icon-plus-circled');
            $(" #accordion_r > h5").removeClass('active');
        }

        if ((paragraph.is('div')) && (paragraph.is(':visible'))) {
            $(this).prev().addClass('active');
            icon.removeClass('icon-minus-circled').addClass('icon-plus-circled'); 
            paragraph.slideUp('normal');
        }
        if ((paragraph.is('div')) && (!paragraph.is(':visible'))) {
            icon.removeClass('icon-plus-circled').addClass('icon-minus-circled');
            $(this).prev().removeClass('active');
            $('#accordion_r div:visible').slideUp('normal');
            paragraph.slideDown('normal');
        }

        if (paragraph.is('div')) {
            return false;
        } else {
            return true;
        }

    });
});

// script per Box a comparsa

$(document).ready(function() {

       var backup = $( "div#backup" );
       var allBackup = $( "div#allBackup" );

       var archive = $( "div#archive" );
       var allArchive = $( "div#allArchive" );

       var closeArchive = $("span#closeArchive");
   
      backup.click(function() {
        $(this).addClass('selected');
        allBackup.toggle('blind');
      });
      archive.click(function() {
        $(this).addClass('selected');
        allArchive.toggle('blind');
      });

      allBackup.click(function() {
        $(this).toggle("blind");
        backup.removeClass('selected');
      });
      
      closeArchive.click(function() {
        allArchive.toggle("blind");
        archive.removeClass('selected');
      });
// $( "#ondem_close" ).click(function() {  
});
