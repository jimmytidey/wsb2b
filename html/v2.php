<!DOCTYPE html>

<html>
<head>

	<meta charset=utf-8 />


	<title>LANDING PAGE</title>
	<meta name="google-site-verification" content="zQd8pef_mazi8KBab_uSbTF8BsxNJAE62AUWO2hgUho" />
	<meta name="description" content="Jimmy Tidey - Product Manager and Creative Technologist" />
	

	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>
    
    <script>
        $(document).ready(function() { 
            $('#arrow_right').click(function() {
                
                //show left arrow
                if(parseInt($('#scroll').css('left')) == 0) { 
                    $('#arrow_left').css('display', 'block');
                }

                 if(parseInt($('#scroll').css('left')) > -5400 && !$('#scroll').is(":animated")) {

                     $('#scroll').animate({
                         left: '-=960'
                     });
                     
                     //assign selected state to next link
                     $('[data-selected="true"]').attr('data-selected', 'false').next().attr('data-selected', 'true');
                     
                     //underline correct link 
                     $('[data-selected="false"]').removeClass('current_section');
                     $('[data-selected="true"]').addClass('current_section');                    
                 } 
                 
 
             });

             $('#arrow_left').click(function() {

                    if(parseInt($('#scroll').css('left')) < 0 && !$('#item_container').is(":animated") ) { 

                     $('#scroll').animate({
                         left: '+=960'
                    });
                    
                    //assign selected state to next link
                    $('[data-selected="true"]').attr('data-selected', 'false').prev().attr('data-selected', 'true');
                    
                    //underline correct link 
                    $('[data-selected="false"]').removeClass('current_section');
                    $('[data-selected="true"]').addClass('current_section');


                    //hide left arrow if necessary
                    console.log(parseInt($('#scroll').css('left')));
                    if(parseInt($('#scroll').css('left')) >= -960) { 
                        $('#arrow_left').css('display', 'none');
                    }                                       

                 }
             });
        });
    
    
    </script>
    
<head>
    
<body id='v2'>
    <div id='container'>        
        <img src='resources/header_v2.png' />
        
        <a class='tab' id='home_tab' data-selected='true'></a>
        <a id='offer' class='tab'  >Offers &amp; Tenders</a>
        <a id='comp' class='tab' />Events</a>
        <a id='directory' class='tab' />Directory</a>
        <a id='press' class='tab' />Press &amp; News</a>
        
        
        
        <div id='content_holder'>
            <img src='resources/panorama.png' id='scroll' />
        </div>
        <div id='arrow_left'>&laquo;</div>
        <div id='arrow_right'>&raquo;</div>
        
        
        <div id='offer_text' class='tab_content'>
            <p>Tenders enable buyers to reach out to all potential suppliers for a given category of product and receive offers from them. Offers enable suppliers to let the buyers know about a limited time special offers (such as bin-ends) or branded products at especially attractive pricing. Free for buyers, pay as you go for sellers.</p>
        </div>
        
        <div id='comp_text' class='tab_content'>
            <p>Competition and event organizers or journalists seeking samples can easily solicit suppliers through our platform who can sign up and submit their product information to the organiser which is stored on the platform so they only have to complete their product information once!</p>
        </div>
        
        <div id='press_text' class='tab_content'>
            <p>Get your news out to the press by uploading your press releases and other news items. Journalists can apply filters to receive only relevant news items. Stay informed about the latest news.<p>
        </div>
        
        <div id='directory_text' class='tab_content'>
            <p>Search for people, companies and products. Ensure you, your company and products can be found by others and connect to other members of the trade and connect with multiple companies that you own or work for. (It is still early days for this platform but ultimately you will be able to find out who sells what to whom.)</p>
        </div>        
        
        <div id='sidebar'>
            
            <img src='resources/in_the_press_vert.png'  />
            
            <div id='events'> 
                <h2>Events</h2>
            
                <h3>September 2012</h3>
                <p>China Wine Awards 2012</p>
                <p>Napa Valley Wine Industry Symposium</p>
            
                <h3>October 2012</h3>
                <p>Les Rencontres Vinicoles Lyon</p>
                <p>Three Wine Men Cardiff</p>
                <p>Les Rencontres Vinicoles Paris</p>
            
                <h3>November 2012</h3>
                <p>Les Rencontres Vinicoles Lausanne</p>
            
                <p class='more'>More &raquo;</p>
            </div>

            <!--
            <div id='news'> 
                <h2>News</h2>


                <p>3ème édition pour le prix de l'œnotourisme </p><em>24 Aug</em>

                <p>Le château de Gevrey-Chambertin acheté pour 8 millions d'euros par un chinois </p><em>23 Aug</em>
                <p>La nouvelle est tombée hier, un investisseur chinois ayant fait fortune...   </p><em>23 Aug</em>
                
                <p>Château de Gevrey Chambertin now under Chinese ownership  </p><em>23 Aug</em>


            
                <p class='more'>More &raquo;</p>
            </div>
            -->
            
        </div>
        
        
        <div class='cta'> 
            <h2>Suppliers</h2>
            
            <ul>    
                <li>Enable buyers and journalists to find your product information easily</li>
                <li>Respond to buyer tenders and post special offers</li>
                <li>Submit your wines to multiple competitions, guides, trade fairs etc with just one form</li>
            </ul>
            
            <p class='signup'>Sign Up &raquo;</p>
            
        </div>
        
 
        <div class='cta right'>

            
            <h2>Buyers</h2>
            <ul>
                <li>A quick and easy way to reach all potential suppliers by posting a tender for your range review or portfolio gaps</li>
                <li>Find out about special offers from suppliers</li>
                <li>Find out about event news and reach out to journalists and other members of the trade</li>
            </ul>
            <p class='signup'>Sign Up &raquo;</p>            
        </div>
        
        <div class='cta'> 
            <h2>Competition and event organisers</h2>
               
            <ul>
                <li>Invite members of the trade to submit samples, exhibit at or attend your event</li>
                <li>Manage the registration process and easily upload event information</li>
                <li>Automatically produce print-ready tasting booklets and digital tasting booklets for any mobile device</li>
            </ul>
            <p class='signup'>Sign Up &raquo;</p>            
        </div>

        <div class='cta right'> 
            <h2>Journalists</h2>
            <ul>
                <li>Find up-to-date product information</li>
                <li>Reach out to all members of the trade for samples or stories</li>
                <li>Set filters to only receive relevant news </li>
            </ul>
            <p class='signup'>Sign Up &raquo;</p>            
        </div>
        
        
        
    
  
        
        
        <img  src='resources/sm_icons.png' class='social_box' >
        
	</div>
</body>
</html>
