// Title: The Web Development Bootcamp
// *    Author: Colt Steele
// *    Date: 
// *    Code version: 
// *    Availability: Udemy.com 
// the beneath code has been adapted from the To-Do List section of the Udemy course

// this will allow a strike to go through notes which are no longer needed
$("ol").on("click","li",function(){
    $(this).toggleClass("strike");
});
// remove a note
$("ol").on("click","span",function(e){
    $(this).parent().remove();
    e.stopPropogation();
});
// add a new note
$("input[type='text']").keypress(function(e){
    if(e.which=== 13){
        var notes = $(this).val();
        $(this).val("");
        $("ol").append("<li class= 'linotes'><span class='delete'><i class='fa fa-trash'></i></span>"+ notes + "</li>")
    }

});

