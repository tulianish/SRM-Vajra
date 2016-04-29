$(document).ready(function(){
    $("#uni").click(function(){
        $("#typeregister").attr("value","UNIVERSITY");
        $("div#form").css("visibility","hidden"); 
        $("#universitat").css("height","auto");
        $("#universitat").css("overflow","visible");
        $("#individual input").removeAttr("required");
    });
    $("#ind").click(function(){
        $("#typeregister").attr("value","INDIVIDUAL");
        $("div#form").css("visibility","hidden"); 
        $("#individual").css("height","auto");
        $("#individual").css("overflow","visible");
        $("#universitat input").removeAttr("required");
    });
    $("#reset-form").click(function(){
        location.reload();    
    });
    $("#reset-form2").click(function(){
        location.reload();    
    });
});