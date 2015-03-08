<?php
error_reporting(0);
include("header.php");
include("config.php");


$sel = "select* from home_title";
$ex = mysql_query($sel);
while ($arr = mysql_fetch_array($ex)) {
 
?>
<div class="sliderInfoContainer">
	<div class="sliderWrapper">
    	<div class="sliderWrap">
			<img src="images/slide1.jpg" alt="slide-Image" data-cycle-pager-template='<a href="#"></a>'>
			<img src="images/slide2.jpg" alt="slide-Image" data-cycle-pager-template='<a href="#"></a>'>
			<img src="images/slide3.jpg" alt="slide-Image" data-cycle-pager-template='<a href="#"></a>'>                                       
        </div>
        <div class="sliderControlWrapper">
        	<a href="#" class="prev"><img src="images/prevArrow.png" alt="Previous-Arrow"></a>
        	<a href="#" class="next"><img src="images/nextArrow.png" alt="Next-Arrow"></a>
        </div>
         <div class="sliderPagerWrapper">
              <div class="sliderPagerWrap"></div>   
          </div>
    </div>
    <div class="companyInfoWrapper">
    	<h1><?php echo $arr['title']; ?></h1>
        <div class="leftCompanyInfoWrapper">
        	<p>Good hygiene practice means eliminating or reducing the pathogens to the minimum possible level. There are millions of pathogens in our surroundings that are constantly threatening our lives and they all have different ways of reaching us. Soil contamination, food preparation facilities, live stock premises, poultry farms, dairy farms and even being in hospital environments are all hygiene critical areas and pathways of pathogens. If they are not properly cleaned and treated on a regular basis, they can be a serious health problem. 3D Eco Chemical Labs is committed to creating high quality eco friendly industrial and medical grade disinfectants and cleaning products which are designed to reduce and even eliminate the threat of pathogens be it bacteria, viruses, fungus, or even mould. All of our products are manufactured by following the guidelines of GMP, Environment Canada and Health Canada. Not only that, we also follow the rules and regulations set up by CFIA (Canada) EPA &amp; FDA (USA) and European Union.</p>
        </div>
        <div class="rightCompanyInfoWrapper">
        	<img src="images/companyFactoryImg.jpg" alt="Company-Factory">
        </div>
    </div>
</div>
<div class="TestimonialParallaxContainer">
	<div class="TestimonialParallaxImg"></div>
    <h3>We believe in delivering quality products for our customers Wordwide</h3>
</div>
<div class="aboutusContainer" id="about">
      <div class="aboutInfoBlock">
          <h2>About Us</h2>
          <div class="aboutInfoImgWrappper">
              <div class="aboutImgInfoWrap">
                  <p>3D Eco Chemical Laboratories was established in July of 2014 in Toronto, Ontario Canada by a group of highly experienced Pharmacists and research oriented PhD chemists whose goal is to develop Eco friendly industrial disinfectant products to for international market.</p>
                  <p>In 3D Eco chemical labs, our chemical experts are putting all of their efforts and life time research experience to develop Eco friendly disinfectant products. These products are specifically designed to eliminate or reduce pathogens (Bacteria, Viruses, molds, mildew) to the minimum possible level. </p>
              </div>
              <div class="aboutInfoImg">
                  <img src="images/aboutImg.jpg" alt="About-Image">
              </div>
          </div>
          <p>These pathogens are in our surroundings and are extremely harmful to human beings and animals.</p>
          <p>Along with these disinfectants which are approved by Health Canada, we have added a line of very safe and Eco friendly cleaning and degreasing products which remove soil, oil and grease from non porous hard surfaces. Accumulated soil, dirt, waxes, oil and grease are also breeding sites for these pathogens.</p>
      </div>
      <div class="aboutInfoBlock">
          <h2>Our Mission</h2>
          <div class="aboutInfoImgWrappper">
              <div class="aboutImgInfoWrap">
                  <p>All of our disinfectants are approved by Health Canada and are manufactured under strict guidelines of the Canadian Environment Agency to ensure that our products remain eco friendly.</p>
                  <p>Our mission is to develop high quality industrial and institutional disinfectant and hygiene products which may help to reduce and minimize the threat of pathogens in our surroundings to keep our lives and environments safe and clean.</p>
              </div>
              <div class="aboutInfoImg">
                  <img src="images/goalImg.jpg" alt="About-Image">
              </div>
          </div>
      </div>
</div>
<div class="testimonialContainer">
	<h2>Testimonials</h2>
	<div class="testimonailWrapper">    	
    	<div class="testimonailWrap">
        	<div class="testimonailInfoWrapper">
            	<ul>
                	<li>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="greenColored">Brendan Smith - CEO Aries Hospital Canada</p>
                    </li>
                    <li>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="greenColored">Brendan Smith - CEO Aries Hospital Canada</p>
                    </li>
                </ul>
            </div>
            <div class="testimonailControlsWrapper">
            	<a href="#" class="testPrev"></a>
                <a href="#" class="testNext"></a>
            </div>
        </div>
    </div>
</div>
<div class="productParallaxContainer" id="product">
	<h2>Our Prodcuts Range</h2>
    <div class="productParallaxImgWrapper">
    	<div class="productParallaxImg"></div>
        <img src="images/productImg.png" alt="productImage">
    </div>
</div>
<div class="productItemListContainer">
	<div class="productItemListBlockWrapper">
    	<h2>Cleaners and Disinfectants</h2>
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/germilexH.jpg" alt="Germilex-H">
            </div>
            <div class="productListContentWrap">
                  <h2>Germilex H</h2>
                  <p>Germilex H is designed specially for hospitals and health care facilities where disinfection, sanitization and deodorization is of prime importance. When used as directed, this product is formulated to disinfect pre cleaned inanimate hard surface such as walls, floors, sink tops, tables, chairs and bed frames.</p>
                  <a href="#">read more</a>
            </div>
        </div>
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/germilexV.jpg" alt="Germilex-V">
            </div>
            <div class="productListContentWrap">
                  <h2>Germilex V</h2>
                  <p>Germilex V is designed especially for poultry farms, meat processing plants, livestock premises, dairies, food processing plants, hotels and restaurants where disinfection, sanitization and deodorization is of prime importance. When used as directed, Germilex V is formulated for disinfection of walls, ceilings, side walls, metal surfaces etc.</p>
                  <a href="#">read more</a>
            </div>
        </div>
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/germilexGP.jpg" alt="Germilex-GP">
            </div>
            <div class="productListContentWrap">
                  <h2>Germilex GP</h2>
                  <p>Germilex GP Detergent/Disinfectant has been designed specifically for food processing plants food service establishments and other institutions where housekeeping is of prime importance. In addition, Germilex GP Detergent/Disinfectant deodorizes those areas which generally are hard to keep fresh smelling.</p>
                  <a href="#">read more</a>
            </div>
        </div>
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/algaequit.jpg" alt="algaequit">
            </div>
            <div class="productListContentWrap">
                  <h2>GAlgeaquit <sup>TM</sup></h2>
                  <p>Concentrated, non-metallic dual quaternary compound based Algaequit controls the growth of Algae in the swimming pools. It makes the water clean, sparkling and free from Algae, mold, fungus, bacteria and viruses.<br>It is highly effective even at low concentration at high as well as at low pH.</p>
                  <a href="#">read more</a>
            </div>
        </div>
    </div>
    <div class="productItemListBlockWrapper">
    	<h2>Cleaners and Degreasers</h2>       
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/3dEcoCitrus.jpg" alt="3dEcoCitrus">
            </div>
            <div class="productListContentWrap">
                  <h2>3D Eco Citrus</h2>
                  <p>3D Eco Citrus is high strength cleaner and degreaser designed both for heavy duty cleaning and every day maintenance. A concentrated and biodegradable formulation of 3D Eco Citrus is based on Citrus derived and water soluble solvents incorporated with Eco friendly surfactants.</p>
                  <a href="#">read more</a>
            </div>
        </div>
        <div class="productListBlock">
        	<div class="productListImgWrap">
            	<img src="images/3dEcoGrillCleaner.jpg" alt="3dEcoGrillCleaner">
            </div>
            <div class="productListContentWrap">
                  <h2>3D Eco Oven and Grill Cleaner</h2>
                  <p>3D Eco Oven and Grill cleaner is a combination of environmentally safe, water soluble and  biodegradable solvents, surfactants  emulsifying  and corrosion inhibiting agents which penetrate deep into the surface and remove baked on carbon, food residue, grease, oil, fats, sugars and proteins.</p>
                  <a href="#">read more</a>
            </div>
        </div>        
    </div>
</div>
<div class="infrastructureParallaxContainer">
	<div class="infrastructureImg"></div>
    <p>we create all of our products on state of the art technology and international lavel factory to satisfy our customers with best products in market.</p>
</div>
<div class="serviceListWrapper" id="market">
	<h2>Markets We Serve</h2>
    <ul>
    	<li>Hospitals and Healthcare Facilities</li>
    	<li>Poultry Farms, Animal Houses, and Veterinary Clinics</li>
    	<li>Food Manufacturing Facilities, Hotels &amp; Restaurants</li>
    </ul>
</div>
<div class="contactUsContainer" id="contacts">
	<h2>Get in Touch</h2>
    <p>We are always here to answer to your questions, please feel free to ask about our products, poduction, delivery times and prices etc. Fill out the form below with queries and we will respond you promtly.</p>
    <div class="addressInfoWrapper">
    	<div class="addressWrapper">
        	<div class="addressInfoBlock">
            	<div class="addressIcon">
                	<i class="pinIcon"></i>
                </div>
                <div class="addressContent">
                	<p>Head Office:</p>
					<p>2100 Steeles Ave West, Concord, ON L4K 2V1</p>
                </div>
            </div>
            <div class="addressInfoBlock">
            	<div class="addressIcon">
                	<i class="telephone"></i>
                </div>
                <div class="addressContent">
                	<p>Head Phone:</p>
					<p>001-416-848-6813</p>
                </div>
            </div>
            <div class="addressInfoBlock">
            	<div class="addressIcon">
                	<i class="mailIcon"></i>
                </div>
                <div class="addressContent">
                	<p>Email:</p>
					<p>info@3decolabs.com</p>
                </div>
            </div>
            <div class="socialMediaWrapper">
            	<h3>Follow us on:</h3>
                <div class="socialMedia">
                	<a href="#" class="facebook"></a>
                    <a href="#" class="linkdin"></a>
                    <a href="#" class="twitter"></a>
                </div>
            </div>
        </div>
        <div class="formWrapper">
        	<p>For Additional Info:</p>
            <form>
            	<fieldset>
                	<label>Name:</label>
                    <input type="text">
                </fieldset>
                <fieldset>
                	<label>Company:</label>
                    <input type="text">
                </fieldset>
                <fieldset>
                	<label>Email:</label>
                    <input type="text">
                </fieldset>
                <fieldset>
                	<label>Contact:</label>
                    <input type="text">
                </fieldset>
                <fieldset>
                	<label>Message:</label>
                    <textarea></textarea>
                </fieldset>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
    <div class="mapWrapper">
    	<h2>3D Eco Network</h2>    
		<div id="map" class="mapWrap"></div>
    </div>
</div>
<?php
include("footer.php");
}
?>