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
           
            $('.tab').mouseover(function() {
                var type = "#" + $(this).attr('id') + "_text";
                $('.banner_content').css('display',"none");
                $(type).css('display','block');
                $(this).css('text-decoration',"underline");
            });

            $('.tab').mouseout(function() {
                $('.banner_content').css('display',"none");
                 $("#home_text").css('display','block');
                $(this).css('text-decoration',"none");
            });
            
        });
    
    
    </script>
    
<head>
    
<body id='old'>
    <div id='container'>        
        <img src='resources/header.png' />
        
        <a id='home_tab' class='tab'  data-selected='true'></a>
        <a id='offer' class='tab'   >Offers &amp; Tenders</a>
        <a id='comp' class='tab' />Events</a>
        <a id='directory' class='tab' />Directory</a>
        <a id='press' class='tab' />Press &amp; News</a>
        
        
        
        <div id='content_holder'>
            <div id='home_text' class='banner_content'>
                <h1>Wines and Spirits</h1>
                <h2>Trade and Networking Directory</h2>
                <p>50,000 companies, 41 countries, 10 languages</p>
            </div>    
            
            <div id='offer_text' class='banner_content not_home'>
                <h1>Offers &amp; Tenders</h1>
                <p>Tenders give buyers easy access to offers from suppliers by category, for free. Suppliers - promote your special offers direct to buyers on a pay as you go basis.</p>
            </div>

            <div id='comp_text' class='banner_content not_home'>
                <h1>Events</h1>
                <p>Journalists, event and competition organisers can request multiple samples in one hit while suppliers can enter different events with a single form. We can produce your tasting booklet and much more.</p>
            </div>

            <div id='press_text' class='banner_content not_home'>
                <h1>Directory</h1>
                <p>Suppliers – upload your press releases for easy access by journalists. Journalists – sign up to receive news from across the industry and tailor your account to receive only what matters to you.<p>
            </div>

            <div id='directory_text' class='banner_content not_home'>
                <h1>Press &amp; News</h1>
                <p>Find out who sells what and to whom. Be found by claiming or creating your listing; search for people, products and companies and make valuable connections within the trade</p>
            </div>            
        </div>
                
        
    
        
        <div id='sidebar'>
            
            <img src='resources/sm_trad.png' id='social_box' />
            <img src='resources/in_the_press_vert.png'  id='in_the_press'  />
            
            
            
        </div>
        

        <div id='news_ticker'>
            <div id='news_ticker_content'>
                <ul >
                    <li class='ticker_item'>Competition: China Wine Awards 2012 <span class='news_date'>(1st Sept)</span></li>

                </ul>
            </div>
            <img src='resources/pause.png' id='pause' />
            <span id='next_news'> &raquo;</span>
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
            <h2>Event organisers</h2>
               
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
        

            <!--
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

    
            <div id='news'> 
                <h2>News</h2>


                <p>3ème édition pour le prix de l'œnotourisme </p><em>24 Aug</em>

                <p>Le château de Gevrey-Chambertin acheté pour 8 millions d'euros par un chinois </p><em>23 Aug</em>
                <p>La nouvelle est tombée hier, un investisseur chinois ayant fait fortune...   </p><em>23 Aug</em>
                
                <p>Château de Gevrey Chambertin now under Chinese ownership  </p><em>23 Aug</em>


            
                <p class='more'>More &raquo;</p>
            </div>
        
            -->
            <img src='resources/footer.png' id='footer'>
	</div>
</body>
</html>
