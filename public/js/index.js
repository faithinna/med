jQuery(function($) {
$('.navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

});

$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});

});

function GetCurrentPageName() { 
//method to get Current page name from url. 
var PageURL = document.location.href; 
var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
return PageName.toLowerCase() ;
}


$(document).ready(function () {

 var firstnewspage = $("#newspager").html();
 $("#newspage1").html(firstnewspage);

	$('#go').bootpag({
    total: 2,          // total pages
    page: 1,            // default page
    maxVisible:0,     // visible pagination
    leaps: false ,
}).on("page", function(event, num){
	var a = $("#newspage"+num).html();
    $("#newspager").html(a); // or some ajax content loading...
    // ... after content load -> change total to 10
    $(this).bootpag({total: 2, maxVisible: 0});
}); 

$('#news_container').on('click', 'a', function(e) {
    var link_id = this.id;
    var p = $('a[id='+link_id+']>img').attr('src');
    $("img[id='modal_image_holder']").attr('src', p);
    $("#myModal").modal('show');
});

var CurrPage = GetCurrentPageName(); 
if(!CurrPage)
{
$('#home').addClass('active') ;    
}
else if(CurrPage==='about')
{
 $('#about').addClass('active') ;    
}
else if(CurrPage==='contact')
{
 $('#contact').addClass('active') ;    
}
else if(CurrPage==='news')
{
 $('#news').addClass('active') ;    
}

/*switch(CurrPage){
case '""':
 $('#home').addClass('active') ;
 break;
case 'about':
 $('#about').addClass('active') ;
 break;
case 'contact':
 $('#contact').addClass('active') ;
 break;
 case 'news':
 $('#news').addClass('active') ;
 break;
}
*/

//$('a:not([href]) > *').unwrap();
});

