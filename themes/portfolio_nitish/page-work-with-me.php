<?php
/**
 * Template Name: Work With Me
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio_nitish
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="contact-body">

                <form action="mailto:records.21@hotmail.com" method="post" enctype="text/plain">
                    <fieldset class="radio-options">
                    <h1 class="wwm-title">Looking to <span class="collab">collaborate</span><span class="wm"> with me?</span></h1>
                    <div class="option-information">    
                        <input type="radio" name="interest" id="ux" value="ux" checked>
                            <label for="ux">ux/ui design</label>
                            <p class="option-description">
                                Having worked with various startups and companies on improving their online presence,
                                I would love to help your brand achieve the same with your websites and mobile apps. 
                                The pricing will depend on scope, durantion and effort involved in undertaking the said project.
                            </p>
                        </div>
                        <div class="option-information">
                            <input type="radio" name="interest" id="photo" value="photo" >
                            <label for="photo">photography</label>
                            <p class="option-description">    
                                Bringing out stories from various adventures while capturing the essence of those beautiful 
                                landscapes is what you can expect from my work. Having it published in various known magazines 
                                and online platforms such as National Geographic Traveller, Lonely Planet, Conde Nast Traveller India,
                                BBC Earth, GoPro and various others, adds on to the credibility.
                            </p>
                        </div>
                        <div class="option-information">
                            <input type="radio" name="interest" id="digital" value="d&sm" >
                            <label for="digital">digital / social media</label>
                            <p class="option-description">        
                                Highly engaging organic social media reach as an adventurer and photographer will definitely help your brand
                                in gaining a dedicated following along with quality content.
                            </p>
                        </div>
                        <div class="option-information">
                            <input type="radio" name="interest" id="sale" value="photo-sale" >
                            <label for="sale">photo print sale</label>
                            <p class="option-description">   
                                Request a photo print of your choice or send custom requests for special print papers and sizes and bulk orders.
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="customer-info">
                        <legend><span>To: </span>waila.nitish@gmail.com</legend>
                        <input type="text" name="name" placeholder="name" required/>
                        <input type="text" name="email" placeholder="email" required />
                        <textarea name="message" placeholder="message" required></textarea>

                        <input class="submit-form" type="submit" name="send" value="Send" />
                    </fieldset>
                </form>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
