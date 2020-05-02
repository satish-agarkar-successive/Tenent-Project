/*
--------------------------------------------------------------
  Template Name: Orbiter - Responsive Admin Dashboard Template
  File: Core JS File
--------------------------------------------------------------
 */

 // var ajax_result= {};

"use strict";
$(document).ready(function() {

    //made blur in style.css - search .infobar-settings-sidebar-overlay{}
    // moved below line after appending options
     $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});




    /* -- Menu js -- */
    $(function() {
        for (var a = window.location, abc = $(".horizontal-menu a").filter(function() {
            return this.href == a;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!abc.is("li")) break;
            abc = abc.parent().addClass("in").parent().addClass("active");
        }
    });
    /* -- Infobar Setting Sidebar -- */


    $("#infobar-settings-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-settings-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-settings-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-settings-sidebar").removeClass("sidebarshow");
    });







     $("#infobar-adduser-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-adduser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-adduser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-adduser-sidebar").removeClass("sidebarshow");
    });



    //$(".edit").on("click", function(e) 
    //this addclass() is happining
    $(".infobar-edituser-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });    



    // $(".edit").on("click", function(e) 
    //  {
    //     //alert($(this).data("id"));
    //     //ajax call;
    //     getdetails($(this).data("id")); // this function is in respective view

    //     e.preventDefault();

    //     $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        
    //     //below lines are added in function getuserdetails() inside success
    //     // $("#infobar-edituser-sidebar").addClass("sidebarshow");

    //  }); 







     $(".switchery").on("click", function(e) 
     {
        e.preventDefault();
        if( confirm("Are You Sure , \nYou Want To Change Status Of User "+$(this).data("id")+" ?") )
        { 
            window.location=$(this).data("url")+"?action="+$(this).data("action")+"&id="+$(this).data("id")+"&value="+$(this).data("value");
            $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"}); 
        }
     }); 


     $(".delete").on("click", function(e) 
     {
        e.preventDefault();
        if( confirm("Are You Sure , \nYou Want To Delete User "+$(this).data("id")+" ?") )
        { 
            window.location=$(this).data("url")+"?action="+$(this).data("action")+"&id="+$(this).data("id")+"&value="+$(this).data("value");
            $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"}); 
        }
     }); 





    $("#infobar-addbusiness-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-addbusiness-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-business-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-addbusiness-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-editbusiness-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-editbusiness-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-editbusiness-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-editbusiness-sidebar").removeClass("sidebarshow");
    }); 







     $("#infobar-add-block-floor-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-block-floor-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-block-floor-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-block-floor-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-block-floor-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-block-floor-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-block-floor-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-block-floor-sidebar").removeClass("sidebarshow");
    }); 





     $("#infobar-add-room-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-room-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-room-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-room-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-room-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-room-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-room-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-room-sidebar").removeClass("sidebarshow");
    }); 






   $("#infobar-add-bed-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-bed-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-bed-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-bed-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-bed-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-bed-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-bed-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-bed-sidebar").removeClass("sidebarshow");
    }); 






    $("#infobar-add-charges-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-charges-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-charges-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-charges-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-charges-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-charges-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-charges-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-charges-sidebar").removeClass("sidebarshow");
    }); 


    

    $("#infobar-viewlead-close").on("click", function(e) {
        //e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-viewlead-sidebar").removeClass("sidebarshow");
    });  







    //for editor
    $('.note-insert').hide();
    $('.note-icon-code').hide();


    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;

    //for add sliders only    
    $(".date").attr("min",today);
    $(".date").attr("value",today);



        $('.onlyalphaspace').keypress(function (e) {
            var regex = new RegExp("^[a-zA-Z \s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) { return true;} else { e.preventDefault(); return false;}
            //if (this.value.length > 199) { this.value = this.value.slice(0, 199); }
        });


      //all lenght are taken length - 1


      $('.phone').keypress(function (e) { if (this.value.length > 9) {this.value = this.value.slice(0, 9);}  });  
      if ($(".phone").length > 0) 
        {
            document.querySelector(".phone").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
      }



      $('.gender').append('<option  value="" selected>Select Gender</option><option  value="Male">Male</option><option  value="Female">Female</option><option  value="Other">Other</option>) ');
      //$('.address').keypress(function (e) { if (this.value.length > 299) { this.value = this.value.slice(0, 299); }    });  
    
       
       $('.city').keypress(function (e) { if (this.value.length > 49) { this.value = this.value.slice(0, 49); } });
       $('.city').keypress(function (e) {
            var regex = new RegExp("^[a-zA-Z \s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) { return true;} else { e.preventDefault(); return false;}
       });


      $('.zip').keypress(function (e) {  if (this.value.length > 5) { this.value = this.value.slice(0, 5); }   });
      if ($(".zip").length > 0) 
        {
            document.querySelector(".zip").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }



      $('.dealvalue').keypress(function (e) { if (this.value.length > 7) { this.value = this.value.slice(0, 7); }   }); 
      if ($(".dealvalue").length > 0) 
        {
            document.querySelector(".dealvalue").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }


      
      $('.empcount').keypress(function (e) {  if (this.value.length > 3) { this.value = this.value.slice(0, 3); }  });
      if ($(".empcount").length > 0) 
        {
            document.querySelector(".empcount").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }


      $('.year').keypress(function (e) {  if (this.value.length > 3) { this.value = this.value.slice(0, 3); }    }); 
      if ($(".year").length > 0) 
        {
            document.querySelector(".year").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }


      $('.gst').keypress(function (e) { if (this.value.length > 14) { this.value = this.value.slice(0, 14); }  }); 
      if ($(".gst").length > 0) 
        {
            document.querySelector(".gst").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }


      $('.pan').keypress(function (e) { if (this.value.length > 9) { this.value = this.value.slice(0, 9); }   }); 
      if ($(".pan").length > 0) 
        {
            document.querySelector(".pan").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        }


      $('.fssai').keypress(function (e) { if (this.value.length > 13) { this.value = this.value.slice(0, 13); }   });
      if ($(".fssai").length > 0) 
        {
            document.querySelector(".fssai").addEventListener("keypress", function (evt) 
            {if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {  evt.preventDefault(); }   });
        } 
      




    /* -- Menu Hamburger -- */
    $(".menu-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("mobile-left");
        $(".menu-hamburger img").toggle();
    });
    /* -- Menu Topbar Hamburger -- */    
    $(".topbar-toggle-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("topbar-toggle-menu");        
        $(".topbar-toggle-hamburger img").toggle();       
    });
    /* -- Switchery -- */
    var setting_first = document.querySelector('.js-switch-setting-first');
    var switchery = new Switchery(setting_first, { color: '#0080ff', size: 'small' });
    var setting_second = document.querySelector('.js-switch-setting-second');
    var switchery = new Switchery(setting_second, { color: '#0080ff', size: 'small' });
    var setting_third = document.querySelector('.js-switch-setting-third');
    var switchery = new Switchery(setting_third, { color: '#0080ff', size: 'small' });
    var setting_fourth = document.querySelector('.js-switch-setting-fourth');
    var switchery = new Switchery(setting_fourth, { color: '#0080ff', size: 'small' });
    var setting_fifth = document.querySelector('.js-switch-setting-fifth');
    var switchery = new Switchery(setting_fifth, { color: '#0080ff', size: 'small' });
    var setting_sixth = document.querySelector('.js-switch-setting-sixth');
    var switchery = new Switchery(setting_sixth, { color: '#0080ff', size: 'small' });
    var setting_seventh = document.querySelector('.js-switch-setting-seventh');
    var switchery = new Switchery(setting_seventh, { color: '#0080ff', size: 'small' });
    var setting_eightth = document.querySelector('.js-switch-setting-eightth');
    var switchery = new Switchery(setting_eightth, { color: '#0080ff', size: 'small' });
    /* -- Bootstrap Popover -- */
    $('[data-toggle="popover"]').popover();
    /* -- Bootstrap Tooltip -- */
    $('[data-toggle="tooltip"]').tooltip();
});